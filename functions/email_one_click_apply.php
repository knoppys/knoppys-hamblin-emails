<?php 
/***************************
1 Click apply to email form
***************************/
function clickapply() {
  
  $jobid = ($_POST['jobid']);
  $quickmessage = ($_POST['message']);
  $nonce = ($_POST['nonce']);
  
  //check_ajax_referer( 'Gr33nf13ld', 'nonce' );

  //Get the job details
  $jobTitle = get_the_title($jobid);
  $jobLocation = get_post_meta($jobid, 'city', true);

  //Get the user details
  $user = wp_get_current_user();
  $telephone = get_user_meta($user->ID, 'user_telephone', true);
  $cvid = get_user_meta($user->ID,'user_cv');
  $attachments = get_attached_file(intval($cvid[0]));
  $to = $user->user_email;
  $fullName = $user->display_name;
  $email = $user->user_email;
  $admin_email = get_option('admin_email');
  
  //Build the message to the candidate
  $messageCandidate = email_header();
  $messageCandidate .= candidate_application($jobTitle, $jobLocation);
  $messageCandidate .= reason_jobapplication();
  $messageCandidate .= email_footer();

 //Build the message to the head office
  $messageOffice = email_header();
  $messageOffice .= new_candidate_application($jobTitle, $jobLocation, $fullName, $email, $telephone, $quickmessage);
  $messageOffice .= reason_new_jobapplication();
  $messageOffice .= email_footer();


  $headers[] = 'Content-Type: text/html; charset=UTF-8';
  $headers[] = 'From: Hamblin Employment Group <info@hamblin.co.im>';

  $mailCandidate = wp_mail($to, 'Application successfull', $messageCandidate, $headers );
  $mailoffice = wp_mail($admin_email, 'New Candidate Application', $messageOffice, $headers, array($attachments) );
   
var_dump($user);
  die();
}
add_action( 'wp_ajax_clickapply', 'clickapply' );
add_action( 'wp_ajax_nopriv_clickapply', 'clickapply' );