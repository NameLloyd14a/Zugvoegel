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

        .img_neracher {
            position: relative;
            width: 49%;
            float: left;
            margin-right: 2%;
            margin-bottom: 2%;
            overflow: hidden; 
        }


        .img_Baumwipfelpfad {
            width: 49%;
            float: right;
            overflow: hidden;
        }


        .img_Vogelwarte_sempach_jpg {
            width: 60%;
            float: left;
            overflow: hidden;
            margin-right: 2%;
            margin-bottom: 2%;
        }

        .img_LeBollediMagadino {
            width: 38%;
            float: right;
            overflow: hidden;
            margin-bottom: 2%;
        }

        .img_Bachalpsee {
            width: 38%;
            float: right;
            overflow: hidden;
            margin-bottom:2%;
        }


        .img_OeschineseeRundweg {
            width: 60%;
            float: left;
            overflow: hidden;
        }

        .img_Klingnauer_Stausee {
            width: 38%;
            float: right;
            overflow: hidden;
        }

        .img_Klingnauer_Stausee:hover img,
        .img_OeschineseeRundweg:hover img,
        .img_Bachalpsee:hover img,
        .img_neracher:hover img,
        .img_Baumwipfelpfad:hover img,
        .img_Vogelwarte_sempach_jpg:hover img,
        .img_LeBollediMagadino:hover img {
            transform: scale(1.1);
        }

        .img_Klingnauer_Stausee img,
        .img_OeschineseeRundweg img,
        .img_Bachalpsee img,
        .img_neracher img,
        .img_Baumwipfelpfad img,
        .img_Vogelwarte_sempach_jpg img,
        .img_LeBollediMagadino img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }


        .image-container {
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .nerachertext,
        .baumwipfelpfadtext,
        .vogelwartetext,
        .bolleditext,
        .bachalpseetext,
        .oeschinenseetext,
        .klingnauertext {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
            color: whitesmoke;
            text-align: center;
            padding: 100%; 
            opacity: 0; 
            transition: opacity 0.3s ease-in-out;
            font-size: 50px;
        }

        .img_neracher:hover .image-container .nerachertext,
        .img_Baumwipfelpfad:hover .image-container .baumwipfelpfadtext,
        .img_Vogelwarte_sempach_jpg:hover .image-container .vogelwartetext,
        .img_LeBollediMagadino:hover .image-container .bolleditext,
        .img_Bachalpsee:hover .image-container .bachalpseetext,
        .img_OeschineseeRundweg:hover .image-container .oeschinenseetext,
        .img_Klingnauer_Stausee:hover .image-container .klingnauertext {
            opacity: 1; 
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
<title>Zugvögel - Places</title>

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
            <a class="menu-links" href="#" onclick="openContactTab()">Suche</a>
            <a class="menu-links" href="#" onclick="openAboutUs()">About</a>
            <a class="menu-links" href="#" onclick="openFunFacts()">Fun Facts</a>
        </div>
    </div>


    <div class='img_neracher' onclick='openplacesneracher()'>
    <div class="image-container">
        <img src='Bilder/birdlife-naturzentrum-neeracherried-ausflugsziel-buehnenbild1.jpg'> 
        <div class="nerachertext">Neeracherried</div>
    </div>
    </div>

    <div class='img_Baumwipfelpfad' onclick='openplacesbaumwipfelpfad()'>
        <div class="image-container">
            <img src='Bilder/Baumwipfelpfad.jpg'> 
            <div class="baumwipfelpfadtext">Baumwipfelpfad</div>
        </div>
    </div>

    <div class='img_Vogelwarte_sempach_jpg' onclick='openplacesvogelwarte()'>
        <div class="image-container">
            <img src='Bilder/Vogelwarte_Sempach.jpg'> 
            <div class="vogelwartetext">Vogelwarte Sempach</div>
        </div>
    </div>

    <div class='img_LeBollediMagadino' onclick='openplacesbolledi()'>
        <div class="image-container">
            <img src='Bilder/Le Bolle di Magadino.jpg'> 
            <div class="bolleditext">Le Bolle di Magadino</div>
        </div>
    </div>

    <div class='img_Bachalpsee' onclick='openplacesbachalpsee()'>
        <div class="image-container">
            <img src='Bilder/Bachalpsee-Sommer-Wetterhorn-Schreckhorn-Abendstimmung.jpg'> 
            <div class="bachalpseetext">Bachalpsee</div>
        </div>
    </div>

    <div class='img_OeschineseeRundweg' onclick='openplacesoeschinensee()'>
        <div class="image-container">
            <img src='Bilder/Oeschinensee Rundweg.jpg'> 
            <div class="oeschinenseetext">Oeschinensee Rundweg</div>
        </div>
    </div>

    <div class='img_Klingnauer_Stausee' onclick='openplacesklingnauer()'>
        <div class="image-container">
            <img src='Bilder/Klingnauer Stausee.jpg'> 
            <div class="klingnauertext">Klingnauer Stausee</div>
        </div>
    </div>

    <script>

        function loadHomePage() {
            window.location="index.php";
        }

        function openContactTab() {
            window.location="search.php";
        }

        function openAboutUs() {
            window.location="about.php";
        }
        function openplaces() {
            window.location="places.php"
        }
        function openplacesneracher() {
            window.location="/places/placesneracher.php"
        }

        function openFunFacts() {
            window.location="funfact.php"; 
        }
        function openplacesbaumwipfelpfad() {
            window.location="/places/baumwipfelpfad.php"
        }
        function openplacesvogelwarte() {
            window.location="/places/vogelwarte.php"
        }
        function openplacesbolledi() {
            window.location="/places/bolledimagadino.php"
        }
        function openplacesbachalpsee() {
            window.location="/places/bachalpsee.php"
        }
        function openplacesoeschinensee() {
            window.location="/places/oeschinensee.php"
        }
        function openplacesklingnauer() {
            window.location="/places/klingnauerstausee.php"
        }
        

    </script>
</body>

</html>
