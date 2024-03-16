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
            <a class="menu-links" href="javascript:void(0);" onclick="openContactTab()">Contact</a>
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
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Write your title here</h2>
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
                  <a class="mt-3 text-indigo-500 inline-flex items-center" onclick="openSearch()">Zur Suche
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
                  <a class="mt-3 text-indigo-500 inline-flex items-center" onclick="openPlaces()">Orte anschauen
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
                  <a class="mt-3 text-indigo-500 inline-flex items-center" onclick="openFunFacts()">Fun-Facts anschauen
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
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Title</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/3 md:w-1/2 p-4">
              <div class="border border-gray-300 p-6 rounded-lg">
                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Title</h2>
                <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
              <div class="border border-gray-300 p-6 rounded-lg">
                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                  </svg>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Title</h2>
                <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
              <div class="border border-gray-300 p-6 rounded-lg">
                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Title</h2>
                <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
              <div class="border border-gray-300 p-6 rounded-lg">
                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                  </svg>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Title</h2>
                <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
              <div class="border border-gray-300 p-6 rounded-lg">
                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                  </svg>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Title</h2>
                <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum</p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
              <div class="border border-gray-300 p-6 rounded-lg">
                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  </svg>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Title</h2>
                <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum</p>
              </div>
            </div>
          </div>
          <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        </div>
      </section>
      <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Team</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum. Suspendisse potenti. Vestibulum a sem ac eros egestas lacinia sed sit amet erat</p>
          </div>
          <div class="flex flex-wrap -m-2">
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">UI Designer</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">CTO</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">Founder</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">DevOps</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">Software Engineer</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">UX Researcher</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">QA Engineer</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">System</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium">Member</h2>
                  <p class="text-gray-500">Product Manager</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
          <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eleifend ultricies bibendum. Suspendisse potenti. Vestibulum a sem ac eros egestas lacinia sed sit amet erat. Mauris euismod vehicula eros, ac consectetur turpis accumsan ac. Vivamus vel vestibulum purus. Donec consectetur consequat hendrerit. Mauris ac venenatis arcu. Proin tortor urna, accumsan et nisi et, egestas rhoncus nisi. Curabitur at est consectetur, fermentum tortor ac, dapibus erat. Morbi facilisis ullamcorper elit at accumsan. Aenean et tellus et tortor fermentum pulvinar.

            </p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Author</h2>
            <p class="text-gray-500">Position</p>
          </div>
        </div>
      </section>



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
        function openSearch() {
            window.location="search.php";
        }
    </script>
</body>
</html>