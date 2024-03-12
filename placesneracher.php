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
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 20%;
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
        }

        .titel {
            color: black;
            font-size: 80px;
            font-weight: bold;
            align-items: center;
            margin-top: 10px;
            margin-left: 20px;
        }

        .container {
            background-color: whitesmoke;
            height: 50%; /* Use 100% height to occupy the entire container */
            width: 67%;
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            justify-content: center;
            font-size: 18px;

            position: absolute;
            top: 650px;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .titelbild {
            display: flex;
            justify-content: center;
            padding: 20px;
            margin-top:800px;
        }

        p {
            color: black
            font-family: sans-serif;
        }

        .menu-links {
            color: whitesmoke;
            text-decoration: none;
            margin-right: 20px;
            font-size: 24px;
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

        #contact-container,
        #fun-facts-container {
            text-align: center;
        }

        #contact-container p,
        #fun-facts-container p {
            font-size: 18px;
            margin-top: 20px;
        }

        #email-link {
            color: #04AA6D;
            font-weight: bold;
            text-decoration: none;
        }

        #email-link:hover {
            text-decoration: underline;
        }

        #fun-facts-container p {
            font-size: 24px; /* Increased text size */
            margin-top: 20px;
        }

        #next-fact-button {
            background-color: #04AA6D;
            color: whitesmoke;
            border: none;
            padding: 15px 20px;
            font-size: 20px;
            border-radius: 10px; /* Added border-radius for a rounded look */
            cursor: pointer;
            transition: transform 0.2s ease-in-out; /* Added scaling animation */
        }

        #next-fact-button:hover {
            background-color: #038353;
        }

        #next-fact-button:active {
            transform: scale(0.95); /* Slight scaling when button is pressed */
        }
    </style>
</head>
<title>Zugvögel</title>

<body>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="website_logo.png" alt="Logo" onclick="loadHomePage()">
            </div>
            <h1 class="headline">Zugvögel</h1>
        </div>

        <div class="menu">
            <a class="menu-links" href="#" onclick="openPlaces()">Places</a>
            <a class="menu-links" href="javascript:void(0);" onclick="openContactTab()">Contact</a>
            <a class="menu-links" href="#" onclick="openAboutUs()">About</a>
            <a class="menu-links" href="#" onclick="openFunFacts()">Fun Facts</a>
        </div>
    </div>

    <h1 class='titel' style='text-align : center;' font-size: 30px; >Neeracherried</h1>

    <div class='container'>
    <p style= 'text-align : left;'> Das BirdLife-Naturzentrum Neeracherried liegt am Rand eines der letzten grossen Flachmoore der Schweiz. Dank einem Steg ins Ried und zwei Beobachtungshütten lässt sich die vielfältige Natur – speziell Vögel – hautnah erleben: Im Ried brüten Kiebitz, Eisvogel und Lachmöwe, und hier rasten Zugvögel wie Grünschenkel oder Silberreiher.
        Im Gebäude gibt es eine interaktive Ausstellung zum Lebensraum Ried, die auch für Kinder geeignet ist. Eine Videoschau, zwei Naturpfade und Sonderausstellungen - aktuell zu "Geheimnisvolle Unterwasserwelt" mit lebendigen Kleintieren in Aquarien – runden das attraktive Angebot ab.
        Das BirdLife-Naturzentrum Neeracherried ist nicht nur für Einzelbesucher offen, sondern auch für alle Arten von Gruppen, von Familien über Vereine, und Firmen bis zu Verwaltungen. Für Schulen gibt es spezielle Materialien.
        <br><br><br>
        Ihr Anlass
        Firmenausflug mit Apéro, Familienfest mit Führung in die Natur, Hochzeits-Überraschungsausflug: Dies alles ist im BirdLife-Naturzentrum möglich. Wir beraten Sie gerne.
        <br>
        Schulen und Kinder
        Schulklassen jeden Alters, Lehrerkollegien und Kindergruppen sind im BirdLife-Naturzentrum Neeracherried speziell willkommen. Wir veranstalten stufengerechte Führungen vom Kindergarten- bis zum Universitätsniveau. Für alle Schulstufen (Unterstufe, Mittelstufe, Oberstufe, Kantonsschule Oberstufe) gibt es auf der Webpage ein umfangreiches Vor- und Nachbereitungsdossier für die Führung im Neeracherried. Die wichtigsten Themen sind Vögel und Vogelzug, Kleintiere im Teich sowie Naturschutz - wir passen das Programm gerne den spezifischen Voraussetzungen der Gruppen an.
        <br><br><br>
        Öffnungszeiten<br>
        April bis Oktober<br>
        Mi 14–20 Uhr<br>
        Sa 10–18 Uhr<br>
        So und Feiertage 8–18 Uhr
        <br><br>
        November bis März
        2. Sonntag des Monats 9–16 Uhr
        <br><br><br>
        Kontakt:
        BirdLife-Naturzentrum Neeracherried
        Dielsdorferstrasse 13, Postfach
        8173 Neerach
        Tel. 044 858 13 00
        birdlife.ch/naturzentrum-neeracherried</p>
    </div>


        <div class="titelbild">
            <video autoplay controls width="70%">
                <source src="Video.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <script>
        function loadHomePage() {
            window.location = "index.php";
        }

        function openContactTab() {
            window.location = "contact.php";
        }

        function openAboutUs() {
            window.location = "about.php";
        }

        function openPlaces() {
            window.location = "places.php";
        }

        function openFunFacts() {
            window.location = "funfact.php";
        }
        // Remove the call to openPlaces() to avoid automatic redirection
    </script>
</body>
</html>
