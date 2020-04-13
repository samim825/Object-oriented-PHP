<?php include 'includes/DBConnection.php'; ?>

<?php 
//
//$id = $_GET['delid'];
//$msg='';
//if($id!=NULL){
//
//   
//    $sql="DELETE FROM user where id ='$id'";
//   
//    $delete = mysqli_query($con, $sql);
//    if($delete){
//        $msg= 'Delete Successfully';
//    }
// else {
//        $msg= 'Something went wrong';    
//    }
//}
//
//?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    
    <br><br>
    <h3><?php $msg ?></h3>
    <a class="btn btn-primary btn-md pull-right" href="add-user.php"><h4>Add new user</h4> </a>
    
  <h2>See All User List..</h2>
  

              
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<?php

$cnt = 1;
$sql = ' SELECT * FROM user ';

$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)){
    

?>
      <tr>
        <td><?php echo $cnt ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><a href="addUser.php?id=<?php echo $row['id']; ?> && action=edit">Edit</a></td>
        <td><a href="userList.php?delid=<?php echo $row['id']; ?>&&action=del">Delete</a></td>
      </tr>
      
      <?php
      $cnt++;
}
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
