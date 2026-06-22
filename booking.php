<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./logo.png">
    <title>Book now</title>
   
    <style>
    .enquiry-form{
        position: absolute;
        top: 10 %;
        transform: translate(-10%, -200%);
        font-size:15px;
        justify-content:space-evenly;
        margin-left:120px;
        margin-top:2050px;
        background: linear-gradient(135deg, #89F7FE, #1D4ED8);
        height:450px; width:500px;
        padding:13px;
        border-radius:9px;
        border:8px groove  #1E3AAE;
        color:black;
        display: grid;
        grid-template-columns: 120px 250px;
        gap: 15px;
        align-items: center;
       } 
    
           
    .enquiry-form label{
    color:black;
    font-size: 18px;
    font-weight: bold;
}
    
.enquiry-form input,
.enquiry-form select{
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: none;
}

.button{
    display:inline-block;
    background:#ff6b00;
    color:black;
    text-decoration:none;
    font-size:18px;
    font-weight:600;
    border:4px groove  #1E3AAE; 
    border-radius:25px;
    padding:10px 20px;
    transition:0.3s;
}

.button:hover{
    transform:scale(1.05);
    background:#ff4500;
}
body{
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
        }
        .menu-icon{
    position: fixed;      
    top: 20px;
    right: 20px;

    font-size: 25px;
    color: white;

    background: none;
    border: none;
    cursor: pointer;

    z-index: 9999;
}


    </style>
</head>
<body>
    <link rel="stylesheet"  href="background.css">
    <a href="result.php">
    <button class="menu-icon">&#9776;</button></a>
    <div class="img"><img src="./logo.png" alt="" height="100px" width="200px" style=" margin-bottom:500px;"></div>
    <div class="enquiry-form">
        <h2 style="margin-top:0; font-family:poppins;font-style:italic;text-align:center;background:background: rgba(255, 255, 255, 0.15); ">Book your Tickets</h2>
    <form action="insert.php" method="POST">
        
        
        <label for="name">Name</label>
        
        <input type="text" name="name" placeholder="Name" required id="name"><br><br>
        
        <label for="email">E-mail</label>
        <input type="email" name="email" placeholder="Email" required id="email"><br><br>
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" placeholder="Phone Number" required id="ph_num"><br><br>
        <label for="tickets">Tickets</label>
        <input type="number" name="tickets" placeholder="Number of Tickets" required id="tickets"><br><br>

        <label for="visit_date">Date</label>
        <input type="date" name="visit_date" required id="date"><br><br>
        <a href="view.php">
        <button type="submit" class="button">Book Tickets</button></a>

        </form>
</div>


</body>
</html>