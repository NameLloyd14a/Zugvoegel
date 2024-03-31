<<!DOCTYPE html>
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
            width: 70%
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
        
        .titel{
            color:black;
            font-size: 60px;
            font-weight: bold;
            align-items: baseline;
            

        }
        
        
        .bildtext {
          
          font-size: medium;
          font-weight: 20px;
          margin-left: 10px;
          
        }
        .uberschrift{
          display: flex ;
          justify-content: left;

          font-size: 25px;
          font-weight: bold;
          margin-bottom: 30px;


        }
        .bild{
            width: 100%;
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
            margin-top: 20px;
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
        .img_neracher {
            position: relative;
            width: 100%;
            float: center;
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
    </style>
</head>
<title>Bird of the day</title>
<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "zugvoegel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$day_number = date("d");
$sql = "SELECT * FROM `vogel` WHERE vgl_id=$day_number;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // load data from database into variables
    while($row = $result->fetch_assoc()) {
      $name= $row["name"];
      $beschreibung = $row["beschreibung"];
      $bild = $row["bild"];
      $lateinname = $row["lateinname"];
      $lebenserwartung = $row["lebenserwartung"]; //in Jahren
      $gewicht = $row["gewicht"]; //gewicht in g
      $groesse = $row["groesse"]; //grösse in cm
      $mahlzeit = $row["mahlzeit"];
    }
  } else { //load the no data alerts if there is no data available
    echo '<script>alert("Could not load data from database")</script>';
    $name= "No data";
    $beschreibung = "Couldn't load description, please try again later";
    $bild = "https://assets-v2.lottiefiles.com/a/0e30b444-117c-11ee-9b0d-0fd3804d46cd/A6t16MXhTI.gif";
    $lateinname = "Nulla notitia";
    $lebenserwartung = "unbekannt";
    $gewicht = "unbekannt";
    $groesse = "unbekannt";
    $mahlzeit = "unbekannt";
  }
$conn->close();
?>
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
            <a class="menu-links" href="javascript:void(0);" onclick="openContactTab()">Contact</a>
            <a class="menu-links" href="#" onclick="openAboutUs()">About</a>
            <a class="menu-links" href="#" onclick="openFunFacts()">Fun Facts</a>
        </div>
    </div>
    <div class='img_neracher' onclick="openbtd()">
    <div class="image-container" onclick="openbtd()">
        <?php
            echo '<img src="'.$bild.'"alt="Hier sollte ein Bild sein">';
        ?>
        <div class="nerachertext" onclick="openbtd()">Bird of the day</div>
        
    
    </div>
    </div>

        
        
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

        function openPlaces() {
            window.location="places.php";
        }

        function openFunFacts() {
            window.location="funfact.php"; 
        }
        function openbtd() {
            window.location="btd.php";
        }
    </script>
</body>
</html>