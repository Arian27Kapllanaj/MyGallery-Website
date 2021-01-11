<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'mygallery');

/*  //Checking if database has connnected successfully
if ($db) {
    echo 'connected';
  } else {
    echo 'not connected';
  }
  */

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

if (isset($_POST['login_btn'])) {
    login();
}

// LOGIN USER
function login(){

    global $db, $username, $errors;
    
    // grap form values
    $username = ($_POST['username']);
    $password = ($_POST['password']);    

    // attempt login if no errors on form

		// attempt login if no errors on form

		if (count($errors) == 0) {

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
                header('location: submission.php');   //after login it will go to submission.php
			} else {
				array_push($errors, "Wrong username/password combination");
			}

		}
}

?>