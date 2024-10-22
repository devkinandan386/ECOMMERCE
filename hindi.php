<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRI--CURE हिंदी</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        /* Global Styles */
        body {
            background-color: #eef2f3;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        /* Container Styling */
        .grain-container {
            position: relative;
            margin-bottom: 60px;
            padding: 30px;
            border-radius: 15px;
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
        }

        /* Fade-in Animation */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Speaker Icon Styling */
        .speaker-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            font-size: 35px;
            color: #007bff;
            transition: color 0.3s, transform 0.3s;
        }

        .speaker-icon:hover {
            color: #0056b3;
            transform: scale(1.2);
        }

        .speaker-icon.playing {
            color: #dc3545;
            transform: rotate(180deg);
            animation: rotateIcon 0.6s infinite;
        }

        @keyframes rotateIcon {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Image Styling */
        .grain-container img {
            width: 100%;
            height: 600px;
            border-radius: 10px;
            transition: transform 0.5s;
        }

        .grain-container img:hover {
            transform: scale(1.05);
        }

        /* Translate Button Styling */
        .translate-button {
            text-align: center;
            margin-top: 40px;
        }

        .translate-button button {
            padding: 12px 30px;
            font-size: 18px;
            border: none;
            border-radius: 25px;
            background-color: #28a745;
            color: white;
            transition: background-color 0.3s, transform 0.3s;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .translate-button button:hover {
            background-color: #218838;
            transform: translateY(-3px);
        }

        .translate-button button a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        /* Responsive Styling for Smaller Screens */
        @media (max-width: 768px) {
            .speaker-icon {
                font-size: 28px;
                top: 15px;
                right: 15px;
            }

            .translate-button button {
                font-size: 16px;
                padding: 10px 25px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="bg-primary text-white text-center py-4 mb-5">
        <h1>AGRI--CURE</h1>
        <p>कृषि की विश्वसनीय जानकारी</p>
    </header>

    <!-- RICE Section -->
    <div class="container grain-container">
        <h2 class="text-center mb-4">चावल</h2>
        <div class="image-container" style="position:relative;">
            <img src="images/rice.webp" alt="चावल छवि" class="img-fluid mb-3">
            <!-- Speaker Icon -->
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this)" 
               aria-label="चावल अनुभाग के लिए ऑडियो चलाएं"></i>
            <!-- Audio Element -->
            <audio id="riceAudio" src="audio/rice.mp3"></audio>
        </div>
        <p>
            चावल, (ओरिजा सैटिवा), खाद्य स्टार्चयुक्त अनाज के दाने और घास का पौधा (पारिवारिक पोएसी) जिसके द्वारा इसका उत्पादन किया जाता है। लगभग पूरे पूर्व और दक्षिण पूर्व एशिया सहित दुनिया की आबादी का आधा हिस्सा मुख्य भोजन के रूप में चावल पर पूरी तरह से निर्भर है; विश्व की धान की फसल का 95 प्रतिशत मानव द्वारा खाया जाता है। चावल को उबाल कर पकाया जाता है, या इसे आटे में भी डाला जा सकता है। यह अकेले और एशियाई, मध्य पूर्वी और कई अन्य व्यंजनों में कई प्रकार के सूप, साइड डिश और मुख्य व्यंजन में खाया जाता है। अन्य उत्पाद जिनमें चावल का उपयोग किया जाता है, वे हैं नाश्ते के अनाज, नूडल्स और ऐसे मादक पेय जैसे जापानी खातिर।
        </p>
    </div>

    <!-- WHEAT Section -->
    <div class="container grain-container">
        <h2 class="text-center mb-4">गेहूं</h2>
        <div class="image-container" style="position:relative;">
            <img src="images/wheat.jpg" alt="गेहूं छवि" class="img-fluid mb-3">
            <!-- Speaker Icon -->
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this)" 
               aria-label="गेहूं अनुभाग के लिए ऑडियो चलाएं"></i>
            <!-- Audio Element -->
            <audio id="wheatAudio" src="audio/wheat.mp3"></audio>
        </div>
        <p>
            भारत में गेहूं मुख्य अनाज की फसल है। देश में फसल के तहत कुल क्षेत्रफल लगभग 29.8 मिलियन हेक्टेयर है। देश में गेहूं का उत्पादन 2006-07 में 75.81 मिलियन मीट्रिक टन से बढ़कर 2011-12 में 94.88 मिलियन मीट्रिक टन के सर्वकालिक रिकॉर्ड उच्च स्तर पर पहुंच गया है। गेहूं की उत्पादकता जो 2004-05 में 2602 किग्रा/हेक्टेयर थी, 2011-12 में बढ़कर 3140 किग्रा/हेक्टेयर हो गई है। गेहूं की उत्पादकता में प्रमुख वृद्धि हरियाणा, पंजाब और उत्तर प्रदेश राज्यों में देखी गई है। हाल के वर्षों में एमपी से उच्च क्षेत्र कवरेज की सूचना मिली है। भारतीय गेहूं मोटे तौर पर एक नरम / मध्यम कठोर, मध्यम प्रोटीन, सफेद ब्रेड गेहूं है, जो कुछ हद तक यू.एस. कठोर सफेद गेहूं के समान है। उच्च प्रोटीन और उच्च ग्लूटेन सामग्री के साथ, मध्य और पश्चिमी भारत में उगाया जाने वाला गेहूं आमतौर पर कठोर होता है। भारत भी लगभग 1.0-1.2 मिलियन टन ड्यूरम गेहूं का उत्पादन करता है, जो ज्यादातर मध्य प्रदेश राज्य में होता है। मार्केट यार्ड में अलगाव की समस्या के कारण अधिकांश भारतीय ड्यूरम की अलग से मार्केटिंग नहीं की जाती है। हालाँकि, कुछ मात्राएँ निजी व्यापार द्वारा मूल्य प्रीमियम पर खरीदी जाती हैं, मुख्य रूप से उच्च मूल्य/ब्रांडेड उत्पादों के प्रसंस्करण के लिए।
        </p>
    </div>

    <!-- BARLEY Section -->
    <div class="container grain-container">
        <h2 class="text-center mb-4">जौ</h2>
        <div class="image-container" style="position:relative;">
            <img src="images/barley.jpg" alt="जौ छवि" class="img-fluid mb-3">
            <!-- Speaker Icon -->
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this)" 
               aria-label="जौ अनुभाग के लिए ऑडियो चलाएं"></i>
            <!-- Audio Element -->
            <audio id="barleyAudio" src="audio/barley.mp3"></audio>
        </div>
        <p>
            जौ, होर्डियम वल्गारे, घास परिवार पोएसी का अनाज का पौधा और इसका खाद्य अनाज। विभिन्न प्रकार के वातावरण में उगाई जाने वाली जौ, गेहूं, चावल और मकई के बाद विश्व स्तर पर चौथी सबसे बड़ी अनाज की फसल है। जौ का उपयोग आमतौर पर ब्रेड, सूप, स्टॉज और स्वास्थ्य उत्पादों में किया जाता है, हालांकि यह मुख्य रूप से पशु चारे के रूप में और मादक पेय पदार्थों, विशेष रूप से बीयर के लिए माल्ट के स्रोत के रूप में उगाया जाता है। होर्डियम वल्गारे एक वार्षिक घास है जिसमें कुछ, वैकल्पिक पत्तियों के साथ सीधा तना होता है। जौ दो किस्मों में आता है, जो फूलों की स्पाइक पर फूलों की पंक्तियों की संख्या से अलग है। छह-पंक्ति वाली जौ की नोक विपरीत दिशाओं में नोकदार होती है, प्रत्येक पायदान पर तीन स्पाइकलेट होते हैं, जिनमें से प्रत्येक में एक छोटा व्यक्तिगत फूल या फ्लोरेट होता है, जो एक कर्नेल विकसित करता है। दो-पंक्ति जौ में केंद्रीय पुष्पक होते हैं जो गुठली और पार्श्व पुष्पक उत्पन्न करते हैं जो सामान्य रूप से बाँझ होते हैं। जबकि छह-पंक्ति वाली जौ में प्रोटीन की मात्रा अधिक होती है और यह पशु आहार के लिए अधिक अनुकूल होती है, दो-पंक्ति वाली जौ में चीनी की मात्रा अधिक होती है और इस प्रकार इसका उपयोग माल्ट उत्पादन के लिए अधिक किया जाता है।
        </p>
    </div>

    <!-- Translate to English Button -->
    <div class="translate-button">
        <button>
            <a href="english.php">TRANSLATE TO ENGLISH</a>
        </button>
    </div>

    <!-- JavaScript Section -->
    <script>
        // Variables to keep track of the current audio and icon
        let currentAudio = null;
        let currentIcon = null;

        /**
         * Toggles play/pause for the given audio and updates the speaker icon.
         * @param {HTMLElement} iconElement - The speaker icon element that was clicked.
         */
        function toggleSpeak(iconElement) {
            // Check if the browser supports the Audio API
            if (!('Audio' in window)) {
                alert('क्षमा करें, आपका ब्राउज़र ऑडियो प्लेबैक का समर्थन नहीं करता है।');
                return;
            }

            // If an audio is currently playing
            if (currentAudio && !currentAudio.paused) {
                // If the clicked icon is the same as the current one, pause the audio
                if (currentIcon === iconElement) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0; // Reset to start
                    resetIcon(currentIcon);
                    currentAudio = null;
                    currentIcon = null;
                    return;
                } else {
                    // If a different icon is clicked, pause the current audio and reset the icon
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                    resetIcon(currentIcon);
                }
            }

            // Find the parent container (.grain-container)
            const grainContainer = iconElement.closest('.grain-container');

            if (!grainContainer) {
                console.error('Speaker icon is not inside a .grain-container');
                return;
            }

            // Find the audio element inside the container
            const audioElement = grainContainer.querySelector('audio');

            if (!audioElement) {
                console.error('No audio element found inside the .grain-container');
                return;
            }

            // Play the audio
            audioElement.play();

            // Update the current audio and icon
            currentAudio = audioElement;
            currentIcon = iconElement;

            // Change the icon to a stop icon and add animation class
            iconElement.classList.remove('bi-volume-up-fill');
            iconElement.classList.add('bi-x-circle-fill', 'playing');

            // When audio ends naturally, reset the icon and clear the current audio and icon
            audioElement.onended = function() {
                resetIcon(iconElement);
                currentAudio = null;
                currentIcon = null;
            };

            // Handle audio errors by resetting the icon and clearing the current audio and icon
            audioElement.onerror = function() {
                resetIcon(iconElement);
                currentAudio = null;
                currentIcon = null;
            };
        }

        /**
         * Resets the speaker icon to its default state.
         * @param {HTMLElement} iconElement - The speaker icon element to reset.
         */
        function resetIcon(iconElement) {
            if (iconElement) {
                iconElement.classList.remove('bi-x-circle-fill', 'playing');
                iconElement.classList.add('bi-volume-up-fill');
            }
        }

        /**
         * Handle the case when the user closes the browser or navigates away while audio is active.
         */
        window.onbeforeunload = function() {
            if (currentAudio && !currentAudio.paused) {
                currentAudio.pause();
                currentAudio.currentTime = 0;
            }
        };
    </script>

    <!-- Bootstrap JS (Optional for additional features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
