<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rides</title>
    <style>
     body {
  margin: 0;
  font-family: Arial;
  background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
}

.title {
  text-align: center;
  margin: 40px 0;
  color:white;
  background-color: #1e3a8a;
}

.section {
  width: 90%;
  margin: auto;
}

.box {
  display: flex;
  align-items: center;
  gap: 20px;
  margin: 20px 0;
  padding: 20px;
  opacity: 0;
  transform: translateY(80px);
  transition: all 0.8s ease;
  
}

.box img {
  width: 300px;
  border-radius: 10px;
  display:flex;
  flex-direction:row;
  justify-content:space-evenly;
  transition:0.3s;
}
.box img:hover{
transform:translateY(-10px);
}

.box h2 {

  color: #1e3a8a;
}

.box p {
  color: #0e0d0d;
}
.box:hover{
    transform:translateY(-10px);
}

.box.show {
  opacity: 1;
  transform: translateY(0);
}
#slide{
    padding: 40px 50px;
    color: white;
    background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
    /* margin-top:200px; */
    display:flex;
    justify-content:center;
    
    }
#slide:hover{
  transform:translateY(-10px);
}
#slide h2{
    text-align: center;
    font-size: 40px;
    margin-bottom: 30px;
    color: black;
}
#slide h3{
    font-size: 20px;
    line-height: 1.8;
    text-align: justify;
    max-width: 1000px;
    margin: 0 auto 20px;
    color:white;
}

#wave{
    padding: 40px 50px;
    color: white;
   background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
}
#wave h2{
    text-align: center;
    font-size: 40px;
    color:black;
    margin-bottom: 30px;
}

#wave h3{
    max-width: 1000px;
    margin: 0 auto 20px;
    line-height: 1.8;
    font-size: 20px;
    text-align: justify;
    color:black;
}
#splash{
    padding: 40px 50px;
    color: white;
    background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
    /* margin-top:200px; */
}
#splash h2{
    text-align: center;
    font-size: 40px;
    margin-bottom: 30px;
    color: black;
}
#splash h3{
    font-size: 20px;
    line-height: 1.8;
    text-align: justify;
    max-width: 1000px;
    margin: 0 auto 20px;
    color:black;
}
#thrill{
    padding: 40px 50px;
    color: white;
    background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
    /* margin-top:200px; */
}
#thrill h2{
    text-align: center;
    font-size: 40px;
    margin-bottom: 30px;
    color:black;
}
#thrill h3{
    font-size: 20px;
    line-height: 1.8;
    text-align: justify;
    max-width: 1000px;
    margin: 0 auto 20px;
    color:black;
}
.bg{
  displex:flex;
}
    </style>
</head>
<body>
  
    <h1 class="title">Explore Our Attractions</h1>


<section id="slides">
<div>
      <h2 style="text-align:center;"><b>Water Slides</b></h2>
      <h3 style="text-align:center;"><b>Enjoy high-speed thrilling slides full of fun and excitement.</b></h3>
    </div>
  <div class="box scroll">
    <img src="./slide1.jpg" alt="" style="margin-left:200px;">
    <img src="./slide2.jpg" alt="" height="228px">
    <img src="./slide3.jpg" alt="">
    </div>
</section>

<section id="wave">
  <div>
      <h2 style="text-align:center;"><b>Wave Pool</b></h2>
      <h3 style="text-align:center;"><b>Relax and enjoy artificial ocean waves with your family.</b></h3>
    </div>

  <div class="box scroll">
    <img src="./wave1.jpg" alt="" style="margin-left:150px;" >
    <img src="./wave2.jpg" alt="" height="200px">
    <img src="./wave3.jpg" alt="">
</section>
    
  </div>
  <section id="splash">
    <div>     
     <h2 style="text-align:center;"><b>Splash Ride</b></h2>
      <h3 style="text-align:center;"><b>Experience the thrill of a refreshing splash as you glide through exciting twists and turns.</b></h3>
    </div>

  <div class="box scroll">
    <img src="./splash.jpg" alt="" style="margin-left:150px;" >
    <img src="./splash2.jpg" alt="">
    <img src="./splash3.jpg" alt="" height="200px">
    </div>
</section>
  <section id="thrill">
    <div>     
     <h2 style="text-align:center;"><b>Thrill Zone</b></h2>
      <h3 style="text-align:center;"><b>Experience heart-pounding adventures and exciting attractions designed for adrenaline seekers.</b></h3>
    </div>

  <div class="box scroll">
    <img src="./thrill1.jpg" alt="" style="margin-left:150px;" >
    <img src="./thrill2.jpg" alt="">
    <img src="./thrill3.jpg" alt="" height="200px">
    </div>
</section>



<script src="script.js"></script>
</body>
</html>