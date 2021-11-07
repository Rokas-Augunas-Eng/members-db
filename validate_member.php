<?php
$name = $_POST['name'] ?? "";
$email = $_POST['email'] ?? "";
$school_id = $_POST['school_id'] ?? "";

if(!$name) {
  $errors[] = 'Member name is required';
}
if(!$email) {
  $errors[] = 'Member email is required';
}
if(!$school_id) {
  $errors[] = 'School name is required';
}