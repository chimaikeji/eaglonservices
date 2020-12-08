<?php 
require_once("../../private/initialize.php");
$id = $_GET['id'] ?? '2';


if(isPostRequst()) {

    
 
    delete_contact($id);
    redirectTo(url_for('/admin/dashboard.php'));
  
}

    $sql = "SELECT * FROM contact ";
    $sql .= "WHERE id='". db_escape($db, $id)."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $contact=mysqli_fetch_assoc($result);
      mysqli_free_result($result);
 


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