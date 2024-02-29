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

        .menu-links {
            color: whitesmoke;
            text-decoration: none;
            margin-right: 20px; /* Adjust this value to increase or decrease the spacing */
        }

        a:hover {
            text-decoration: underline;
            color: aquamarine;
            margin: left
        }

        .menu {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            justify-content: right;
            align-items: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <div>
                <img class="image" src="website_logo.png">
            </div>

            <h1 class="headline">
                Zugvögel
            </h1>
        </div>


        <div class="menu">

            <a class="menu-links" href='index.php'> Home</a>
            <a class="menu-links" href=''> News </a>
            <a class="menu-links" href=''> Contact </a>
            <a class="menu-links" href=''> About </a>
        </div>

    </div>
</body>

</html>
