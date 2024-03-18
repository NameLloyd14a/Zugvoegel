<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: whitesmoke;
            margin: 0; /* Remove default body margin */
            padding: 0; /* Remove default body padding */
        }

        .image {
            width: 70%;
            padding-top:5px;
            padding-left: 5px;
            padding-bottom: 5px;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 250px;
        }

        .hedline {
            color: whitesmoke;
        }

        .navbar {
            background-color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }

        .headline {
            color: aquamarine;
            font-weight: bold;
            font-size: 30px;
        }

        .titel {
            color: black;
            font-size: 65px;
            font-weight: bold;
            align-items: center;
            margin-top: 20px;
            margin-left: 20px;
            text-align: center;
        }
        .placescontainer {
            display:flex;
            width:100%;
            justify-content: center;
        }
        .placestext {
            background-color: whitesmoke;
            height: 50%; /* Use 100% height to occupy the entire container */
            width: 85%;
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            justify-content: center;
            font-size: 18px;
            text-align: left;
            position: flex;
            margin-left: 120px;
            margin-right: 120px;
            
        }

        .titelvideo {
            display: flex;
            justify-content: center;
            padding: 20px;
            margin-top:10px;
        }

        p {
            color: black;
            font-family: "Open Sans", sans-serif;
        }

        .menu-links {
            color: whitesmoke;
            text-decoration: none;
            margin-right: 20px;
            font-size: 24px;
        }
        a {
            color: black;
        }
        a:hover {
            text-decoration: underline;
            color: aquamarine;
            margin: left;
        }

        .menu {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            justify-content: right;
            align-items: center;
            font-weight: bold;
        }

        .menu-links:first-child {
            margin-bottom: 0;
        }

        #content-container {
            margin-top: 60px;
            padding: 20px;
        }

        #email-link {
            color: black;
            text-decoration: underline;
        }

        #email-link:hover {
            text-decoration: underline;
            color: aquamarine;
        }
        .ortbild {
            margin-top: 10px;
            justify-content: center;
            display: flex ;
            width: 80%;
            height: 80%;
            border-radius: 10px;
        }
        .ortbild_container {
            display:flex;
            width:100%;
            justify-content: center;
        }
        .untertitel {
            color: black;
            font-size: 20px;
            font-weight: bold;
            text-align: left;
        }
    </style>
</head>
<title>Bachalpsee</title>

<body>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="/Bilder/website_logo.png" alt="Logo" onclick="loadHomePage()">
            </div>
            <h1 class="headline">Zugvögel</h1>
        </div>

        <div class="menu">
            <a class="menu-links" href="#" onclick="openPlaces()">Places</a>
            <a class="menu-links" href="javascript:void(0);" onclick="openContactTab()">Suche</a>
            <a class="menu-links" href="#" onclick="openAboutUs()">About</a>
            <a class="menu-links" href="#" onclick="openFunFacts()">Fun Facts</a>
        </div>
    </div>
    <div class= 'titel'>
    <h1 class='titel'>Bachalpsee</h1>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/Bachalpsee-Sommer-Wetterhorn-Schreckhorn-Abendstimmung.jpg" alt="Bachalpsee">
    </div>
    <div class= 'placescontainer'>
    <p class='placestext'>Er könnte kaum idyllischer liegen und sein kristallklares Wasser begeistert ebenso, wie der gebotene Panoramablick auf die umliegenden Berge, der oft schon zum Postkartenmotiv wurde. Der Bachalpsee, strenggenommen zwei Seen, die durch einen Naturdamm voneinander getrennt sind, ist auf der Verflachung des Firsts oberhalb von Grindelwald wohl vor Urzeiten entstanden. Heute ist er umgeben von einer einzigartigen Moorlandschaft von nationaler Bedeutung. Erreichbar ist der See von der Bergstation Grindelwald First aus.<br><br>
    Die Bergstation am First ist der Ausgangspunkt einer traumhaften Wanderung an und um den Bachalpsee. Vom First aus wandert man auf dieser Route zunächst in östlicher Richtung mit Ausblicken auf die steilen Felswände von Schreckhorn, Wetterhorn und Finsteraarhorn und die beeindruckenden Grindelwaldgletscher. Nach etwa 1.5 Stunden auf einem gut befestigten Weg ist man am tiefblauen Bachalpsee angekommen und wird belohnt vom Ausblick auf das schneebedeckte Jungfraumassiv mit Eiger, Mönch und Jungfrau.<br><br>
    Wer sich an den traumhaften Panorama sattgesehen hat und ein paar Fotos für die Freunde zuhause im Kasten hat, wandert weiter zum Faulhorn und wird mit dem imposanten Bergpanorama belohnt. Nach dem Abstieg vom Berg führt die Route vorbei am Gärstegg und Stollen zum Weiler Oberläger und schliesslich zur Bussalp, wo sich hungrige Wanderer stärken können. Die Rückreise von der Bussalp nach Grindelwald und Interlaken wird mit dem Bus angetreten. Empfohlene Wandermonate: Mai bis Oktober (abhängig von der Schneemenge)<br><br>
    Eckdaten der Wanderung:<br> Länge 10 km<br> Aufstieg: 580 m<br> Abstieg: 950 m<br> Dauer: knapp 4 Stunden<br><a href="https://www.bergwelten.com/t/w/24698">Zur Karte</a></p>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/Bachalpsee.jpg" alt="Bachalpsee">
    </div>
    <div class='placescontainer'>
        <p class='placestext'> 
        <b>Kontakt:</b>
        Firstbahn AG <br>
        <a href="https://maps.app.goo.gl/gxhE6DT8W3p8zPqZA">Dorfstrasse 187</a>
        3818 Grindelwald<br>
        <a href="tel:+41338287233">+41 33 828 72 33</a>
        <a id="email-link" href=mailto:info@jungfrau.ch> info@jungfrau.ch</a>
        <a href="https://www.jungfrau.ch/de-ch/">Website</a></p>
    </div>
    

    <script>
        function loadHomePage() {
            window.location = "../index.php";
        }

        function openContactTab() {
            window.location = "../search.php";
        }

        function openAboutUs() {
            window.location = "../about.php";
        }

        function openPlaces() {
            window.location = "../places.php";
        }

        function openFunFacts() {
            window.location = "../funfact.php";
        }
        
    </script>
</body>
</html>
