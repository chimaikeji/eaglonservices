<?php 

function create_admin($admin){
    global $db;

    $errors = validateAdminInput($admin);

    // if(!empty($errors)){
    //     return $errors;
    // }


    //we hash admin password
    $hashed_password = password_hash($admin['password'], PASSWORD_BCRYPT);


    //we send admin details to database
    $sql = "INSERT INTO admin ";
    $sql .= "(name,email,password)";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $admin['name']). "',";
    $sql .= "'" . db_escape($db, $admin['email']). "',";
    $sql .= "'" . db_escape($db, $hashed_password). "' ";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);

    if($result){
        //echo "<script> alert('Message Sent Successful') </script>";
        redirectTo('dashboard.php');
        return true;
    }

    else{
        echo mysqli_error($db);
        db_disconnect($db);
     exit;
    }
}




?>