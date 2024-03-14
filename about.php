<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
  integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            color: black;
            font-size: 80px;
            font-weight: bold;
            align-items: center;
            margin-top: 10px;
            margin-left: 20px;

        }
        .titelbild{
          display: flex ;
          justify-content: center;
          padding: 20px;
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
        :root {
        --clr-primary: green;
        --clr-secondary: #274e13;
        --text-primary: black;
        --text-secondary: black;
        --bg-primary: #2b2b2b;
	    --bg-secondary: #6aa84f;
        }
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }
        * {
            margin: 0;
            font: inherit;
        }
        
        html {
            color-scheme: light;
        }
        body {
            font-family: system-ui, sans-serif;
            min-height: 100vh;
            
            color: var(--text-secondary);
        }
        ul:where([role="list"]) {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        section {
            padding-block: clamp(2rem, 5vw, 5rem);
        }
        a {
            color: cyan;
            text-decoration: none;
        }
        .container {
            width: min(100% - 2rem, 65rem);
            margin-inline: auto;
        }
        .grid {
            display: grid;
            gap: 1.5rem;
            grid-template-columns: 
            repeat(auto-fit, minmax(min(35ch, 100%), 1fr));
        }
        .section-title {
            font-size: clamp(2rem, 5vw, 3rem);
            text-align: center;
            font-weight: bold;
            color: var(--text-primary);
            margin-bottom: 0.5em;
        }
        .flex-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            align-items: center;
        }
        .flow-content {
            display: grid;
            align-content: start;
            gap: 1rem;
        }
        [data-spacing="sm"] {
            gap: 0.25rem;
        }
        
        .mx-auto {
            width: fit-content;
            margin-inline: auto;
        }
        .card {
            width: min(100% - 2rem, 35ch);
            margin-inline: auto;
            background-color: var(--bg-secondary);
            text-align: center;
            border-radius: 0.5rem;
            position: relative;
            overflow: hidden;
            display: grid;
            gap: 0.5rem;
        }
        
        .card__name {
            font-weight: 700;
            color: var(--text-primary);
        }
        
        .card__position {
            font-style: italic;
        }
        
        .card__img {
            width: 5rem;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid var(--text-secondary);
        }
        
        .card__front {
            padding: 2em 2em 2.5em 2em;
            transition: 
            opacity 250ms ease,
            transform 450ms ease;
        }
        
        .card[data-visible="false"] .card__front {
            opacity: 1;
            transform: translateY(0);
        }
        
        .card__footer {
            background-color: var(--bg-primary);
            height: 1.5rem;
            position: relative;
            z-index: 5;
        }
        
        .card__back {
            position: absolute;
            padding: 2em 2em 2.5em 2em;
            inset: 0;
            transition: 
            transform 450ms ease,
            opacity 150ms ease;
            z-index: 1;
            overflow: auto;
        }
        
        .card[data-visible="false"] .card__back {
            opacity: 0;
            transform: translateY(100%);
            overflow: hidden;
        }
        
        .card[data-visible="true"] .card__front {
            opacity: 0;
            transform: translateY(100%);
            transition: 
            opacity 150ms ease,
            transform 450ms ease 50ms;
            overflow: hidden;
        }
        
        .card[data-visible="true"] .card__back {
            opacity: 1;
            transform: translateY(0);
            transition: 
            transform 350ms ease,
            opacity 450ms ease 100ms;
            overflow: hidden;
        }
        
        .card__social {
            justify-content: center;
            margin-bottom: 2em;
        }
        
        .card__toggle {
            text-align: 1;
            border-radius: 50%;
            width: 3rem;
            aspect-ratio: 1 / 1;
            padding: 0.5em;
            border: 0;
            background-color: var(--clr-primary);
            color: var(--text-primary);
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            transition: background-color 250ms ease;
        }
        
        .card__toggle-icon {
            transition: rotate 250ms ease;
        }
        
        .card[data-visible="true"] .card__toggle {
            background-color: var(--clr-secondary);
            overflow: hidden;
        }
        
        .card[data-visible="true"] .card__toggle-icon {
            rotate: 315deg;
        }

    </style>
</head>
<title>Zugvögel</title>

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
    
    <section>
    <div class="container flow-content">
      <h2 class="section-title">Unser Team</h2>
      <ul role="list" class="grid">
        <li>
          <article class="card" data-visible="false">
            <div class="card__front flow-content">
              <img class="card__img mx-auto" src="Bilder/einen-vogel-haben-jpg--3115-.jpg" />
              <div class="flow-content" data-spacing="sm">
                <p class="card__name">Mischa Wisler</p>
                <p class="card__position">Bird Expert</p>
              </div>
            </div>
            <div class="card__back flow-content">
              <p class="card__name">Mischa Wisler</p>
              <q>Vögel sind meine Leidenschaft</q>
            </div>
            <footer class="card__footer">
              <button data-card-controller class="card__toggle">
                <i class="fa-solid fa-plus card__toggle-icon"></i>
              </button>
            </footer>
          </article>
        </li>
        <li>
          <article class="card" data-visible="false">
            <div class="card__front flow-content">
              <img class="card__img mx-auto" src="/Bilder/print-46534.jpg"/>
              <div class="flow-content" data-spacing="sm">
                <p class="card__name">Lukas Lisibach</p>
                <p class="card__position">Head of Board</p>
              </div>
            </div>
            <div class="card__back flow-content">
              <p class="card__name">Lukas Lisibach</p>
              <q>In meiner Freizeit sitze ich am liebsten auf meiner Terrasse und beobachte die Vögel in meinem Garten</q>
            </div>
            <footer class="card__footer">
              <button data-card-controller class="card__toggle">
                <i class="fa-solid fa-plus card__toggle-icon"></i>
              </button>
            </footer>
          </article>
        </li>
        <li>
          <article class="card" data-visible="false">
            <div class="card__front flow-content">
              <img class="card__img mx-auto" src="/Bilder/schuhschnabel-vogel-geolino2-jpg--80202-.jpg"/>
              <div class="flow-content" data-spacing="sm">
                <p class="card__name">Léon Blaha</p>
                <p class="card__position">Explorer</p>
              </div>
            </div>
            <div class="card__back flow-content">
              <p class="card__name">Léon Blaha</p>
              <q>Ich will auch so frei sein wie ein Vogel</q>
            </div>
            <footer class="card__footer">
              <button data-card-controller class="card__toggle">
                <i class="fa-solid fa-plus card__toggle-icon"></i>
              </button>
            </footer>
          </article>
        </li>   
      </ul>
    </div>
  </section>
  <script src="/js/main.js"></script>

    <script>

        function loadHomePage() {
            window.location="index.php";
        }

        function openContactTab() {
            window.location="contact.php";
        }

        function openPlaces() {
            window.location="places.php";
        }

        function openFunFacts() {
            window.location="funfact.php"; 
        }
    </script>
</body>