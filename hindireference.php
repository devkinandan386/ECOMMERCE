<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>अनुसंधान संदर्भ - AGRI-CURE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* सामान्य शैलियाँ */
        body {
            background-color: #f9fcff;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        /* नेवबार */
        .navbar {
            background: #006400;
            padding: 15px 0;
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
            color: #e7ffe7;
        }

        .navbar-nav .nav-link {
            color: #e7ffe7 !important;
            font-weight: 500;
            transition: color 0.2s;
        }

        .navbar-nav .nav-link:hover {
            color: #90EE90 !important;
        }

        /* हीरो अनुभाग */
        .hero {
            background: url('https://source.unsplash.com/1600x800/?farm,agriculture') center/cover no-repeat;
            color: #fff;
            text-align: center;
            padding: 120px 20px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
            margin: 0;
        }

        .hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin-bottom: 20px;
        }

        /* बारे में अनुभाग */
        .about-section {
            background-color: #f3f8fb;
            padding: 60px 20px;
            text-align: center;
        }

        .about-section h2 {
            color: #006400;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        /* शोधकर्ता अनुभाग */
        .researcher-section {
            background-color: #e9f5e9;
            padding: 60px 20px;
        }

        .researcher-card {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
            background: #ffffff;
        }

        .researcher-card:hover {
            transform: translateY(-8px);
        }

        .researcher-image {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .researcher-card h5 {
            color: #006400;
            margin-top: 10px;
            font-size: 1.6rem;
        }

        /* शोध पत्र अनुभाग */
        .research-paper-section {
            background-color: #ffffff;
            padding: 60px 20px;
            text-align: center;
        }

        .research-paper-section h2 {
            color: #006400;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .research-paper-list {
            list-style: none;
            padding: 0;
            max-width: 700px;
            margin: 0 auto;
        }

        .research-paper-item {
            padding: 15px;
            background: #f7f7f7;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .research-paper-item:hover {
            background: #eef2f5;
        }

        .research-paper-item a {
            color: #006400;
            text-decoration: none;
            font-weight: bold;
        }

        /* सामान्य प्रश्न अनुभाग */
        .faq-section {
            background-color: #e8f4e8;
            padding: 60px 20px;
        }

        .faq-section h2 {
            color: #006400;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .faq {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .faq h5 {
            color: #006400;
            font-weight: 500;
        }

        /* संपर्क अनुभाग */
        .contact-section {
            background-color: #f3f8fb;
            padding: 60px 20px;
            text-align: center;
        }

        .contact-section h2 {
            color: #006400;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        /* फुटर */
        .footer {
            background: #006400;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* एनीमेशन */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.6s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        #agricultural-research {
            background-color: #f9f9f9; /* हल्का पृष्ठभूमि के लिए */
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }

        #agricultural-research h2 {
            color: #2c3e50; /* शीर्षकों के लिए गहरा रंग */
        }

        #agricultural-research ul {
            list-style-type: none; /* बुलेट पॉइंट हटाएं */
            padding-left: 0;
        }

        #agricultural-research li {
            margin-bottom: 15px; /* सूची आइटम के बीच का स्थान */
        }

        #agricultural-research a {
            color: #2980b9; /* लिंक के लिए रंग */
            text-decoration: none; /* अंडरलाइन हटाएं */
        }

        #agricultural-research a:hover {
            text-decoration: underline; /* होवर पर अंडरलाइन */
        }
    </style>
</head>

<body>

    <!-- नेवबार -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">AGRI-CURE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="नेविगेशन टॉगल करें">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">बारे में</a></li>
                    <li class="nav-item"><a class="nav-link" href="#researchers">शोधकर्ता</a></li>
                    <li class="nav-item"><a class="nav-link" href="#research-papers">शोध पत्र</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">सामान्य प्रश्न</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">संपर्क</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- हीरो अनुभाग -->
    <section style="background-image: url('https://source.unsplash.com/1600x900/?agriculture,sustainable-farming'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center; color: white; text-align: center; position: relative; padding: 20px;">
        <header style="background: rgba(0, 0, 0, 0.7); padding: 50px; border-radius: 15px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);">
            <h1 style="font-size: 4rem; margin: 0; font-weight: bold;">AGRI-CURE अनुसंधान केंद्र में आपका स्वागत है</h1>
            <p style="font-size: 1.6rem; margin: 20px 0;">सतत खेती के लिए नवीनतम कृषि अनुसंधान, विशेषज्ञ सलाह और अभिनव समाधान का अन्वेषण करें।</p>
            <div style="margin-top: 40px;">
                <h3 style="font-size: 1.5rem;">विशेष शोध क्षेत्र:</h3>
                <ul style="list-style-type: none; padding-left: 0;">
                    <li style="font-size: 1.2rem;">पारिस्थितिकी और स्थायी कृषि</li>
                    <li style="font-size: 1.2rem;">जल प्रबंधन</li>
                    <li style="font-size: 1.2rem;">पौधों की किस्म और आनुवंशिकी</li>
                    <li style="font-size: 1.2rem;">कीट प्रबंधन और नियंत्रण</li>
                </ul>
            </div>
        </header>
    </section>

    <!-- बारे में अनुभाग -->
    <section class="about-section fade-in" id="about">
        <h2>AGRI-CURE के बारे में</h2>
        <p>AGRI-CURE, कृषि अनुसंधान और विकास का एक केंद्र है, जो हमारे किसानों और कृषि समुदाय को नवीनतम वैज्ञानिक अनुसंधान, तकनीकी नवाचार और सर्वोत्तम प्रथाओं से सशक्त करता है।</p>
    </section>

    <!-- शोधकर्ता अनुभाग -->
    <section class="researcher-section" id="researchers">
        <h2>हमारे शोधकर्ता</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="researcher-card fade-in">
                        <img src="https://via.placeholder.com/300" alt="शोधकर्ता 1" class="researcher-image">
                        <h5>डॉ. अजय शर्मा</h5>
                        <p>पारिस्थितिकी और सतत कृषि में विशेषज्ञता।</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="researcher-card fade-in">
                        <img src="https://via.placeholder.com/300" alt="शोधकर्ता 2" class="researcher-image">
                        <h5>डॉ. रीता मेहता</h5>
                        <p>जल प्रबंधन और संरक्षण में विशेषज्ञता।</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="researcher-card fade-in">
                        <img src="https://via.placeholder.com/300" alt="शोधकर्ता 3" class="researcher-image">
                        <h5>डॉ. संजय गुप्ता</h5>
                        <p>कीट प्रबंधन और नियंत्रण में विशेषज्ञता।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- शोध पत्र अनुभाग -->
    <section class="research-paper-section" id="research-papers">
        <h2>शोध पत्र</h2>
        <p>हमारे हाल के शोध पत्रों की सूची नीचे दी गई है:</p>
        <ul class="research-paper-list">
            <li class="research-paper-item fade-in">
                <a href="#">"सतत कृषि के लिए नई तकनीकें"</a>
                <span>डॉ. अजय शर्मा</span>
            </li>
            <li class="research-paper-item fade-in">
                <a href="#">"जल संरक्षण में नवीनतम प्रगति"</a>
                <span>डॉ. रीता मेहता</span>
            </li>
            <li class="research-paper-item fade-in">
                <a href="#">"कीट प्रबंधन की रणनीतियाँ"</a>
                <span>डॉ. संजय गुप्ता</span>
            </li>
        </ul>
    </section>

    <!-- सामान्य प्रश्न अनुभाग -->
    <section class="faq-section" id="faq">
        <h2>सामान्य प्रश्न</h2>
        <div class="faq fade-in">
            <h5>प्रश्न 1: AGRI-CURE क्या है?</h5>
            <p>AGRI-CURE एक कृषि अनुसंधान केंद्र है जो सतत खेती के लिए नवीनतम शोध और प्रौद्योगिकियों पर ध्यान केंद्रित करता है।</p>
        </div>
        <div class="faq fade-in">
            <h5>प्रश्न 2: मैं कैसे शामिल हो सकता हूँ?</h5>
            <p>आप हमारे वेबसाइट के माध्यम से या हमें संपर्क करके शामिल हो सकते हैं।</p>
        </div>
    </section>

    <!-- संपर्क अनुभाग -->
    <section class="contact-section" id="contact">
        <h2>संपर्क करें</h2>
        <p>किसी भी प्रश्न या सहायता के लिए, कृपया संपर्क करें:</p>
        <p>ईमेल: support@agri-cure.com</p>
        <p>फोन: +91 123 456 7890</p>
    </section>

    <!-- फुटर -->
    <footer class="footer">
        <p>© 2024 AGRI-CURE। सभी अधिकार सुरक्षित।</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
