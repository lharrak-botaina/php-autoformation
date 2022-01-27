<?php
    // $is_authenticated = false;
    // $message = '';

    // switch($is_authenticated){
    //     case true:
    //         $message = 'Welcome!';
    //         break;
    //     case false:
    //         $message = 'Please Login';
    //         break;
    //     default:
    //         $message = 'You are not authorized!';
    // }

    // echo $message;




$message = '';
$role = 'author';

switch ($role) {
	case 'admin':
		$message = 'Welcome, admin!';
		break;
	case 'editor':
	case 'author':
		$message = 'Welcome! Do you want to create a new article?';
		break;
	case 'subscriber':
		$message = 'Welcome! Check out some new articles.';
		break;
	default:
		$message = 'You are not authorized to access this page';
}

echo $message;