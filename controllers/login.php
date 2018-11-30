<?php
if (session_status() == PHP_SESSION_NONE){
  session_start();
}
include __DIR__."/database.php"; // include the database file
include __DIR__."/settings.php"; // include the settings file

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
  $confirmPassword = filter_input(INPUT_POST, "confirmPassword", FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
  $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_STRING);

  //validate all of the inputs
  $username = validateUsername($username);
  $password = validatePassword($password,$confirmPassword);
  $name = validateName($name);
  $surname = validateSurname($surname);

  //send off to database if nothing in error message
  if ($username != null && $password != null && $name != null && $surname != null)
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
      exit();
    }
  }
  header("Location: ../login.php");
}

/*
  METHODS FOR VALIDATING INPUT
 */

function validateUsername($username)
{
  if (strlen($username) >= $USERNAME_MIN_CHARS){
    return $username;
  } else
  {
    $_SESSION['error_message'] = "\nUsername needs to be atleast ".$USERNAME_MIN_CHARS." characters long";
  }
  return null;
}

function validatePassword($password,$confirmPassword)
{
  if ($password === $confirmPassword){
    if (strlen($password) >= $PASSWORD_MIN_CHARS){
      return $password;
    } else
    {
      //not long enough
      $_SESSION['error_message'] = "\nPassword needs to be atleast ".$PASSWORD_MIN_CHARS." characters long";
    }
  } else
  {
    //passwords do not match
    $_SESSION['error_message'] = "\nPasswords do not match";
  }
  return null
}

function validateName($name)
{
  if (strlen($name) >= $NAME_MIN_CHARS){
    return $name;
  } else
  {
    //not long enough
    $_SESSION['error_message'] = "\nName needs to be atleast ".$NAME_MIN_CHARS." characters long";
  }
  return null;
}

function validateSurname($surname)
{
  if (strlen($surname) >= $SURNAME_MIN_CHARS){
    return $surname;
  } else
  {
    //not long enough
    $_SESSION['error_message'] = "\nSurname needs to be atleast ".$SURNAME_MIN_CHARS." characters long";
  }
  return null;
}
?>
