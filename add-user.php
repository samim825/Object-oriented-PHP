<?php

include 'includes/DBConnection.php';

$msg='';
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
 
    
    
    $sql = "insert into user VALUES(id,'$name','$email','$address')";
    $insertData = mysqli_query($con, $sql);
    if($insertData){
        $msg = 'Data successfully inserted';
    }
    else{
        $msg =  'Something went wrong';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      .container{
          padding-top: 70px;
      }
  </style>
  
</head>
    <body>
        <div class='container'>
            
            <div class='col-sm-6 col-sm-offset-3'>
                <h3><?php echo $msg ?></h3>
                <form method="POST">
                <div class="form-group">
                    <label>Name </label>
                    <input type='text' name="name" class="form-control" required="" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label>E-mail </label>
                    <input type='email' name="email" class="form-control" required="" placeholder="Enter eamil">
                </div>
                <div class="form-group">
                    <label>Address </label>
                    <input type='text' name="address" class="form-control" required="" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <input type='submit' name="submit" class="form-control btn-success" value="Save">
                </div>
            </form>
                <div class="form-group">
                    <a href="userList.php" class='btn btn-primary'>See User List</a>
                </div>
           </div>
        </div>
    </body>
</html>
