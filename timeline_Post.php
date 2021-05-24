<?php
// File responsible for handling the post method for timeline.php file
  if(!isset($_POST['submit_button'])){ //Checks if user didn't get here in unwanted way.
    header("Location: timeline.php"); //If so, it sends him away.
    exit();
  }
  include 'php/autoload.class.php';
  session_start();

  $post = new Post();
  $content = $_POST['content'];

  $post->createPost($_SESSION['userID'], $content);

  header('Location: timeline.php');
  exit();
