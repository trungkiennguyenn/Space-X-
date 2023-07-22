<!DOCTYPE html>
<html>

<head>
    <title>SpaceX Research</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/reseasrch.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
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
    <section id="research-section">
        <div class="container">
            <h1>SpaceX</h1>
            <p>SpaceX, founded by Elon Musk in 2002, is a private aerospace manufacturer and space transportation company that has gained significant attention for its innovative approach to space exploration and travel.
                As a prospective customer interested in intercontinental rocket flights, visiting the SpaceX website can provide valuable information about their services.
            </p>

            <h1>Features and Benefits of Rocket Travel:</h1>
            <p>
                SpaceX has expressed its goal of revolutionizing long-distance travel by using rockets for intercontinental transportation.
                Rockets are capable of achieving extremely high speeds, potentially reducing travel times significantly compared to traditional modes of transportation like airplanes.
                However, specific travel times for intercontinental rocket flights offered by SpaceX would be best obtained from official sources such as the SpaceX website or by contacting SpaceX directly.
            </p>
            <p>
                One of the potential benefits of rocket travel, including intercontinental rocket flights, is the potential to reduce CO2 emissions compared to traditional air travel.
                Rockets generally produce less carbon dioxide per unit of distance traveled compared to conventional aircraft. This is primarily due to the higher efficiency and advanced propulsion systems utilized by rockets.
                However, specific data on CO2 emissions for SpaceX's intercontinental rocket flights would require accurate and up-to-date information from SpaceX's official sources.
            </p>

            <h1>Travel Times and CO2 Emissions:</h1>
            <p>
                SpaceX's intercontinental rocket travel aims to significantly reduce travel times compared to traditional modes of transportation.
                By leveraging the speed and efficiency of their advanced rockets, such as the Starship, SpaceX envisions dramatically faster journeys between distant locations on Earth.
                While specific travel times would depend on various factors like the destination and route, rocket travel has the potential to offer significantly reduced travel durations compared to conventional air travel.
            </p>
            <p>
                Rocket travel, including intercontinental rocket flights, can potentially contribute to lower CO2 emissions compared to traditional air travel.
                Rockets utilize advanced propulsion systems and innovative engineering techniques that aim to optimize fuel efficiency.
                This increased efficiency translates to reduced carbon emissions per unit of distance traveled. By choosing rocket travel,
                passengers have the potential to enjoy faster travel times while also reducing their carbon footprint,
                making it a more environmentally friendly option compared to traditional air travel.
            </p>

            <h1>Pricing Options:</h1>
            <p>
                Tiered Pricing: SpaceX may offer different tiers or classes of service with varying price points. These tiers could provide different levels of luxury, amenities, and seating options, allowing customers to choose the experience that suits their preferences and budget.

                Destination-Based Pricing: The pricing structure may also take into account the specific destination or route. Flights to different locations could have varying costs based on factors like distance, demand, and operational considerations.

                Package Deals: SpaceX might offer package deals or promotional offers for customers looking to book multiple trips or travel with a group. These packages could include discounted rates or bundled services to make intercontinental rocket travel more accessible and attractive to a wider range of customers.

                Customization Options: Depending on the customer's requirements, SpaceX may provide customization options that allow passengers to tailor their travel experience. These options could include add-ons or upgrades for personalized amenities, enhanced comfort, or exclusive services, which may have associated costs.
            </p>

            <h1>Luxurious Amenities:</h1>
            <p>
                Spacious and Comfortable Seating: Passengers may enjoy spacious seating arrangements designed for maximum comfort during the journey. The seats could be ergonomically designed, offering ample legroom and adjustable features to cater to individual preferences.

                In-flight Entertainment: SpaceX may provide cutting-edge entertainment systems to keep passengers engaged and entertained during the flight. This could include high-definition screens with a wide selection of movies, TV shows, music, and even live streaming of events.

                Onboard Dining: SpaceX may offer gourmet dining experiences onboard, providing passengers with a range of exquisite meals prepared by professional chefs. The menu could include a variety of culinary options, including both local and international cuisine, to cater to different tastes and dietary preferences.

                Relaxation Areas: SpaceX might incorporate dedicated relaxation areas where passengers can unwind, socialize, or enjoy panoramic views of the Earth from space. These areas could feature comfortable seating, relaxation pods, or even designated wellness spaces for activities like yoga or meditation.

                Wi-Fi and Connectivity: To ensure a connected experience, SpaceX could provide onboard Wi-Fi and connectivity options, allowing passengers to stay connected with their devices, access the internet, or communicate with their loved ones during the journey.

                Personalized Services: SpaceX may offer personalized services and attention to detail, ensuring that passengers' individual needs and preferences are met. This could include personalized concierge services, dedicated flight attendants, and tailored assistance throughout the journey.
            </p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 SpaceX. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const mobileMenu = document.querySelector('.mobile-menu');
        const menu = document.querySelector('.menu');

        mobileMenu.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>

</body>

</html>

document.addEventListener("DOMContentLoaded", function () {
    const mobileMenu = document.querySelector(".mobile-menu");
    const navMenu = document.querySelector("nav ul");

    mobileMenu.addEventListener("click", function () {
        this.classList.toggle("active");
        navMenu.classList.toggle("active");
    });
});
