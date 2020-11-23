<?php


function find_all_contacts(){
    global $db;
    $sql = "SELECT * FROM contact ";
    $sql .= "ORDER BY id ASC";
  
    $contacts = mysqli_query($db, $sql);
   confirm_result_set($contacts);

   return $contacts;
}

function create_new_contact($user){
    global $db;
    $sql = "INSERT INTO contact ";
    $sql .= "(name,email,subject,Message)";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $user['name']). "',";
    $sql .= "'" . db_escape($db, $user['email']). "',";
    $sql .= "'" . db_escape($db, $user['subject']). "',";
    $sql .= "'" . db_escape($db, $user['message']). "' ";
    $sql .= ")";

    $result = mysqli_query($db, $sql);
    confirm_result_set($result);

    if($result){
        //echo "<script> alert('Message Sent Successful') </script>";
        redirectTo('index.php');
 
        return true;
    }

    else{
        echo mysqli_error($db);
        db_disconnect($db);
     exit;
    }
}


?>