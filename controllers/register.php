<?php
if (session_status() == PHP_SESSION_NONE){
  session_start();
}
include __DIR__."/database.php"; // include the database file
include "../settings.php"; // include the settings file
$settings = new Settings();
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  $_SESSION['error_message'] = "";
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
  $confirmPassword = filter_input(INPUT_POST, "confirmPassword", FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
  $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_STRING);

  //validate all of the inputs
  $username = validateUsername($settings,$username);
  $password = validatePassword($settings,$password,$confirmPassword);
  $name = validateName($settings,$name);
  $surname = validateSurname($settings,$surname);

  //send off to database if nothing in error message

    if (!$db->isOpen()){
      $db->open();
    }

    if ($_SESSION['error_message'] == ""){
    //if query successful
    $results = $db->query("INSERT IGNORE INTO accounts(username,password,email,name,surname,`rank`)
    VALUES ('".$username."','".$password."','".$email."','".$name."','".$surname."','member')");
    if ($results){
      $_SESSION['username'] = $username;
      $db->close();
      header("Location: ../");
    }
  } else {
    echo $_SESSION['error_message'];
    exit;
  }

  $db->close();
  $_SESSION['error_message'] = "\nAccount with the same username already exists.";
  header("Location: ../");
}

/*
  METHODS FOR VALIDATING INPUT
 */

function validateUsername($s, $username)
{
  if (strlen($username) >= $s->USERNAME_MIN_CHARS){
    return $username;
  } else
  {
    $_SESSION['error_message'] .= "\nUsername needs to be atleast ".$s->USERNAME_MIN_CHARS." characters long";
  }
  return null;
}

function validatePassword($s, $password,$confirmPassword)
{
  if ($password === $confirmPassword){
    if (strlen($password) >= $s->PASSWORD_MIN_CHARS){
      return $password;
    } else
    {
      //not long enough
      $_SESSION['error_message'] .= "\nPassword needs to be atleast ".$s->PASSWORD_MIN_CHARS." characters long";
    }
  } else
  {
    //passwords do not match
    $_SESSION['error_message'] .= "\nPasswords do not match";
  }
  return null;
}

function validateName($s, $name)
{
  if (strlen($name) >= $s->NAME_MIN_CHARS){
    return $name;
  } else
  {
    //not long enough
    $_SESSION['error_message'] .= "\nName needs to be atleast ".$s->NAME_MIN_CHARS." characters long";
  }
  return null;
}

function validateSurname($s, $surname)
{
  if (strlen($surname) >= $s->SURNAME_MIN_CHARS){
    return $surname;
  } else
  {
    //not long enough
    $_SESSION['error_message'] .= "\nSurname needs to be atleast ".$s->SURNAME_MIN_CHARS." characters long";
  }
  return null;
}
?>
