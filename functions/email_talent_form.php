<?php
/*****************************************
Talent Form. . 
******************************************/

add_action( 'admin_post_email_talent_form', 'processtalentform' );
add_action( 'admin_post_nopriv_email_talent_form', 'processtalentform' );

function processtalentform() {
  //Handle the CV Upload
  require_once( ABSPATH . 'wp-admin/includes/image.php' );
  require_once( ABSPATH . 'wp-admin/includes/file.php' );
  require_once( ABSPATH . 'wp-admin/includes/media.php' );         

  $attachment_id = media_handle_upload( 'cv', $_POST['post_id'] );
  $attachments = get_attached_file( $attachment_id );

  //Get variables for emai content
  $name = $_POST['firstname']; 
  $number = $_POST['telephone'];
  $company = $_POST['companyname'];
  $email = $_POST['email'];
  $message = strip_tags ( $_POST['message'] );
  $admin_email = get_option( 'admin_email' );

  //Build the message to the head office
  $messageOffice = email_header();
  $messageOffice .= new_talent_form($name, $number, $company, $email, $message);
  $messageOffice .= reason_new_talent_form();
  $messageOffice .= email_footer();

  //Set headers
  $headers[] = 'Content-Type: text/html; charset=UTF-8';
  $headers[] = 'From: Hamblin Employment Group <info@hamblin.co.im>';
  
  $mailoffice = wp_mail($admin_email, 'Talent Form Submission', $messageOffice, $headers, array($attachments) );

  if ($mailoffice) {
      wp_delete_attachment( $attachment_id, true );
      wp_redirect( get_site_url().'?p=251');
      exit;
  }

}