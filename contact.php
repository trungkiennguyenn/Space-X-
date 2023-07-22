<!DOCTYPE html>
<html>
<head>
    <title>SpaceX Contact</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <style>
        /* CSS code here */
    </style>
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
    
    

    <section id="contact-form">
        <section id="hero-section">
        <div class="hero-text">
            <h1>Contact SpaceX</h1>
            <p>Get in touch with us for any inquiries</p>
        </div>
    </section>
        <h2>Contact Us</h2>
        <form action="submit.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            
            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>
            
            <input type="submit" value="Submit">
        </form>
    </section>

    <footer>
        <p>&copy; 2023 SpaceX. All rights reserved.</p>
    </footer>
</body>
</html>
