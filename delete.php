<?php
$connect=mysqli_connect("localhost","root","Anish@123","Aquapark");
$id=$_GET['id'];
$query="delete from users where id=$id";
$solution=mysqli_query($connect,$query);

if($solution){
    header("location:result.php");
}
?>