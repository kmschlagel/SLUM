<?php
require 'core/init.php';

// Check for initial action.
if(isset($_POST['action'])) {
	$action = $_POST['action'];
  // If action isn't set, check if logged in.
  // Redirect to login page if not.
  } else {
	if (!isset($_SESSION['id'])) {
		$action = 'admin login';
	} else {
		$action = 'create post';
	}
}

if ($action == 'admin login') {
	$title = "Login Page";
	include('view/login.php');

} else if ($action == 'login_attempt') {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'We need your username and password.';
		include('view/login.php');
	}
	else if ($users->user_exists($username) === false) {
		$errors[] = 'That username doesn\'t exist.';
		include('view/login.php');
	}
	else {

		$login = $users->login($username, $password);
		if ($login === false) {
			$errors[] = 'Sorry, that username/password is invalid.';
			include('view/login.php');
		}
		else {
			//login method returns user ID, which becomes session ID.
			$_SESSION['id'] = $login; 

			header('Location: index.php');
			exit();
		}
	}

} else if ($action == 'logout') {
	include('view/logout.php');

} else if ($action == 'view_main') {

	//Get the most recent post and display it on the main page
	$title = "Preach Blog";
	$content = $posts->get_last_post();
	include('view/main.php');

} else if ($action == 'create post') {
	//get title and text from saves table to fill editor fields:
	$saves = $posts->get_saved_post();
	//pull most recent posts to list in sidebar
	$recent = $posts->get_recent_posts();
	if (array_key_exists('id', $_POST)) {
		$id = $_POST['id'];
		$post = $posts->get_post($id);
	}
	//Go to text editor
	$title = "Editor";
	include('view/editor.php');

} else if ($action == 'save post') {
	$id = $_POST['blog_id'];
	$title = $_POST['blog_title'];
	$text = $_POST['blog_text'];
	$posts->save_post($id, $title, $text);
	$recent = $posts->get_recent_posts();
	echo json_encode($recent);

} else if ($action == 'submit post') {
	if(array_key_exists('blog_text', $_POST)){
		$title = $_POST['blog_title'];
		$text = $_POST['blog_text'];
		$type = $_POST['blog_type'];
	    $posts->add_post($title, $text, $type);
	    //empty title and text variables before updating saves table
	    $id = "1";
	    $title = "";
	    $text = "";
	    $posts->save_post($id, $title, $text);
	    $recent = $posts->get_recent_posts();
		echo json_encode($recent);
	    //save table cleared, get last post and display it on the main page
	    //$content = $posts->get_last_post();
	    //$reveal = $_POST['blog_text'];
		//include('view/main.php');

 	} else {

 		//Return to editor (it was empty)
 		$title = "Editor";
		include('view/editor.php');
	}

} else if ($action == 'retrieve_post_by_id') {
	$id = $_POST['post_id'];
	$content = $posts->get_post_by_id($id);
	//ajax wants array returned as json data, so encode and echo.
	echo json_encode($content);

} else if ($action == 'retrieve_post_by_type') {
	$type = $_POST['post_type'];
	$content = $posts->get_post_by_type($type);
	//ajax wants array returned as json data, so encode and echo.
	echo json_encode($content);

  // Get list of messages for sidebar on Message From Mary
} else if ($action == 'retrieve_message_list') {
	$messages = $posts->get_recent_messages();
	echo json_encode($messages);

  // Load message from sidebar on Message From Mary
} else if ($action == 'retrieve_message') {
	$id = $_POST['message_id'];
	$message = $posts->get_post_by_id($id);
	echo json_encode($message);

} else if ($action == 'delete_post') {
	$id = $_POST['post_id'];
	$posts->delete_post($id);
	$recent = $posts->get_recent_posts();
	echo json_encode($recent);
}
