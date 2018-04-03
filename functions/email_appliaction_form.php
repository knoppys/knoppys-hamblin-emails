<?php
/*****************************************
Function to send the application email via 
the application form.
******************************************/

add_action( 'admin_post_email_appliaction_form', 'processform' );
add_action( 'admin_post_nopriv_email_appliaction_form', 'processform' );

function processform() {
  //Handle the CV Upload
  require_once( ABSPATH . 'wp-admin/includes/image.php' );
  require_once( ABSPATH . 'wp-admin/includes/file.php' );
  require_once( ABSPATH . 'wp-admin/includes/media.php' );         

  $attachment_id = media_handle_upload( 'cv', $_POST['postID'] );
  $attachments = get_attached_file( $attachment_id );

  //Get variables for emai content
  $jobTitle = $_POST['jobTitle']; 
  
  $to = $_POST['email'];
  $telephone = $_POST['tel'];
  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $telephone = $_POST['telephone'];
  $password = $_POST['password'];
  $bday = $_POST['bday'];
  $permit = $_POST['workpermit'];
  $basedon = $_POST['basedon'];
  $noofhours = $_POST['noofhours'];
  $Executive = $_POST['Executive'];
  $Temporary = $_POST['Temporary'];
  $Interim = $_POST['Interim'];
  $Permanent = $_POST['Permanent'];
  $discipline = $_POST['discipline'];
  $criminal = $_POST['criminal'];
  $quickmessage = strip_tags ( $_POST['message'] );
  $add1 = $_POST['add1'];
  $add2 = $_POST['add2'];
  $add3 = $_POST['add3'];
  $town = $_POST['town'];
  $postcode = $_POST['postcode'];
  $datasaved = $_POST['datasaved'];
  $jobalerts = $_POST['jobalerts'];
  $jobRef = $_POST['jobRef'];
  $job_id = $_POST['job_id'];

  $admin_email = get_option( 'admin_email' );

  //Build the message to the candidate
  $messageCandidate = email_header();
  $messageCandidate .= candidate_application($jobTitle);
  $messageCandidate .= reason_jobapplication();
  $messageCandidate .= email_footer();

  //Build the message to the head office
  $messageOffice = new_candidate_application($to, $jobTitle, $telephone, $name, $lastname, $bday, $permit, $basedon, $Executive, $Temporary, $Interim, $Permanent, $discipline, $criminal, $quickmessage, $add1, $add2, $add3, $town, $postcode, $datasaved, $jobalerts, $jobRef, $job_id, $noofhours );
  
  $headers[] = 'Content-Type: text/html; charset=UTF-8';
  $headers[] = 'From: Hamblin Employment Group <info@hamblin.co.im>';

  $officeheaders[] = 'Content-Type: text/plain; charset=UTF-8';
  $officeheaders[] = 'From: Hamblin Website <no-reply@hamblin.co.im>';

  $mailCandidate = wp_mail($to, 'Application Successful', $messageCandidate, $headers );
  $mailoffice = wp_mail($admin_email, 'Posting From Troy', $messageOffice, $officeheaders, array($attachments) );

  /**********************************
  IF THE USER IS A NEW USER and they have said we can save their data
  ***********************************/

  if ( $datasaved == 'yes') {
   
      if (is_user_logged_in()) {

          //If not a new user, just update the meta
          $newUserID = get_current_user_id();
          update_user_meta($newUserID, 'telephone', $telephone );
          update_user_meta($newUserID, 'bday', $bday );
          update_user_meta($newUserID, 'workpermit', $permit );
          update_user_meta($newUserID, 'basedon', $basedon );
          update_user_meta($newUserID, 'noofhours', $noofhours );
          update_user_meta($newUserID, 'Executive', $Executive );
          update_user_meta($newUserID, 'Permanent', $Permanent );
          update_user_meta($newUserID, 'Interim', $Interim );
          update_user_meta($newUserID, 'Temporary', $Temporary );
          update_user_meta($newUserID, 'discipline', $discipline );
          update_user_meta($newUserID, 'criminal', $criminal );
          update_user_meta($newUserID, 'add1', $add1 );
          update_user_meta($newUserID, 'add2', $add2 );
          update_user_meta($newUserID, 'add3', $add3 );
          update_user_meta($newUserID, 'town', $town );
          update_user_meta($newUserID, 'postcode', $postcode );
          update_user_meta($newUserID, 'datasaved', $datasaved );     
          update_user_meta($newUserID, 'message', $quickmessage );  
          update_user_meta($newUserID, 'jobalerts', $jobalerts );        
            
      }  else {

        //Create the new user
        $newUserID = wp_insert_user( array (
          'user_email' => esc_attr( $to ),
          'user_pass' => sanitize_text_field($password),
          'user_login' => $to,
          'first_name' => $name,
          'last_name' => $lastname,
          'role' => 'subscriber',
          'display_name' => $name,

          )
        ); 
        update_user_meta($newUserID, 'telephone', $telephone );
        update_user_meta($newUserID, 'bday', $bday );
        update_user_meta($newUserID, 'workpermit', $permit );
        update_user_meta($newUserID, 'basedon', $basedon );
        update_user_meta($newUserID, 'noofhours', $noofhours );
        update_user_meta($newUserID, 'Executive', $Executive );
        update_user_meta($newUserID, 'Permanent', $Permanent );
        update_user_meta($newUserID, 'Interim', $Interim );
        update_user_meta($newUserID, 'Temporary', $Temporary );
        update_user_meta($newUserID, 'discipline', $discipline );
        update_user_meta($newUserID, 'criminal', $criminal );
        update_user_meta($newUserID, 'add1', $add1 );
        update_user_meta($newUserID, 'add2', $add2 );
        update_user_meta($newUserID, 'add3', $add3 );
        update_user_meta($newUserID, 'town', $town );
        update_user_meta($newUserID, 'postcode', $postcode );
        update_user_meta($newUserID, 'datasaved', $datasaved );     
        update_user_meta($newUserID, 'message', $quickmessage );  

        //Add them to the job alerts list if they have said yes
        if ($jobalerts == 'yes') {
          update_user_meta($newUserID, 'jobalerts', $jobalerts );
        }

        //If the user has been created properly then send them a welcome email
        if ($newUserID) {

          //Build the message to the candidate
          $messageNewCandidate = email_header();
          $messageNewCandidate .= new_user_registration($name, $to, $password);
          $messageNewCandidate .= reason_registration();
          $messageNewCandidate .= email_footer();
          $mailCandidate = wp_mail($to, 'Welcome to Hamblin Employment Group', $messageNewCandidate, $headers );

        }


      }    

  }

  if ($mailCandidate) {
      //wp_delete_attachment( $attachment_id, true );
      wp_redirect( get_site_url().'?p=182');
      exit;
  }



}
