<?php 
  
  include("connect.php");

?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  </head>
  <style>
   .btn a {
  text-decoration: none !important;
}

</style>
  <body>
   <div class="container">
    <button class="btn btn-secondary my-5 btn-lg" ><a href="display.php" class="text-light">Data Table</a></button>
   <form method="post">
        <div class="form-group mb-3">
          <label>Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter your name">
        </div>   
        <div class="form-group mb-3 ">
          <label>Email</label>
          <input type="text" name="email" class="form-control" placeholder="Enter your email">
        </div>   
        <div class="form-group mb-3">
          <label>Mobile</label>
          <input type="text" name="mobile" class="form-control" placeholder="Mobile number">
        </div>   
        <div class="form-group mb-3">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="password"> 
        </div>   
  <button name="btnsubmit" type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
  </body>
</html>

<?php 
  if(isset($_POST['btnsubmit'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
      echo "data inserted successful";
    }
    
  }


?>