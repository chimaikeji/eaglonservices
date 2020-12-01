
<?php
require_once("../../private/initialize.php");
$id = $_GET['id'] ?? '2';


  
if (isPostRequst()) {
   
    $user=[];
    $user['name'] = h($_POST['name']);
    $user['email'] =h($_POST['email']);
    $user['subject'] = h($_POST['subject']);
    $user['message'] = h($_POST['message']);

    $result = update_contact($user, $id);
    
 }

    $sql = "SELECT * FROM contact ";
    $sql .= "WHERE id='". db_escape($db, $id)."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $contact=mysqli_fetch_assoc($result);
      mysqli_free_result($result);
     

  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<br><br><br><br>

<div class="container">

    <div class="row">
        <div class="col-md-3">
        
        </div>
        <div class="col-md-6">
        <form action="<?php echo url_for('/admin/edit.php?id=' . $contact['id']) ;?>" method="POST" >
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" value="<?php echo h($contact['Name']); ?>" class="form-control" required  />
                
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" value="<?php echo h($contact['email']); ?>" class="form-control" name="email" required />
                 
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" value="<?php echo h($contact['subject']); ?>" name="subject" required/>
                
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control"  name="message" rows="10" required><?php echo h($contact['Message']); ?></textarea>
               
              </div>
              
              <div class="text-center"><button type="submit">Edit Message</button></div>
            </form>


        </div>
        <div class="col-md-3">
        
        </div>
    </div>
</div>







</body>

</html>