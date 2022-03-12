<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM category WHERE id = '$id'";
    include('connect.php');
    if(mysqli_query($conn,$query)){
        header("Location:../category.php?msg=sucessfull delete");
     }else{
         header("Location:../category.php?msg=".mysqli_error($conn));
     }
}