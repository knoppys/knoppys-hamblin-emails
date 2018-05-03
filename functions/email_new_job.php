<?php
/****************************
Get all the subscriber email addresses and send them an email
to let them know a new job has been posted. 
We do this buy monitoring the "publish" post status


add_action('transition_post_status', 'send_new_post', 10, 3);

// Listen for publishing of a new post
function send_new_post($new_status, $old_status, $post) {
	if('publish' === $new_status && 'publish' !== $old_status && $post->post_type === 'vacancy') {

		//Get all the users email addresses that have a "yes" as the newsletter meta. 
		$userargs = array(
			'meta_key' => 'jobalerts',
			'meta_value' => 'yes'
		);
		$users = get_users($userargs);

		//Lets get the most recent job
		$postArgs = array(
			'post_type' => 'vacancy',
			'numberposts' => 1,
		);
		$posts = wp_get_recent_posts($postArgs);
		$jobID = $posts[0]['ID'];

		foreach ($users as $user) {
			$name = ucfirst($user->display_name);
			$to = $user->user_email;
			$jobtitle = get_the_title($jobID);
			$url = get_the_permalink($jobID);

			$headers[] = 'Content-Type: text/html; charset=UTF-8';
  			$headers[] = 'From: Hamblin Employment Group <info@hamblin.co.im>';

			$messageNewJob = email_header();
	        $messageNewJob .= new_job_notification($name, $jobtitle, $url);
	        $messageNewJob .= reason_jobalert();
	        $messageNewJob .= email_footer();
	        $mailCandidate = wp_mail($to, 'New Vacancy Notification', $messageNewJob, $headers );
		}

	}
}
*****************************/