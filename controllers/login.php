<?php
if (session_status() == PHP_SESSION_NONE){
  session_start();
}
include __DIR__."/database.php"; // include the database file

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  $_SESSION['error_message'] = "";
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

  //send off to database if nothing in error message
  if ($username != null && $password != null)
  {
    $db = new Database();
    if (!$db->isOpen()){
      $db->open();
    }

    $results = $db->query("SELECT * FROM accounts WHERE username='".$username."' AND password='".hash("sha512",$password)."' ");
    //if something returned, redirect to index
    if ($results->num_rows > 0){
      $_SESSION['username'] = $username;
      header("Location: ../");
      $db->close();
      exit();
    }
  }
  $_SESSION['error_message'] = "\nUnable to retrieve account";
  header("Location: ../");
}
?>
