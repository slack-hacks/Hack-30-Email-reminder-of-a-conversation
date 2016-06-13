<?php
	// Include slack library from https://github.com/10w042/slack-api
	include 'Slack.php';

	$Slack = new Slack('[API TOKEN]');

	// Get the last 11 messages of the channel conversation
	$data = $Slack->call('channels.history', array(
		'channel' => $_POST['channel_id'],
		'count' => 11
	));

	// Get the user who requested the email
	$me = $Slack->call('users.info', array(
		'user' => $_POST['user_id']
	));

	// Strip "emailme" from the message to get the subject line (if one was entered)
	$text = str_replace('emailme', '', $_POST['text']);

	// Create empty array
	$messages = array();

	// Loop through channel messages
	foreach($data['messages'] as $d) {

		// Check  If the message has a user - this excludes bot messages from the email
		if($d['user']) {
			// Get the user associated with the message
			$userData = $Slack->call('users.info', array('user' => $d['user']));

			// Add to the messages array the name & image of the user, plus the actual message
			$messages[] = array(
				'user' => $userData['user']['real_name'],
				'image' => $userData['user']['profile']['image_24'],
				'message' => trim($d['text'])
			);
		}
	}

	// Remove the first item from the array (the trigger message)
	array_shift($messages);

	// Reverse the messages so oldest is first
	$messages = array_reverse($messages);

	// Create recipient
	$to  = $me['user']['profile']['real_name_normalized'] . ' <' . $me['user']['profile']['email'] . '>';

	// Set the subject line
	$subject = ($text) ? $text : 'Email reminder from Slack';

	// Set the headers & sender of the email
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Slackbot <slack@liquidlight.co.uk>' . "\r\n";

	// Set the name for the email
	$name = $me['user']['profile']['first_name'];

	// Create the messages table
	$table = '<table width="100%" style="border-collapse: collapse">';

	// Loop through all the messages
	foreach($messages as $m) {
		$table .= '<tr><td style="border: 1px solid #ccc; padding: 5px; width: 24px;"><img src="' . $m['image'] .	 '" style="disaply: block"></td><td style="border: 1px solid #ccc; padding: 5px;"><b>' . $m['user'] . '</b></td><td style="border: 1px solid #ccc; padding: 5px;"><i>' . $m['message'] . '</i></td><tr>';
	}

	// Close the table
	$table .= '</table>';

	// Include message
	include('email-template.php');

	// Send the email!
	mail($to, $subject, $message, $headers);

	// Post a message
	$sendMessage = $Slack->call('chat.postMessage', array(
		'channel' => $me['user']['id'],
		'text' => 'Yo ' . $me['user']['profile']['first_name'] . ' - I\'ve sent you that email you asked for',
		'username' => 'Emailbot',
		'icon_emoji' => ':email:'
	));
