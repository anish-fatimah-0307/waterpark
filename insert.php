<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tickets = $_POST['tickets'];
$visit_date = $_POST['visit_date'];

$conn=mysqli_connect("localhost","root","Anish@123","Aquapark");
$query="insert into users(name,email,phone,tickets,visit_date)values('$name','$email','$phone','$tickets','$visit_date')";
$result=mysqli_query($conn,$query);

if($result){
    header("location:view.php");
}
 echo $name;
 echo $email;
 echo $phone;
 echo $tickets;
 echo $visit_date;
?>