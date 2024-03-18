<<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
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
        input {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
          border: solid #22c55e;
          border-radius: 4px;
        }
        
    </style>
</head>
<title>Zugvögel</title>
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
            <a class="menu-links" href="javascript:void(0);" onclick="openContactTab()">Suche</a>
            <a class="menu-links" href="#" onclick="openAboutUs()">About</a>
            <a class="menu-links" href="#" onclick="openFunFacts()">Fun Facts</a>
        </div>
    </div>
    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Vogel des Tages: <?php echo $name ?>
            </h1>
            <p class="mb-8 leading-relaxed"><?php echo $beschreibung ?></p>
            <div class="flex justify-center">
              <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg" onclick="openbtd()">Mehr Informationen</button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <?php echo '<img class="object-cover object-center rounded" alt="Bird of the day" src=" '.$bild.'">' ?>
          </div>
        </div>
      </section>
      <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Unsere Angebote</h1>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-green-500 text-white flex-shrink-0">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Datenbank</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Durchsuchen Sie unsere Datenbank nach einer Auswahl zahlreicher Vögel und erfahren Sie Spannendes und Nützliches für Ihr nächstes Beobachtungsabenteuer.</p>
                  <a class="mt-3 text-green-600 inline-flex items-center" onclick="openSearch()">Zur Suche
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-green-500 text-white flex-shrink-0">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Places</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Auf der Suche nach einem neuen Spotting-Standort? Werfen Sie einen Blick in unseren Katalog ausgewählter Orte und lassen Sie sich von der Schönheit der Schweiz überraschen.</p>
                  <a class="mt-3 text-green-600 inline-flex items-center" onclick="openPlaces()">Orte anschauen
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3">
              <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-green-500 text-white flex-shrink-0">
                  </div>
                  <h2 class="text-gray-900 text-lg title-font font-medium">Fun Facts</h2>
                </div>
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">Lust auf spannende Fakten über Vögel und Unterhaltung? Werfen Sie einen Blick in unseren Fun-Facts-Katalog und lassen Sie sich überraschen!</p>
                  <a class="mt-3 text-green-600 inline-flex items-center" onclick="openFunFacts()">Fun-Facts anschauen
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                      <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Newsletter</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">Erfahren sie regelmässig spannende Neuigkeiten über die Welt der Vögel auf unserem Newsletter.</p>
            <form action="newsletter.php" method="post">
              <input type="email" id="email" name="email" placeholder="Ihre E-mail Adresse">
            </form>
          </div>
        </div>
      </section>

      <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
          <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed text-lg">Liebe Vogelbegeisterte,<br><br>

            ich freue mich, euch auf unserer neuen Website begrüssen zu dürfen, die sich ganz der faszinierenden Welt der Vögel widmet. Als leidenschaftlicher Vogelbeobachter und Naturliebhaber habe ich diese Plattform ins Leben gerufen, um eine umfassende Datenbank von Vogelarten zu erstellen und gleichzeitig Vorschläge für die besten Beobachtungsorte anzubieten.<br><br>
            Die Idee entstand aus meiner eigenen Erfahrung, stundenlang durch Felder, Wälder und Parks gestreift zu sein, auf der Suche nach seltenen Vogelarten oder einfach nur, um die Schönheit der Natur zu geniessen. Dabei stiess ich oft auf Schwierigkeiten, Informationen über bestimmte Vogelarten zu finden oder herauszufinden, wo ich die besten Chancen hatte, sie zu entdecken.<br><br>
            Mit dieser Website möchte ich diese Hürden für alle Vogelbegeisterten beseitigen. Unsere umfangreiche Datenbank bietet detaillierte Informationen über verschiedene Vogelarten, ihre Merkmale, Verbreitungsgebiete und Verhaltensweisen. Darüber hinaus bieten wir Empfehlungen für die besten Spotting-Orte.<br><br>
            Mein Ziel ist es, anderen Vogelbegeisterten zu helfen, ihre Leidenschaft zu vertiefen, neue Arten zu entdecken und die Natur noch intensiver zu erleben. Ich hoffe, dass unsere Website euch dabei unterstützen wird, eure Vogelbeobachtungserlebnisse auf ein neues Level zu heben und die Schönheit und Vielfalt der Vogelwelt in vollen Zügen zu geniessen.<br><br>
            Herzlich willkommen auf unserer Plattform und viel Freude beim Vogelbeobachten!

            </p>
            <span class="inline-block h-1 w-10 rounded bg-green-500 mt-8 mb-6"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Lukas Lisibach</h2>
            <p class="text-gray-500">Founder</p>
          </div>
        </div>
      </section>

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

        function openPlaces() {
            window.location="places.php";
        }

        function openFunFacts() {
            window.location="funfact.php"; 
        }
        function openbtd() {
            window.location="btd.php";
        }
        function openSearch() {
            window.location="search.php";
        }
        
    </script>
</body>
</html>