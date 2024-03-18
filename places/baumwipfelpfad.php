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
            margin-left: 185px;
            margin-right: 185px;
            
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
<title>Baumwipfelpfad</title>

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
    <h1 class='titel'>Baumwipfelpfad Toggenburg</h1>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/Baumwipfelpfad_toggenburg.jpg" alt="Baumwipfelpfad">
    </div>
    <div class= 'placescontainer'>
    <p class='placestext'> <br>Herzlich willkommen im schönen Toggenburg. Auf dem Baumwipfelpfad erleben Sie die Natur aus einer anderen Perspektive. Geniessen Sie inmitten des Waldes ein Stück Natur, lauschen Sie dem Gezwitscher der Vögel und dem Rauschen der Blätter.  Zahlreiche, interaktive Erlebnisstationen auf und um den Pfad vermitteln viel Wissenswertes zur heimischen Tier- und Pflanzenwelt.<br><br>
    Die Kugelbahnen, der Spielplatz und mehrere Grillplätze laden zum spielen und geniessen gleichermassen ein.
    Der Pfad ist barrierefrei gestaltet und somit für alle zugänglich.<br><br>
    Der Baumwipfelpfad Neckertal ist ein etwas anderer Freizeitpark und verbindet Naturbegeisterung mit Erholung und ist ein perfektes Ausflugsziel für gross und klein, jung und alt.<br><br>
    Natürlich finden sich im Wald zahlreiche Vögel, die sich vom Baumwipfelpfad ohne Probleme beobachten lassen. </p>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/1593864006.jpg" alt="Baumwipfelpfad">
    </div>
    <div class='placescontainer'>
        <p class='placestext'> 
        <b>Öffnungszeiten:</b><br>
        <b>Wintersaison November 2023 bis 28. März 2024</b>
        Mittwoch bis Sonntag von 10:00 Uhr bis 16:00 Uhr<br>
        (Montag & Dienstag geschlossen)<br><br>
        <b>Öffnungszeiten über die Ostertage:</b>
        Karfreitag: 9:30 Uhr bis 18:00 Uhr<br>
        Ostersamstag: 9:30 Uhr bis 18:00 Uhr<br>
        Ostersonntag: 9:30 Uhr bis 18:00 Uhr<br>
        Ostermontag: 9:30 Uhr bis 18:00 Uhr<br><br>
        
        <b>Sommersaison 29. März 2024 bis Oktober 2024:</b>
        Täglich von 9:30 Uhr bis 18:00 Uhr<br>
        Bis 30 Minuten vor der Schliessung können Sie mit dem Pfadrundgang starten. Bei Gewitter, Hagel & Sturm kann der Pfad geschlossen werden. Bitte beachten Sie die aktuellen Hinweise auf der Website.<br><br>

        <b>Öffnungszeiten für Gruppen:</b>
        Auf Anfrage öffnen wir für Gruppen auch ausserhalb der Öffnungszeiten.<br><br>

        <b>Kontakt:</b>
        Genossenschaft Baumwipfelpfad Neckertal <br>
        <a href="https://maps.app.goo.gl/ceievahkeSE9EXMn7">Parkplatz Lettenstrasse 19</a>
        9122 Mogelsberg<br>
        <a href="tel:071-552-33-03">071 552 33 03</a>
        <a id="email-link" href=mailto:info@baumwipfelpfad.ch> info@baumwipfelpfad.ch</a>
        <a href="https://baumwipfelpfad.ch/de/">Website</a></p>
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
