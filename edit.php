<?php
$connect=mysqli_connect("localhost","root","Anish@123","Aquapark");
$id=$_GET['id'];
$query="select * from users where id=$id";
echo $query;
$result=mysqli_query($connect,$query);
$a=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $a['id'];?>">
        <label for="name">Name</label>
        <input type="text" placeholder=" Name" name="name" id="Name" value="<?php echo $a['name'];?>"><br>
        <label for="email">E-mail</label>
        <input type="text" placeholder="E-mail" name="email" id="email" value="<?php echo $a['email'];?>"><br>
        <label for="phone">Phone Number</label>
        <input type="text" placeholder="Phone Number" name="phone" id="ph_num" value="<?php echo $a['phone'];?>"><br><br>
        <label for="tickets">Tickets</label>
        <input type="int" placeholder="Number of Tockets" name="tickets" id="tickets" value="<?php echo $a['tickets'];?>"><br>
        <label for="visit_date">Date</label>
        <input type="date" placeholder="Number of Tockets" name="visit_date" id="date" value="<?php echo $a['visit_date'];?>"><br>
        <input type="Submit" value="Submit">
        <br> 
</body>
</html>