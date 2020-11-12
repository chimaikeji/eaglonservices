<?php 

require_once("initialize.php");


///we checked the user request method
if (isPostRequst()) {
  // collect user inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

//validate user inputs 
if ($name == "") {
   $errors[] = "Please fill in the name field";
}
if ($email == "") {
    $errors[] = "Please fill in the email field";
 }
 if ($subject == "") {
    $errors[] = "Please fill in the subject field";
 }
 if ($message == "") {
    $errors[] = "Please fill in the message field";
 }

 //redirect error message to the homepage
 redirectTo('../public/index.php');



//we send user inputs to database



// redirct user to homepage with a message


    echo " hello you enter the following: <br> $name <br> $email <br> $subject <br> $message";


}else{
    echo "hello you just visited this page";
}



?>