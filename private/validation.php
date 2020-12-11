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


function validateAdminInput($admin){
   $errors= [];

   // admin_name
   if(is_blank($admin['name'])) {
     $errors[] = "Name cannot be blank.";
   } 

   if(is_blank($admin['email'])) {
     $errors[] = "Email cannot be blank.";
   } 
    if (!has_valid_email_format($admin['email'])) {
     $errors[] = "Email must be a valid format.";
   }

   
     if(is_blank($admin['password'])) {
       $errors[] = "Password cannot be blank.";
     } if (!has_length($admin['password'], array('min' => 5))) {
       $errors[] = "Password must contain 5 or more characters";
     } if (!preg_match('/[A-Z]/', $admin['password'])) {
       $errors[] = "Password must contain at least 1 uppercase letter";
     } if (!preg_match('/[a-z]/', $admin['password'])) {
       $errors[] = "Password must contain at least 1 lowercase letter";
     } if (!preg_match('/[0-9]/', $admin['password'])) {
       $errors[] = "Password must contain at least 1 number";
     } if (!preg_match('/[^A-Za-z0-9\s]/', $admin['password'])) {
       $errors[] = "Password must contain at least 1 symbol";
     }

     if(is_blank($admin['confirmPassword'])) {
       $errors[] = "Confirm password cannot be blank.";
     } if ($admin['password'] !== $admin['confirmPassword']) {
       $errors[] = "Password and confirm password must match.";
     }
   
   return $errors;    
   }
   


?>