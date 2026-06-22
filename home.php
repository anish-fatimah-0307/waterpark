<!DOCTYPE html>
<html>
<head>
    <title>Aqua Park</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./logo.png">
    <style>
       

.hero{
    height:100vh;
    position:relative;
    overflow:hidden;
}

.hero::before{
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.4);
}
.bg-video{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit:cover;
    z-index:-2;
}

.hero::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.4);
    z-index:-1;
}
.navbar{
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(8px);
    position:sticky;
     top:0;
    z-index:1000;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 8%;
}

.logo{
    color:#fff;
    font-size:32px;
    font-weight:bold;
}

.nav-links{
    display:flex;
    list-style:none;
}

.nav-links li{
    margin:0 20px;
}

.nav-links a{
    color:white;
    text-decoration:none;
    font-size:18px;
    transition:0.3s;
}

.nav-links a:hover{
    background:#ff6b00;
   padding:20px;
}

.btn{
    background:#00cfff;
    color:white;
    text-decoration:none;
    padding:10px 20px;
    border-radius:25px;
    font-weight:bold;
}

.btn:hover{
    background:#0099cc;
}

.hero-content{
    position:relative;
    z-index:2;
    color:white;
    text-align:center;
    top:30%;
    transform:translateY(-50%);
}

.hero-content h1{
    font-size:70px;
    margin-bottom:20px;
}

.hero-content p{
    font-size:24px;
    margin-bottom:30px;
}

.hero-btn{
    background:#ff6b00;
    color:white;
    text-decoration:none;
    padding:15px 35px;
    border-radius:30px;
    font-size:18px;
    font-weight:bold;
}

.hero-btn:hover{
    background:#ff4500;
}
.book-btn{
    background:#00cfff;
    color:white;
    padding:12px 25px;
    border-radius:30px;
    text-decoration:none;
    font-weight:bold;
}

.book-btn:hover{
    background:#0099cc;
}
#attraction{
    padding: 40px 50px;
    color: white;
    background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
   
}
#attraction h2{
    text-align: center;
    font-size: 40px;
    margin-bottom: 30px;
    color:white;
    background: #1E3AAE; 
}
#attraction p{
    font-size: 20px;
    line-height: 1.8;
    text-align: justify;
    max-width: 1000px;
    margin: 0 auto 20px;
    color:black;
    font-weight:bold;
}
#contact{
    background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
    color:black;
    padding:60px;
    font-size:20px;
  }
    #contact h2{
    text-align: center;
    font-size: 40px;
    margin-bottom: 30px;
    color: white;
    background: #1E3AAE;
}
.contact-info{
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}
.item{
    font-size: 22px;
    font-weight: bold;
}
html{
    scroll-behavior: smooth;
}
.bg{
  display:flex;
}
</style>
    
</head>
<body>

<div class="container">
    
    <header class="hero">
       <video autoplay muted loop playsinline class="bg-video">
    <source src="waterpark.mp4.mp4" type="video/mp4">
</video>
        <nav class="navbar">
            <div class="logo"><img src="./logo.png" alt="" height="45px" width="100px"></div>

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#attraction">Attractions</a></li>
            
                 <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="booking.php" class="book-btn">Book Now</a>
            </nav>
            <div class="hero-content">
            <h1>Welcome to Aqua Park</h1>
            <p>Experience Thrilling Water Slides & Endless Fun</p>
            <a href="explore.php" class="hero-btn">Explore Now</a>
        </div>
         </header>
         <section id="attraction">
    <h2 >Attractions</h2>
    <p> Welcome to AquaPark, where excitement and adventure await around every corner. From thrilling water slides and splash-filled rides to relaxing lazy rivers and family-friendly attractions, there's something for everyone to enjoy. Whether you're seeking an adrenaline rush or a fun day with family and friends, our attractions are designed to create unforgettable memories and endless entertainment.</p>
    <p>Explore exciting rides, splash zones, wave pools, and thrilling attractions designed for all ages. Experience endless fun, adventure, and unforgettable moments at AquaPark.</p>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    
    <div class="contact-info">
        <div class="item">
            📞 Phone: +91 98425 58486
        </div>

        <div class="item">
            📧 Email: bookings@aquapark.com
        </div>

        <div class="item">
            📍 Address: Kodaikanal,Didigul.
        </div>
    </div>
</section>
<script>
    const video = document.getElementById("bgVideo");
    video.playbackRate = 0.5; // Half speed
</script>
</body>
   
    
   