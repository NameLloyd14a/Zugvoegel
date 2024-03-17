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
<title>Bolle di Magadino</title>

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
    <h1 class='titel'>Bolle di Magadino</h1>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/Le Bolle di Magadino.jpg" alt="Bolle di Magadino">
    </div>
    <div class= 'placescontainer'>
    <p class='placestext'> <br>Die Bolle di Magadino, zwischen der Mündung der Verzasca und Magadino, sind eine Landschaft von naturwissenschaftlich anerkanntem Wert<br><br>
Die Bolle di Magadino, eine der neun Auenlandschaften, denen die Schweizerische Akademie der Naturwissenschaften internationale Bedeutung zuerkannte, umfassen das Deltagebiet der Flüsse Ticino und Verzasca am Maggioresee.<br><br>
Die Bolle beherbergen eine besondere, für das Übergangsgebiet zwischen Wasser und Festland eigentümliche Pflanzen- und Tierwelt. Dank der Errichtung von Naturlehrpfaden ist es möglich, die Bolle zu besichtigen, ohne ihre natürlichen Bewohner allzu sehr zu stören oder zu beschädigen.<br><br>
Alle Jahreszeiten eignen sich für einen Besuch der Bolle: wenn Schnee liegt, sieht die Landschaft geradezu märchenhaft aus!<br><br>
Drei Zugänge in Magadino und einer im Gebiet Tenero-Gordola führen zu den Naturlehrpfaden, die mit Informationstafeln auf deutsch und italienisch versehen sind. </p>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/gambarogno-primavera-acqua-bolle-magadino.jpg" alt="Bolle di Magadino">
    </div>
    <div class='placescontainer'>
        <p class='placestext'> 
        <b>International</b>
        - das einzige Mündungsgebiet eines Flusses am südlichen Alpenrand, das im natürlichen Zustand erhalten geblieben ist (eines der wenigen in Europa)<br>
        - reich an Biotopen im Wasser und auf dem festen Boden, in verschiedenen Entwicklungsphasen<br>
        - die Bolle nehmen über 300 Vogelarten auf<br>
        - beherbergen eine überaus reiche Flora und Fauna<br><br>

        <b>National</b>
        - eine charakteristische Delta-Landschaft, einmalig an Schönheit, Originalität, Ausdehnung und ökologischem Wert für die Ökosysteme der Flüsse, die in diejenigen des Sees übergehen<br>
        - die Pflanzenformationen, die für Sümpfe und Auen typisch sind, leben in den Bolle zusammen und wirken interaktiv in einem gemeinsamen Raum<br>
        - weisen einen Reichtum der Formen auf einer verhältnismässig bescheidenen Fläche auf: 90 Algenarten, 20 Briophyten (Moose und Flechten) 16 Pterophyten (Farne und Schachtelhalme) 430 Spermatophyten (Monokotyle und Dikothyle) 387 Pilzarten, 250 Vogelarten<br><br>
        
        <b>Regional</b>
        - Die Bolle stellen heute nur den Rest eines grandiosen Überschwemmungsgebiets dar, das einst hundert Mal grösser war und sich ohne Unterbruch von den Talgründen des Lago Maggiore bis zum Misox, dem Bleniotal und der Leventina erstreckte. In der Folge der Eindämmung des Flusses Ticino und der anschliessenden Meliorationsarbeiten wurde der grösste Teil der Überschwemmungs- und Sumpfgebiete ausgetrocknet und in landwirtschaftliches Kulturland verwandelt<br><br>

        Der südliche Teil der Bolle ist auf markierten Wegen von Magadino aus, der nördliche Teil von Gordola aus zugänglich.<br><br>

        Geführte Wanderungen vom April bis Oktober (auf Vereinbarung): siehe <a href="https://www.bolledimagadino.com">www.bolledimagadino.com</a><br><br>
        <b>Kontakt:</b>
        Fondazione Bolle di Magadino<br>
        <a href="https://maps.app.goo.gl/7CZCDXdYHhLvxKMt8">Vicolo Forte Olimpo 3</a>
        6573 Magadino<br>
        <a href="tel:+41917953115">Tel: +41 91 795 31 15</a>
        <a id="email-link" href=mailto:fbm@bluewin.ch>fbm@bluewin.ch</a>
        <a href="https://www.bolledimagadino.com">Website</a></p>
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
