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

        .titelbild {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .img_neracher {
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
        }


        .img_OeschineseeRundweg {
            width: 60%;
            float: left;
            overflow: hidden;
        }

        .img_Klingnauer_Stausee {
            width: 30%;
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

        .nerachercontent{
            width:100%;
            height:100%;
            top:0;
            left:0;
            position:absolute;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            opacity:0;
            transition:0.6s;
        }
        .nerachercontent{
            opacity:1;
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


    <div class='img_neracher' onclick='openplacesneracher()'>
        <img src='birdlife-naturzentrum-neeracherried-ausflugsziel-buehnenbild1.jpg'> 
        <div class='nerachercontent'>
            <h1> Neeracheried</h1>
    </div>


    <div class='img_Baumwipfelpfad'>
        <img src='Baumwipfelpfad.jpg'> 
    </div>

    <div class='img_Vogelwarte_sempach_jpg'>
        <img src='Vogelwarte_Sempach.jpg'> 
    </div>
    <div class='img_LeBollediMagadino'>
        <img src='Le Bolle di Magadino.jpg'> 
    </div>
    <div class='img_Bachalpsee'>
        <img src='Bachalpsee.jpg'> 
    </div>
    <div class='img_OeschineseeRundweg'>
        <img src='Oeschinensee Rundweg.jpg'> 
    </div>
    <div class='img_Klingnauer_Stausee'>
        <img src='Klingnauer Stausee.jpg'> 
    </div>

    <script>

        function loadHomePage() {
            window.location="index.php";
        }

        function openContactTab() {
            window.location="contact.php";
        }

        function openAboutUs() {
            window.location="about.php";
        }
        function openplaces() {
            window.location="places.php"
        }
        function openplacesneracher() {
            window.location="placesneracher.php"
        }

        function openFunFacts() {
            window.location="funfact.php"; 
        }

         // Remove the call to openPlaces() to avoid automatic redirection

    </script>
</body>

</html>
