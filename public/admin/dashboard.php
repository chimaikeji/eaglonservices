<?php
require_once("../../private/initialize.php");

  
  $contacts = find_all_contacts();

  


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
  
        
        <table class="table table-striped table-bordered table-hover table-condensed text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Messages</th>
                <th>Date</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        
            <?php while($contact = mysqli_fetch_assoc($contacts)) {?>
                <tr>
                    <td><?php echo h($contact['id']); ?></td>
                    <td><?php echo h($contact['Name']); ?></td>
                    <td><?php echo h($contact['email']); ?></td>
                    <td><?php echo h($contact['subject']); ?></td>
                    <td><?php echo h($contact['Message']); ?></td>
                    <td><?php echo h($contact['Date']); ?></td>
                    <td><a class="action" href="">CLICK TO VIEW</a></td>
                    <td><a class="action" href="">CLICK TO EDIT</a></td>
                    <td><a class="action" href="">CLICK TO DELETE</a></td>
                </tr>
            <?php } ?>
        </table>
        
</body>
</html>