<?php
//function to check if a request method  is  post request
function isPostRequst(){
    return $_SERVER['REQUEST_METHOD'] == "POST";
}

//fucntion to check if a requst method is get request
function isGetRequst(){
    return $_SERVER['REQUEST_METHOD'] == "GET";
}

function redirectTo($location){
    header('location:' . $location);
}


function display_errors($errors=array()) {
    $output = '';
    if(!empty($errors)) {
      $output .= "<div class=\"bg-danger\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach($errors as $error) {
        $output .= "<li>" . $error . "</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
    }

?>