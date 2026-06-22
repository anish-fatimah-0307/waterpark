<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./logo.png">
    <title>Tickets</title>
    <style>
       *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
html,body{
    width:100%;
    height:100%;
    overflow:hidden;
}
.hero{
    position:relative;
    height:100vh;
    width:100vw;
     z-index:-1;
    
    display:flex;
    justify-content:center;
    align-items:center;

    color:white;
    font-family:'Poppins',sans-serif;

    
    background:linear-gradient(
        -45deg,
        #00C6FF,
        #0072FF,
        #36D1DC,
        #5B86E5
    );

    background-size:400% 400%;
    animation:oceanFlow 12s ease infinite;
}

.hero h1{
    position:relative;
    z-index:10;
    font-size:4rem;
    text-shadow:2px 2px 10px rgba(0,0,0,0.3);
}

@keyframes oceanFlow{
    0%{
        background-position:100% 50%;
    }
    50%{
        background-position:100% 50%;
    }
    100%{
        background-position:0% 50%;
    }
}


.bubble{
    position:absolute;
    bottom:-100px;
    background:rgba(255,255,255,0.25);
    border-radius:50%;
    animation:floatUp linear infinite;
}

.bubble:nth-child(2){
    left:10%;
    width:20px;
    height:20px;
    animation-duration:8s;
}

.bubble:nth-child(3){
    left:30%;
    width:35px;
    height:35px;
    animation-duration:10s;
}

.bubble:nth-child(4){
    left:50%;
    width:25px;
    height:25px;
    animation-duration:12s;
}

.bubble:nth-child(5){
    left:70%;
    width:40px;
    height:40px;
    animation-duration:9s;
}

.bubble:nth-child(6){
    left:90%;
    width:30px;
    height:30px;
    animation-duration:11s;
}

@keyframes floatUp{
    0%{
        transform:translateY(0);
        opacity:0;
    }

    20%{
        opacity:1;
    }

    100%{
        transform:translateY(-120vh);
        opacity:0;
    }
}
        .register{
            font-family:'Poppins';
            
            font-size:45px;
            margin-top:100px;
        }
        
        .thank{
            font-family:'Poppins';
            
            font-size:40px;
            margin-top:50px;
        }
        .box{
            height:550px;
            width: 500px;
           background: linear-gradient(135deg, #FFD600, #FFEB80);
            border: 8px groove #1E3AAE;
            border-radius:20px;
            color:black; 
        }
        .img{
            height: 100px;
            width: 100px;
            margin-right:70px;
        }
    .ticket-image{
    width:200px;
    border:5px solid white;
    border-radius:15px;
    transition:0.3s;
    cursor:pointer;
}

.ticket-image:hover{
    transform:scale(1.05);
}
    

        
    </style>
</head>
<body>
    <div class="hero">
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <link rel="stylesheet"  href="background.css">
   
    
    <center>
    <div class="box">
        <center>
        <div class="img"><img src="./logo.png" alt="" height="150px" width="170px" style="margin-top:30px;"></div>
</center>
        <div class="register"><b>Claim Your Tickets </b></div>
        
        <div class="thank"><b>Dive into Endless Fun !</b></div><br>
        
      <a href=home.php>

    <img src="tickets.png" alt="Book Tickets" class="ticket-image">
</a>
           
      <center> 
        

</div>
</body>
</html>