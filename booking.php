<?php 

include_once("conection.php") ?>

<!DOCTYPE html>
<html>
<head>
    <title>SpaceX Flight Booking</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
</head>
<body>
<script>
    function showTransportation() {
        var locationDropdown = document.getElementById("location");
        var selectedLocation = locationDropdown.value;
        var transportationDropdown = document.getElementById("transportation");
        var transportationOptions = {
            "Amsterdam": ["VIP helicopter", "Tesla Model B boat"],
            "New York": ["VIP helicopter", "Tesla Model B boat"],
            "Sydney": ["VIP helicopter", "Model X"],
            "Tokyo": ["VIP helicopter", "Tesla Model B boat", "Model X"],
            "Dubai": ["VIP helicopter", "Model X"],
            "Singapore": ["VIP helicopter", "Tesla Model B boat"],
            "Hong Kong": ["VIP helicopter", "Tesla Model B boat"],
            "Los Angeles": ["VIP helicopter", "Tesla Model B boat"],
            "Rio de Janeiro": ["VIP helicopter", "Tesla Model B boat"],
            "Cape Town": ["VIP helicopter", "Tesla Model B boat"],
            "Barcelona": ["VIP helicopter", "Tesla Model B boat"],
            "Rome": ["VIP helicopter", "Tesla Model B boat"]
        };

        var options = transportationOptions[selectedLocation] || [];

        // Clear existing options
        while (transportationDropdown.firstChild) {
            transportationDropdown.removeChild(transportationDropdown.firstChild);
        }

        if (options.length > 0) {
            // Create and add new options
            for (var i = 0; i < options.length; i++) {
                var option = document.createElement("option");
                option.value = options[i];
                option.text = options[i];
                transportationDropdown.appendChild(option);
            }
        } else {
            var defaultOption = document.createElement("option");
            defaultOption.value = "";
            defaultOption.text = "No transportation options available";
            transportationDropdown.appendChild(defaultOption);
        }
    }
</script>
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
                <li class="hover-underline-animation"><a href="accomodation.php">Accommodation</a></li>
            </ul>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>
</header>


<section id="hero-section">
    <div class="hero-text">
        <h1>Book Your Space Flight Today</h1>
    </div>
</section>

<section id="flight-search">
    <h2>Search for Flights</h2>
    <form action="flight_search.php" method="post">
        <label for="location">Select your starport location:</label>
        <select name="current_location" id="current_location">
            <option value="">Select a destination</option>
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
        <label for="location">Select a destination:</label>
        <select name="location" id="location" onchange="showTransportation()">
            <option value="">Select a destination</option>
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

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>

        <label for="requirements">Possible travel methods:</label>
        <select name="requirements" id="transportation">
            <option value="">No transportation options available</option>
        </select>
</br>
<br>

        <input type="submit" value="Search">
    </form>
</section>





<footer>
    <p>&copy; 2023 SpaceX. All rights reserved.</p>
</footer>
</body>
</html>
