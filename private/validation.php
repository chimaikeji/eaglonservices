<?php 
function validateUserInput($user){
$errors= [];
    if ($user['name'] == "") {
        $errors[] = "Please fill in the name field";
     }
     if ($user['email'] == "") {
         $errors[] = "Please fill in the email field";
      }
      if ($user['subject'] == "") {
         $errors[] = "Please fill in the subject field";
      }
      if ($user['message'] == "") {
         $errors[] = "Please fill in the message field";
      }

      return $errors;
     
}


?>