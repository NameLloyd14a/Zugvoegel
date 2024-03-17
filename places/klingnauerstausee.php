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
<title>Klingnauer Stausee</title>

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
    <h1 class='titel'>Klingnauer Stausee</h1>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/Klingnauer Stausee.jpg" alt="Klingnauer Stausee">
    </div>
    <div class= 'placescontainer'>
    <p class='placestext'>Der Klingnauer Stausee hat internationale Bedeutung als wichtiger Lebensraum und Rastplatz für Wasservögel und Limikolen. Aber auch Greifvögel können auf dem Zug ins Winterquatier manchmal in grosser Zahl am Himmel beobachtet werden. Jedes Jahr können bis zu 220 Vogelarten festgestellt werden. Insgesamt wurden bisher über 310 verschiedene Vogelarten nachgewiesen, rund 100 davon haben schon ein- oder mehrmals am Klingnauer Stausee oder den angrenzenden Auengebieten gebrütet.<br><br>
    Der Stausee wurde bereits 1938 von den Ornithologen "entdeckt", und seit den frühen vierziger Jahren hat die Zahl der vor allem an Wochenenden hier zusammenströmenden Beobachter ständig zugenommen. Im Laufe der Jahre sind so in den Archiven der Schweizerischen Vogelwarte Sempach und bei verschiedenen Privatpersonen über 650'000 Beobachtungen zusammengekommen.<br><br>
    Im Winter werden die Wasservögel am Stausee seit 1967 im Rahmen der international koordinierten Wasservogelzählungen (WVZ) systematisch erfasst. Und seit 1980 sammelt die Ornithologische Arbeitsgruppe Klingnauer Stausee ganzjährig Beobachtungen aller Vogelarten im Gebiet. </p>
    </div>
    <div class='ortbild_container'>
        <img class='ortbild'src="/Bilder/klingnauer-stausee_aare_wasserkraftwerk-klingnau_gippingen_gippinger-grien.jpg" alt="Klingnauer Stausee">
    </div>
    <div class='placescontainer'>
        <p class='placestext'> 
        Am Ausgang des unteren Aaretals, kurz vor der Mündung der Aare in den Rhein, liegt der 1.5 km² grosse, 1935 erbaute Klingnauer Stausee. Berühmt für seine Naturwerte, im Speziellen die reiche Vogelwelt, ist der See Anziehungspunkt für Erholungssuchende aus der nahen Umgebung, aber auch für Tagestouristen aus der ganzen Schweiz und dem nahem Ausland. Von den Bahnhöfen Koblenz und Klingnau sind die gut erschlossenen und zum Teil asphaltierten Uferwege gut zu erreichen. Parkplätze sind auf der westlichen Seite der Brücke bei Döttingen vorhanden.<br><br>
        Spaziergänge rund um den See offenbaren eine weiträumige Landschaft und lassen die Dimensionen des ehemals wilden Auengebiets erahnen. Durch die stetige Verlandung des Stausees, sichtbar vor allem im oberen Seebecken, entstanden neben den offenen Wasserflächen bald einmal andere Lebensräume: Von der Schlickfläche zur Flach-moorvegetation über Schilfröhricht bis hin zum jungen Auenwald bietet der Stausee den verschiedensten Tier- und Pflanzenarten Lebensraum.<br><br>
        Der 2004 am westlichern Ufer errichtete Beobachtungsturm erleichtert den freien Blick über den See und ermöglicht es auch Laien, einige der Vögel auf dem See zu identifizieren: Tafeln auf der obersten Plattform des Turms zeigen die am häufigsten anwesenden Seebewohner. Eine Informationstafel gibt zudem Hinweise zu aktuell anwesende Vogelarten und naturkundlichen Aktivitäten rund um den Stausee.<br><br>
        Zahlreiche Gewässerkorrektionen im 19. und 20. Jahrhundert und der 1935 erfolgte Einstau der Aare zerstörte im Gebiet des heutigen Stausees ein ehemals weitläufiges Auengebiet. Der neu entstandene Stausee entwickelte sich dafür bald in ein Wasser- und Zugvogelreservat von internationaler Bedeutung. Jährlich überwintern einige Tausend Enten und Möwen am Stausee. Aber auch im Sommer gewinnt das Gebiet zunehmend an Bedeutung für Brutvögel. Im Frühling und Herbst können zudem bis zu 30 verschiedenen Limikolenarten beobachtet werden.<br><br>
        Ausflüge in die umliegenden Naturschutzgebiete Gippinger Grien, Giriz, Machme, und Fischergrien/-Werd geben Einblicke in typische Auenlebensräume und vermitteln ein Gefühl von Ruhe und Nähe zur Natur. Mit etwas Glück hört man den Ruf eines Kuckucks, erhascht einen Blick auf den schillernden Eisvogel oder sieht eine Ringelnatter durch das Wasser eines Altlaufs schlängeln. Als Teile des Auenschutzparks Aargau vernetzten diese Auengebiete die Landschaftsräume der Aare und des Rheins.<br><br>
        <b>Adresse:</b>
        <a href="https://maps.app.goo.gl/8TkstQkRKPEpPZFv6">Klingnauer Stausee</a>
        5316 Leuggern<br>
        <a href="http://www.klingnauerstausee.ch">Website</a></p>
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
