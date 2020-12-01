<?php 
require_once("../../private/initialize.php");
$id = $_GET['id'] ?? '2';


if(isPostRequst()) {

    
 
    $result = delete_contact($id);
    if (result) {
      redirectTo(url_for('/admin/dashboard.php'));
    }
    
  
}

    $contact = find_contact_by_id($id);


?>


<div id="content">



  <div>
    <h1>Delete User</h1>
    <p>Are you sure you want to delete this User?</p>
    <?php echo $contact['Name'];?>

    <form action="<?php echo url_for('/admin/delete.php?id=' . $contact['id']) ;?>" method="POST">
      <div id="operations">
        <input type="submit" name="commit" value="Delete User" />
      </div>
    </form>
  </div>

</div>