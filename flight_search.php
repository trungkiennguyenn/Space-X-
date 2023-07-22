<?php
include_once("conection.php");

$stmt = $pdo->prepare('SELECT * FROM available WHERE Date = :date AND Destination_city = :destination_city AND Depature_city = :depature_city');
$stmt->execute(['date' => $_POST['date'], 'destination_city' => $_POST['location'], 'depature_city' => $_POST['current_location']]);

if ($stmt->rowCount() === 0) {
    $message = "No flights available for the selected date and location.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/flight.css">
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

    <main>
         <?php if (isset($message)) : ?>
            <p><?= $message ?></p>
         <?php else : ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Departure City</th>
                <th>Departure Time</th>
                <th>Destination City</th>
                <th>Arrival Time</th>
            </tr>
             <?php foreach ($stmt as $flight) { ?>
                <tr>
                    <td><?= $flight['Flight'] ?></td>
                    <td><?= $flight['Date'] ?></td>
                    <td><?= $flight['Depature_city'] ?></td>
                    <td><?= $flight['Departure_time'] ?></td>
                    <td><?= $flight['Destination_city'] ?></td>
                    <td><?= $flight['Arivale_time'] ?></td>
                    <td>
                <button class="book-button">Book</button>
            </td>
                </tr>
             <?php } ?>
        </table>
         <?php endif; ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> SpaceX. All rights reserved.</p>
    </footer>

</body>

</html>
