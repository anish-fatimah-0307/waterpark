<?php
$con=mysqli_connect("localhost","root","Anish@123","Aquapark");
$query="select * from users";
$solution=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./logo.png">
    <title>Results</title>
    <style>
        body{
            background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
            margin:0;
        }
        .table-container{
           
           height:500px;
           width:1000px;
           border-radius:15px;
           margin-top:50px;
           box-shadow:0 4px 30px black;
           border:5px solid  #1E3AAE;
        }
        table{
            width:85%;
            height:75%;
            border-collapse:collapse;
        }
        th{
            background: #1E3AAE;
            color:white;
            padding:12px;
        }
        td{
            paddind:10px;
            text-align:center;
        }
        tr{

        }
        tr:hover{
              background: linear-gradient(135deg, #22D3EE, #2563EB);
        }
        table, th, td{
            border:3px groove  #1E3AAE;
        }

    </style>
</head>
<body>
    <center>
       
        <div class="table-container">
             <h1 >Customers Registration Details</h1>
    <table border="3" cell padding="15">
        <tr>
        <th>Reg ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Phone Number</th>
        <th>Tickets</th>
        <th>Visit Date</th>
        <th>Action</th>
</tr>
</center>
</div>
<?php
while($a=mysqli_fetch_assoc($solution)){
    ?>
    <tr>
        <td><?php echo $a['id']; ?></td>
        <td><?php echo $a['name']; ?></td>
        <td><?php echo $a['email']; ?></td>
        <td><?php echo $a['phone']; ?></td>
        <td><?php echo $a['tickets']; ?></td>
        <td><?php echo $a['visit_date']; ?></td>
<td>
    <button><a href="edit.php?id=<?php echo $a['id'];?>">EDIT</a></button>
    <button><a href="delete.php?id=<?php echo $a['id'];?>">DELETE</a></button></td>
</tr>
<?php
}
?>
</table>
</body>
</html>