<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/acco.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
</head>
<body>
<header>
    <div class="container">
        <nav>
            <div class="logo">
                <a href="#">SpaceX</a>
            </div>
            <ul class="menu">
                <li class="hover-underline-animation"><a href="index.php">Home</a></li>
                <li class="hover-underline-animation"><a href="about.php">About</a></li>
                <li class="hover-underline-animation"><a href="booking.php">Flights</a></li>
                <li class="hover-underline-animation"><a href="contact.php">Contact</a></li>
                <li class="hover-underline-animation"><a href="accomodation.php">Accomodation</a></li>
            </ul>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>
</header>

<section id="hotelfoto">
    <div class="container">
        <!-- Voeg hier de inhoud van de foto-sectie toe -->
    </div>
</section>

<section id="city-selection">
    <div class="container">
        <h2>Choose a city</h2>
        <select id="city-dropdown" onchange="selectCity()">
            <option value="">Select a city</option>
            <option value="Amsterdam">Amsterdam</option>
            <option value="New York">New York</option>
            <option value="Sydney">Sydney</option>
            <option value="Tokyo">Tokyo</option>
            <option value="Dubai">Dubai</option>
            <option value="Singapore">Singapore</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Los Angeles">Los Angeles</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Cape Town">Cape Town</option>
            <option value="Barcelona">Barcelona</option>
            <option value="Rome">Rome</option>
        </select>
    </div>
</section>

<section id="accommodations">
    <div class="container">
        <h2>Accommodations</h2>
        <div class="text-center">
            <ul class="accommodation-list">
                <li id="hotel-info"></li>
                <li id="activity-info"></li>
            </ul>
        </div>
    </div>
</section>
<br>
<br>
<br>

<footer>
    <div class="container">
        <p>© 2023 SpaceX. All rights reserved.</p>
    </div>
</footer>

<script src="accomodation.js"></script>
</body>
</html>