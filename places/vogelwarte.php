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
            margin-left: 180px;
            margin-right: 180px;
            
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
<title>Vogelwarte Sempach</title>

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
    <h1 class='titel'>Vogelwarte Sempach</h1>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/Vogelwarte_Sempach.jpg" alt="Vogelwarte Sempach">
    </div>
    <div class= 'placescontainer'>
    <p class='placestext'> Lernen Sie die einheimischen Vögel auf ganz neue Weise kennen! <br><br>
        Werden Sie selbst zum Vogel, lassen Sie sich beringen und finden Sie heraus, was für ein Vogel Sie sind - herzlich willkommen im Besuchszentrum der Schweizerischen Vogelwarte in Sempach!<br><br><br>
    
        Die Vogelwarte Sempach ist eine führende Institution für die Erforschung und den Schutz von Vögeln in der Schweiz. Sie wurde 1924 gegründet und hat seitdem einen bedeutenden Beitrag zum Verständnis der Vogelwelt geleistet. Die Vogelwarte befindet sich am idyllischen Sempachersee und bietet eine ideale Umgebung für Forschung und Beobachtung.<br><br>
        Die Hauptziele der Vogelwarte Sempach sind die Überwachung von Vogelpopulationen, die Erforschung von Vogelzug und Verhalten, sowie die Förderung des Vogelschutzes. Durch langjährige Studien und Monitoringprogramme liefert die Vogelwarte wichtige Daten zur Bestandsentwicklung verschiedener Vogelarten, zur Verbreitung von Krankheiten und zur Auswirkung von Umweltveränderungen auf die Vogelwelt.<br><br>
        Zusätzlich zu ihrer wissenschaftlichen Arbeit spielt die Vogelwarte Sempach eine wichtige Rolle bei der Umweltbildung und Sensibilisierung der Öffentlichkeit für den Schutz von Vögeln und ihren Lebensräumen. Sie bietet Führungen, Exkursionen und Workshops für Schulen, Vereine und andere Interessengruppen an, um das Bewusstsein für die Vielfalt und den Wert der Vogelwelt zu stärken.
        Dank ihres Engagements und ihrer Forschungsarbeit trägt die Vogelwarte Sempach massgeblich zum Erhalt der Vogelvielfalt und des ökologischen Gleichgewichts bei und ist damit eine unverzichtbare Institution im Schweizer Naturschutz.</p>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/1578903961.jpg" alt="Vogelwarte Sempach">
    </div>
    <div class= 'placescontainer'>
    <p class='placestext'>
        <b>Öffnungszeiten:</b><br>
        Dienstag - Sonntag: 10-17 Uhr<br>
        Montag: Geschlossen<br>
        letzter Einlass: 16 Uhr<br><br><br>
        <b>Kontakt:</b>
        Schweizerische Vogelwarte <br>
        <a href="https://maps.app.goo.gl/qrpze4ndima5MviT8">Seerose 1</a>
        6204 Sempach<br>
        <a href="tel:+41414629700">Tel. +41 41 462 97 00</a>
        <a href="https://www.vogelwarte.ch/de/">Website</a></p>
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
