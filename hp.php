<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libraria Buzuku</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hp.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />

</head>
<body>
    <header>
        <img class="header-logo" src="buzukulogo3.png" alt="Buzku logo" width="210" height="30">
        <a href=""><img class="bag" src="bag2.png" alt="bag symbol"></a>
        <a href=""><img  class="user-icon" src="user.png" alt="user icon"></a>
        <input type="text" class="search-box" placeholder="Kërko...">
        <nav>
            <ul>
                <li><a href="">Libra shqip</a></li>
                <li><a href="">Libra Të Huaj</a></li>
                <li><a href="">Botimet Pema</a></li>
                <li><a href="">Best Sellers</a></li>
                <li><a href="">Aksesorë</a></li>
                <li><a href="">Oferta</a></li>
                <li><a href="">Propozo</a></li>
            </ul>
        </nav>
    </header>

    <div class="Oferta">
        <img src="oferta.jpg" alt="" width="100%">
    </div>

    <div class="Librat">
        <h1>Tituj të Rinj</h1>
    </div>

<div class="slider">
  <div class="slides" id="slides-container"></div>

  <button class="arrow prev" onclick="prevSlide()">❮</button>
  <button class="arrow next" onclick="nextSlide()">❯</button>
</div>


    <div class="fotot">
        <div class="L1">
            <a href=""><img src="portokall me kurdisje.jpg" width="300" ></a>
        </div>

        <div class="L2">
            <a href=""><img src="ne zgjedhim vrasje.jpg" width="300" ></a>
         </div>
    </div>


    <div class="footer">
        <div class="Info">
            <h3>Informacion</h3>
            <a href="">Lokacionet</a>
            <a href="">Pika 1: Nënë Tereza(afër Kino ABC)</a>
            <a href="">Pika 2: Albi Mall, kati 3</a>
            <a href="">Pika 3: Prishtina Mall, kati 1</a>
        </div>

        <div class="Llogaria">
            <h3>Llogaria Ime</h3>
            <a href="">Pëlqimet</a>
            <a href="">Shporta</a>
            <a href="">Vlerësimet</a>
        </div>

        <div class="Ndihme">
            <h3>Të Duhet Ndihmë</h3>
            <a href="">Rreth Nesh</a>
            <a href="">Kontaktet</a>
            <a href="">Transporti & Kthimet</a>
            <a href="">Merre në Dyqan</a>
        </div>

        <div class="SNS">
            <h3>Na Ndjek:</h3>

            <div class="icons">
                <a href=""><img src="facebook.png" width="30"></a>
                <a href=""><img src="instagram.png" width="30"></a>
            </div>
        
        </div>
    </div>


    <script>
    let i = 0;
    const images = [
        'book23.jpg','book24.jpg','book25.jpg','book26.jpg',
        'book27.jpg','book28.jpg','book29.jpg','book30.jpg',
        'book31.jpg','book32.jpg','book33.jpg','book34.jpg',
        'book35.jpg','book36.jpg'
    ];

    const slideshow = document.getElementById("slideshow");

    function nextSlide() {
        i = (i + 1) % images.length;
        slideshow.src = images[i];
    }

    function prevSlide() {
        i = (i - 1 + images.length) % images.length;
        slideshow.src = images[i];
    }

    window.onload = () => {
        slideshow.src = images[0];
    };
</script>

<script src="hp.js"></script>

</body>
</html>
