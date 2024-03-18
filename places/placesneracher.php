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
            width: 70% ;
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
            font-size: 80px;
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
<title>Neeracherried</title>

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
    <h1 class='titel'>Neeracherried</h1>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/Naturschutzzentrum_quer.jpg" alt="Neeracherried">
    </div>
    <div class= 'placescontainer'>
    <p class='placestext'> <br>Das BirdLife-Naturzentrum Neeracherried liegt am Rand eines der letzten grossen Flachmoore der Schweiz. Dank einem Steg ins Ried und zwei Beobachtungshütten lässt sich die vielfältige Natur – speziell Vögel – hautnah erleben: Im Ried brüten Kiebitz, Eisvogel und Lachmöwe, und hier rasten Zugvögel wie Grünschenkel oder Silberreiher.
        Im Gebäude gibt es eine interaktive Ausstellung zum Lebensraum Ried, die auch für Kinder geeignet ist. Eine Videoschau, zwei Naturpfade und Sonderausstellungen - aktuell zu "Geheimnisvolle Unterwasserwelt" mit lebendigen Kleintieren in Aquarien – runden das attraktive Angebot ab.
        Das BirdLife-Naturzentrum Neeracherried ist nicht nur für Einzelbesucher offen, sondern auch für alle Arten von Gruppen, von Familien über Vereine, und Firmen bis zu Verwaltungen. Für Schulen gibt es spezielle Materialien. </p>
    </div>
    <div class="titelvideo">
            <video autoplay controls width="85%">
                <source src="/Bilder/Video.mp4" type="video/mp4">
            </video>
    </div>
    <div class='placescontainer'>
        <p class='placestext'> 
        <b>Ihr Anlass:</b><br>
        Firmenausflug mit Apéro, Familienfest mit Führung in die Natur, Hochzeits-Überraschungsausflug: Dies alles ist im BirdLife-Naturzentrum möglich. Wir beraten Sie gerne.
        <br>
        Schulen und Kinder
        Schulklassen jeden Alters, Lehrerkollegien und Kindergruppen sind im BirdLife-Naturzentrum Neeracherried speziell willkommen. Wir veranstalten stufengerechte Führungen vom Kindergarten- bis zum Universitätsniveau. Für alle Schulstufen (Unterstufe, Mittelstufe, Oberstufe, Kantonsschule Oberstufe) gibt es auf der Webpage ein umfangreiches Vor- und Nachbereitungsdossier für die Führung im Neeracherried. Die wichtigsten Themen sind Vögel und Vogelzug, Kleintiere im Teich sowie Naturschutz - wir passen das Programm gerne den spezifischen Voraussetzungen der Gruppen an.
        <br><br><br>
        <b>Öffnungszeiten:</b>
        April bis Oktober<br>
        Mi 14–20 Uhr<br>
        Sa 10–18 Uhr<br>
        So und Feiertage 8–18 Uhr
        <br><br>
        November bis März
        2. Sonntag des Monats 9–16 Uhr
        <br><br>
        <b>Kontakt:</b>
        BirdLife-Naturzentrum Neeracherried<br>
        <a href="https://maps.app.goo.gl/kqxqEYgJJySsJfdaA">Dielsdorferstrasse 13</a>
        8173 Neerach<br>
        <a href="tel:044-858-13-00">044 858 13 00</a>
        <a id="email-link" href=mailto:neeracherried@birdlife.ch>neeracherried@birdlife.ch</a>
        <a href="https://www.birdlife.ch/de/content/naturzentrum-neeracherried">Website</a></p>
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
