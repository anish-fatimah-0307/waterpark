<?php
$connect=mysqli_connect("localhost","root","Anish@123","Aquapark");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$tickets=$_POST['tickets'];
$visit_date = $_POST['visit_date'];
$query="UPDATE users SET name='$name',email='$email',phone='$phone',tickets='$tickets',visit_date='$visit_date' WHERE id=$id";
$a=mysqli_query($connect,$query);

if($a){
    header("location:result.php");
}

?>