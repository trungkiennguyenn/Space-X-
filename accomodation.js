function selectCity() {
    var cityDropdown = document.getElementById("city-dropdown");
    var selectedCity = cityDropdown.value;

    // Reset the accommodation list
    var accommodationList = document.querySelector(".accommodation-list");
    accommodationList.innerHTML = "";

    if (selectedCity) {
        var hotels = {
            "Amsterdam": "De L'Europe Amsterdam",
            "New York": "The Plaza",
            "Sydney": "Park Hyatt Sydney",
            "Tokyo": "The Ritz-Carlton, Tokyo",
            "Dubai": "Burj Al Arab Jumeirah",
            "Singapore": "Marina Bay Sands",
            "Hong Kong": "The Ritz-Carlton, Hong Kong",
            "Los Angeles": "The Beverly Hills Hotel",
            "Rio de Janeiro": "Belmond Copacabana Palace",
            "Cape Town": "One&Only Cape Town",
            "Barcelona": "Hotel Arts Barcelona",
            "Rome": "Hotel Hassler Roma"
        };

        var activities = {
            "Amsterdam": "Rondvaart door de grachten van Amsterdam",
            "New York": "Top of the Rock Observation Deck",
            "Sydney": "BridgeClimb Sydney",
            "Tokyo": "Bezoek de Meiji Shrine",
            "Dubai": "Dune bashing en woestijnsafari",
            "Singapore": "Gardens by the Bay",
            "Hong Kong": "Victoria Peak",
            "Los Angeles": "Rodeo Drive winkelen",
            "Rio de Janeiro": "Christus de Verlosser",
            "Cape Town": "Tafelberg",
            "Barcelona": "Sagrada Família",
            "Rome": "Colosseum"
        };

        // Create hotel element
        var hotelElement = document.createElement("li");
        hotelElement.textContent = "5-sterrenhotel: " + hotels[selectedCity];

        // Create activity element
        var activityElement = document.createElement("li");
        activityElement.textContent = "Activiteit: " + activities[selectedCity];

        // Append hotel and activity elements to the accommodation list
        accommodationList.appendChild(hotelElement);
        accommodationList.appendChild(activityElement);
    }
}
