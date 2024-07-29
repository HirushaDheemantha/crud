<?php 
    include "connect.php";
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE from `crud` WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo 'deleted successfully';
        }else{
            die("Connection failed: " . $conn->connect_error);
        }

    }
?>
<html>
    <br>
    <button class="btn btn-secondary"><a href="display.php">Database</a></button>
</html>

