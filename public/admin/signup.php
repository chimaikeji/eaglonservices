<?php 
require_once("../../private/initialize.php");

if (isPostRequst()) {
    # code...
    $admin=[];
    $admin["name"] = $_POST["name"] ?? "";
    $admin["email"] = $_POST["email"] ?? "";
    $admin["username]"] = $_POST["username"] ?? "";
    $admin["password"] = $_POST["password"] ?? "";
    $admin["confirmPassword"] = $_POST["confirmPassword"] ?? "";

// validate admin inputs
$errors = validateAdminInput($admin);



//we hash admin password


//we send admin details to database


// we redirect the admin to dashboard

}




?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php echo display_errors($errors); ?>
    <form method="Post" action="signup.php">
    <div class="container mt-4">
        <h1>Sign up for admin</h1>

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name"  required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>

        <div class="form-group">
            <label >Email address</label>
            <input type="email" class="form-control"  name="email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label >Confirm Password</label>
            <input type="password" class="form-control" name="confirmPassword" required>
        </div>


        
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    
    </form>
</body>
</html>