<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: whitesmoke;
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
            top: 0;
            left: 0;
            right: 0;
            border-radius: 5px;
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
            margin-top: 10px;
            margin-left: 20px;
        }

        .titelbild {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .menu-links {
            color: whitesmoke;
            text-decoration: none;
            margin-right: 20px;
            font-size: 24px;
        }

        .menu-links:hover {
            text-decoration: underline;
            color: aquamarine;
        }

        .menu {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
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

        #fun-facts-container {
            text-align: center;
        }

        #fun-facts-container p {
            font-size: 24px;
            margin-top: 20px;
        }

        #next-fact-button {
            background-color: #04AA6D;
            color: whitesmoke;
            border: none;
            padding: 15px 20px;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }

        #next-fact-button:hover {
            background-color: #038353;
        }

        #next-fact-button:active {
            transform: scale(0.95);
        }
    </style>
</head>

<title>Zugvögel - Funfacts</title>

<body>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="Bilder/website_logo.png" alt="Logo" onclick="loadHomePage()">
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

    <div id="content-container">
    </div>

    <script>
        const funFacts = [
    "Papageien können Wörter nachahmen und menschliche Sprache lernen.",
    "Kolibris sind die einzigen Vögel, die rückwärts fliegen können.",
    "Eulen können ihre Köpfe um bis zu 270 Grad drehen.",
    "Der Wanderfalke ist der schnellste Vogel und kann Geschwindigkeiten von über 386 kmh erreichen.",
    "Flamingos werden rosa, weil sie Krebstiere essen.",
    "Kakadus sind für ihre lauten Rufe und ihre sozialen Fähigkeiten bekannt.",
    "Singvögel können komplexe Lieder lernen und nachahmen.",
    "Kiwis sind flugunfähige Vögel, die in Neuseeland beheimatet sind.",
    "Der Strauss ist der grösste flugunfähige Vogel und kann nicht fliegen.",
    "Der Pelikan hat einen grossen Schnabel und eine dehnbare Kehltasche zum Fischen.",
    "Amseln sind dafür bekannt, melodische Gesänge zu haben.",
    "Falken haben scharfe Augen und sind geschickte Jäger.",
    "Der Star kann eine Vielzahl von Geräuschen und Melodien nachahmen.",
    "Kraniche sind für ihre beeindruckenden Wanderungen bekannt.",
    "Elstern sind neugierige Vögel und können verschiedene Gegenstände sammeln.",
    "Der Pirol hat ein lebhaft gelbes Gefieder und einen melodischen Gesang.",
    "Habichte sind schnelle Greifvögel, die geschickt jagen.",
    "Kolkraben sind intelligente Vögel und können Werkzeuge verwenden.",
    "Sperlinge sind häufige Stadtbewohner und geschickte Nestbauer.",
    "Der Wiedehopf hat eine auffällige Federhaube und einen charakteristischen Ruf.",
    "Schwalben sind bekannt für ihre eleganten Flugmanöver.",
    "Möwen sind geschickte Flieger und leben oft in Küstengebieten.",
    "Wellensittiche sind beliebte Haustiere und können einfache Wörter lernen.",
    "Der Zaunkönig ist einer der kleinsten Vögel und hat einen lauten Gesang.",
    "Raben gelten als äusserst intelligent und sind in der Lage, Werkzeuge zu nutzen, komplexe Probleme zu lösen und sogar sich selbst im Spiegel zu erkennen.",
    "Wachteln sind bodenbewohnende Vögel und haben einen schnellen Flug.",
    "Seeadler sind majestätische Greifvögel und stehen für Stärke.",
    "Nachtigallen sind für ihren melodischen Gesang in der Dämmerung bekannt.",
    "Der Gesang des Männchens des australischen Lyrebirds umfasst Imitationen von anderen Vögeln sowie Geräusche aus ihrer Umgebung wie Kameraauslöser oder Motorsägen.",
    "Der Vogel Strauss hat die grössten Augen aller Landsäugetiere und kann durch seine aussergewöhnliche Sehkraft Gefahren aus grosser Entfernung erkennen.",
    "Der Albatros hat die grösste Flügelspannweite aller lebenden Vögel und kann über Tausende von Kilometern ohne Pause über dem Ozean fliegen.",
    "Der Kuckuck ist bekannt für sein brutparasitisches Verhalten, indem er seine Eier in die Nester anderer Vögel legt und so die Aufzucht seiner Nachkommen fremder Arten überlässt."

        ];

        function loadHomePage() {
            window.location = "index.php";
        }

        function openContactTab() {
            window.location = "search.php";
        }

        function openAboutUs() {
            window.location = "about.php";
        }

        function openPlaces() {
            window.location = "places.php";
        }

        function displayRandomFunFact() {
            const randomFactIndex = Math.floor(Math.random() * funFacts.length);
            const randomFunFact = funFacts[randomFactIndex];

            document.getElementById("content-container").innerHTML = `
                <div id="fun-facts-container">
                    <h1>Fun Facts</h1>
                    <p>${randomFunFact}</p>
                    <button id="next-fact-button" onclick="displayRandomFunFact()">Nächster Fakt</button>
                </div>
            `;
        }

        // Initial display of a random fun fact
        displayRandomFunFact();
    </script>
</body>

</html>
