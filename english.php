<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grains Information</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        /* Container styling */
        .grain-container {
            position: relative;
            margin-bottom: 40px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        /* Speaker icon styling */
        .speaker-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            font-size: 30px;
            color: #007bff;
            transition: color 0.3s;
        }

        .speaker-icon:hover {
            color: #0056b3;
        }

        /* Image styling */
        .grain-container img {
            width: 100%;
            height: 600px;
            border-radius: 8px;
        }

        /* Translate button styling */
        .translate-button {
            text-align: center;
            margin-top: 30px;
        }

        .translate-button button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: green;
        }

        .translate-button button a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Rice Section -->
    <div class="container grain-container">
        <h1 class="text-center">RICE</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/rice.webp" alt="Rice Image">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Rice, Oryza sativa, is an edible starchy cereal grain and the grass plant by which it is produced. Roughly one-half of the world population, including virtually all of East and Southeast Asia, is wholly dependent upon rice as a staple food; 95 percent of the world’s rice crop is eaten by humans. Rice is cooked by boiling, or it can be ground into a flour. It is eaten alone and in a great variety of soups, side dishes, and main dishes in Asian, Middle Eastern, and many other cuisines. Other products in which rice is used are breakfast cereals, noodles, and such alcoholic beverages as Japanese sake.');" 
               aria-label="Toggle speech for Rice section"></i>
        </div>
        <p>Rice, (Oryza sativa), edible starchy cereal grain and the grass plant (family Poaceae) by which it is produced. Roughly one-half of the world population, including virtually all of East and Southeast Asia, is wholly dependent upon rice as a staple food; 95 percent of the world’s rice crop is eaten by humans. Rice is cooked by boiling, or it can be ground into a flour. It is eaten alone and in a great variety of soups, side dishes, and main dishes in Asian, Middle Eastern, and many other cuisines. Other products in which rice is used are breakfast cereals, noodles, and such alcoholic beverages as Japanese sake.</p>
    </div>

    <!-- Wheat Section -->
    <div class="container grain-container">
        <h1 class="text-center">WHEAT</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/wheat.jpg" alt="Wheat Image">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Wheat is the main cereal crop in India. The total area under the crop is about 29.8 million hectares in the country. The production of wheat in the country has increased significantly from 75.81 million MT in 2006-07 to an all-time record high of 94.88 million MT in 2011-12. The productivity of wheat which was 2602 kg/hectare in 2004-05 has increased to 3140 kg/hectare in 2011-12. The major increase in the productivity of wheat has been observed in the states of Haryana, Punjab and Uttar Pradesh. Higher area coverage is reported from MP in recent years. Indian wheat is largely a soft/medium hard, medium protein, white bread wheat, somewhat similar to U.S. hard white wheat. Wheat grown in central and western India is typically hard, with high protein and high gluten content. India also produces around 1.0-1.2 million tons of durum wheat, mostly in the state of Madhya Pradesh. Most Indian durum is not marketed separately due to segregation problems in the market yards. However, some quantities are purchased by the private trade at a price premium, mainly for processing of higher value/branded products.');" 
               aria-label="Toggle speech for Wheat section"></i>
        </div>
        <p>Wheat is the main cereal crop in India. The total area under the crop is about 29.8 million hectares in the country. The production of wheat in the country has increased significantly from 75.81 million MT in 2006-07 to an all-time record high of 94.88 million MT in 2011-12. The productivity of wheat which was 2602 kg/hectare in 2004-05 has increased to 3140 kg/hectare in 2011-12. The major increase in the productivity of wheat has been observed in the states of Haryana, Punjab and Uttar Pradesh. Higher area coverage is reported from MP in recent years.Indian wheat is largely a soft/medium hard, medium protein, white bread wheat, somewhat similar to U.S. hard white wheat. Wheat grown in central and western India is typically hard, with high protein and high gluten content. India also produces around 1.0-1.2 million tons of durum wheat, mostly in the state of Madhya Pradesh. Most Indian durum is not marketed separately due to segregation problems in the market yards. However, some quantities are purchased by the private trade at a price premium, mainly for processing of higher value/branded products.</p>
    </div>

    <!-- Barley Section -->
    <div class="container grain-container">
        <h1 class="text-center">BARLEY</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/barley.jpg" alt="Barley Image" width="100%" height="auto">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Barley, Hordeum vulgare, is a cereal plant of the grass family Poaceae and its edible grain. Grown in a variety of environments, barley is the fourth largest grain crop globally, after wheat, rice, and corn. Barley is commonly used in breads, soups, stews, and health products, though it is primarily grown as animal fodder and as a source of malt for alcoholic beverages, especially beer. Hordeum vulgare is an annual grass featuring erect stems with few, alternate leaves. Barley comes in two varieties, distinguished by the number of rows of flowers on its flower spike. Six-row barley has its spike notched on opposite sides, with three spikelets at each notch, each containing a small individual flower, or floret, that develops a kernel. Two-row barley has central florets that produce kernels and lateral florets that are normally sterile. Whereas six-row barley has a higher protein content and is more suited for animal feed, two-row barley has a higher sugar content and is thus more commonly used for malt production.');" 
               aria-label="Toggle speech for Barley section"></i>
        </div>
        <p>Barley, (Hordeum vulgare), cereal plant of the grass family Poaceae and its edible grain. Grown in a variety of environments, barley is the fourth largest grain crop globally, after wheat, rice, and corn. Barley is commonly used in breads, soups, stews, and health products, though it is primarily grown as animal fodder and as a source of malt for alcoholic beverages, especially beer.</p>
        <p>Hordeum vulgare is an annual grass featuring erect stems with few, alternate leaves. Barley comes in two varieties, distinguished by the number of rows of flowers on its flower spike. Six-row barley has its spike notched on opposite sides, with three spikelets at each notch, each containing a small individual flower, or floret, that develops a kernel. Two-row barley has central florets that produce kernels and lateral florets that are normally sterile. Whereas six-row barley has a higher protein content and is more suited for animal feed, two-row barley has a higher sugar content and is thus more commonly used for malt production.</p>
    </div>

    <!-- Translate to Hindi Button -->
    <div class="translate-button">
        <button>
            <a href="hindi.php">TRANSLATE TO HINDI</a>
        </button>
    </div>

    <!-- Bootstrap JS (Optional for additional features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Variables to keep track of the current speech and icon
        let currentSpeech = null;
        let currentIcon = null;

        /**
         * Toggles speech for the given text and icon.
         * @param {HTMLElement} iconElement - The speaker icon element that was clicked.
         * @param {string} text - The text to be spoken.
         */
        function toggleSpeak(iconElement, text) {
            // If speech is currently active
            if (currentSpeech && window.speechSynthesis.speaking) {
                // If the clicked icon is the same as the current one, stop speaking
                if (currentIcon === iconElement) {
                    window.speechSynthesis.cancel();
                    resetIcon(currentIcon);
                    currentSpeech = null;
                    currentIcon = null;
                    return;
                } else {
                    // If a different icon is clicked, stop the current speech and reset the previous icon
                    window.speechSynthesis.cancel();
                    resetIcon(currentIcon);
                }
            }

            // Create a new SpeechSynthesisUtterance instance with the provided text
            const speech = new SpeechSynthesisUtterance(text);
            speech.lang = 'en-US'; // Set language to US English

            // Start speaking
            window.speechSynthesis.speak(speech);

            // Update the current speech and icon
            currentSpeech = speech;
            currentIcon = iconElement;

            // Change the icon to a stop icon
            iconElement.classList.remove('bi-volume-up-fill');
            iconElement.classList.add('bi-x-circle-fill');

            // When speech ends naturally, reset the icon and clear the current speech and icon
            speech.onend = function() {
                resetIcon(iconElement);
                currentSpeech = null;
                currentIcon = null;
            };

            // Handle speech errors by resetting the icon and clearing the current speech and icon
            speech.onerror = function() {
                resetIcon(iconElement);
                currentSpeech = null;
                currentIcon = null;
            };
        }

        /**
         * Resets the speaker icon to its default state.
         * @param {HTMLElement} iconElement - The speaker icon element to reset.
         */
        function resetIcon(iconElement) {
            if (iconElement) {
                iconElement.classList.remove('bi-x-circle-fill');
                iconElement.classList.add('bi-volume-up-fill');
            }
        }

        /**
         * Optional: Handle the case when the user closes the browser or navigates away while speech is active.
         */
        window.onbeforeunload = function() {
            if (window.speechSynthesis.speaking) {
                window.speechSynthesis.cancel();
            }
        };
    </script>

</body>
</html>
