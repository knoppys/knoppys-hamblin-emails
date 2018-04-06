<?php
/*****************************************
Create a new user from the registration form
******************************************/


add_action( 'admin_post_create_user', 'processuserform' );
add_action( 'admin_post_nopriv_create_user', 'processuserform' );

function processuserform() {
  //Handle the CV Upload
  require_once( ABSPATH . 'wp-admin/includes/image.php' );
  require_once( ABSPATH . 'wp-admin/includes/file.php' );
  require_once( ABSPATH . 'wp-admin/includes/media.php' );         

  $attachment_id = media_handle_upload( 'cv', $_POST['postID'] );
  $attachments = get_attached_file( $attachment_id );
  
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

  $admin_email = get_option( 'admin_email' );

  //Creat the headers for HTML Emails
  $headers[] = 'Content-Type: text/html; charset=UTF-8';
  $headers[] = 'From: Hamblin Employment Group <info@hamblin.co.im>';

  //Build the message to the candidate
  $messageCandidate = email_header();
  $messageCandidate .= new_user_registration($name, $to, $password);
  $messageCandidate .= reason_newuser();
  $messageCandidate .= email_footer();
  $mailCandidate = wp_mail($to, 'Application Successful', $messageCandidate, $headers );

  //Build the message to the head office
  $messageOffice = email_header();
  $messageOffice .= candidate_registration($to, $telephone, $name, $lastname, $bday, $permit, $basedon, $Executive, $Temporary, $Interim, $Permanent, $discipline, $criminal, $quickmessage, $add1, $add2, $add3, $town, $postcode, $datasaved, $jobalerts, $jobRef );  
  $messageOffice .= email_footer();
  $mailoffice = wp_mail($admin_email, 'New Candidate Registration', $messageOffice, $headers, array($attachments) );

  //Built the new user registration message for TROY
  $newregistrationmessage = troy_candidate_registration($to, $jobTitle, $telephone, $name, $lastname, $bday, $permit, $basedon, $Executive, $Temporary, $Interim, $Permanent, $discipline, $criminal, $quickmessage, $add1, $add2, $add3, $town, $postcode, $datasaved, $jobalerts, $jobRef, $job_id, $noofhours );
  $officeheaders[] = 'Content-Type: text/plain; charset=UTF-8';
  $officeheaders[] = 'From: Hamblin Website <no-reply@hamblin.co.im>';
  $troy_candidate_registration = wp_mail('webmail@hamblin.co.im', 'Posting From Troy', $newregistrationmessage, $officeheaders, array($attachments) );

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

/*****************************************
Update the current user
******************************************/

add_action( 'admin_post_update_user', 'processupdate_user' );
add_action( 'admin_post_nopriv_update_user', 'processupdate_user' );

function processupdate_user() {
 //Get the current user and process the candidate update form        

    $user = wp_get_current_user();

    wp_update_user( array ('ID' => $user->ID, 'user_email' => esc_attr( $_POST['email'] ) ) ) ;
    update_user_meta($user->ID, 'last_name', ($_POST['lastname']) );
    update_user_meta($user->ID, 'first_name', ($_POST['firstname']) );
    update_user_meta($user->ID, 'telephone', ($_POST['telephone']) );
    update_user_meta($user->ID, 'bday', ($_POST['bday']) );
    update_user_meta($user->ID, 'workpermit', ($_POST['workpermit']) );
    update_user_meta($user->ID, 'basedon', ($_POST['basedon']) );
    update_user_meta($user->ID, 'noofhours', ($_POST['noofhours']) );
    update_user_meta($user->ID, 'Executive', ($_POST['Executive']) );
    update_user_meta($user->ID, 'Permanent', ($_POST['Permanent']) );
    update_user_meta($user->ID, 'Interim', ($_POST['Interim']) );
    update_user_meta($user->ID, 'Temporary', ($_POST['Temporary']) );
    update_user_meta($user->ID, 'discipline', ($_POST['discipline']) );
    update_user_meta($user->ID, 'criminal', ($_POST['criminal']) );
    update_user_meta($user->ID, 'add1', ($_POST['add1']) );
    update_user_meta($user->ID, 'add2', ($_POST['add2']) );
    update_user_meta($user->ID, 'add3', ($_POST['add3']) );
    update_user_meta($user->ID, 'town', ($_POST['town']) );
    update_user_meta($user->ID, 'postcode', ($_POST['postcode']) );
    update_user_meta($user->ID, 'datasaved', ($_POST['datasaved']) );
    update_user_meta($user->ID, 'jobalerts', ($_POST['jobalerts']) );
    update_user_meta($user->ID, 'message', ($_POST['message']) );


    wp_redirect( get_the_permalink(441) );
    exit;

}