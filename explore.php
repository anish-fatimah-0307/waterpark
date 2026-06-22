<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./logo.png">
    <title>Explore</title>
    <style>
        body{
            background: linear-gradient(
                135deg,
                #FFF176,
                #FFD600,
                #FFB300
            );
        }
        .explore{
    padding:10px 2%;
    text-align:center;
}

.explore h2{
    font-size:3rem;
    margin-bottom:30px;
    Background-color: #1E3AAE; 
    color:white;
    width:1300px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card h3{
    margin-bottom:15px;
}
.card-link{
    text-decoration: none;
    color: inherit;
}


    </style>
</head>
<body>
    <img src="logo.png" alt="" height="100px" width="150px">
    <section id="explore" class="explore">
    <h2 style="">Explore AquaPark</h2>

    <div class="cards">
        <a href="slides.php"  class="card-link">
        <div class="card">
            <h3>🎢 Water Slides</h3>
            <p>Experience thrilling twists, turns, and high-speed adventures.</p>
        </div></a>
        <a href="slides.php#wave"  class="card-link">
        <div class="card">
            <h3>🌊 Wave Pool</h3>
            <p>Enjoy realistic ocean waves in a safe environment.</p>
        </div>
        <a href="slides.php#splash"  class="card-link">
        <div class="card">
            <h3>💦 Splash Zone</h3>
            <p>Fun-filled water play area for kids and families.</p>
        </div>
        <a href="slides.php#thrill"  class="card-link">
        <div class="card">
            <h3>🎢 Thrill Zone</h3>
            <p>Get ready for non-stop excitement with adrenaline-filled adventures.</p>
        </div>

    </div>
</section>

</body>
</html>