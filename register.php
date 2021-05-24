<?php
// File responsible for handling the register authorization
  if(!isset($_POST['register_button'])){ //Checks if user didn't get here in unwanted way.
    header("Location: landing.php"); //If so, it sends him away.
    exit();
  }
  include 'php/autoload.class.php';

  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $password = $_POST['pwd'];
  $email = $_POST['email'];

  $user = new User();
  $user->signUp($email, $password, $firstName, $lastName);

  header('Location: landing.php');
  exit();
