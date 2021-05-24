<?php
// File responsible for handling the session and authorization
  if(!isset($_POST['login_button'])){ //Checks if user didn't get here in unwanted way.
    header("Location: landing.php"); //If so, it sends him away.
    exit();
  }
  include 'php/autoload.class.php';

  $user = new User();
  $email = $_POST['email'];
  $password = $_POST['pwd'];

  $list = $user->login($email, $password);

  session_start();
  $_SESSION['userID'] = $list['userID'];
  $_SESSION['userEmail'] = $list['userEmail'];
  $_SESSION['userName'] = $list['userName'];
  $_SESSION['userSurname'] = $list['userSurname'];
  $_SESSION['isLoggedIn'] = true;
  $_SESSION['time'] = time();

  header('Location: index.php');
  exit();
