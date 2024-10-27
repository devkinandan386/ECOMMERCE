<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Reference - AGRI-CURE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* General Styles */
        body {
            background-color: #f9fcff;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        /* Navbar */
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

        /* Hero Section */
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

        /* About Section */
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

        /* Researcher Section */
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

        /* Research Paper Section */
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

        /* FAQ Section */
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

        /* Contact Section */
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

        /* Footer */
        .footer {
            background: #006400;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* Animation */
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
    background-color: #f9f9f9; /* Light background for contrast */
    padding: 20px;
    margin: 20px 0;
    border-radius: 8px;
}

#agricultural-research h2 {
    color: #2c3e50; /* Darker color for headings */
}

#agricultural-research ul {
    list-style-type: none; /* Remove bullet points */
    padding-left: 0;
}

#agricultural-research li {
    margin-bottom: 15px; /* Spacing between list items */
}

#agricultural-research a {
    color: #2980b9; /* Color for links */
    text-decoration: none; /* Remove underline */
}

#agricultural-research a:hover {
    text-decoration: underline; /* Underline on hover */
}

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">AGRI-CURE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#researchers">Researchers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#research-papers">Research Papers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section style="background-image: url('https://source.unsplash.com/1600x900/?agriculture,sustainable-farming'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center; color: white; text-align: center; position: relative; padding: 20px;">
        <header style="background: rgba(0, 0, 0, 0.7); padding: 50px; border-radius: 15px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);">
            <h1 style="font-size: 4rem; margin: 0; font-weight: bold;">Welcome to AGRI-CURE Research Hub</h1>
            <p style="font-size: 1.6rem; margin: 20px 0;">Explore cutting-edge agricultural research, expert advice, and innovative solutions for sustainable farming.</p>
            <div style="margin-top: 40px;">
                <h3 style="font-size: 1.5rem;">Featured Research Areas:</h3>
                <ul style="list-style-type: none; padding: 0; font-size: 1.2rem;">
                    <li>🌾 Sustainable Crop Production</li>
                    <li>🌱 Innovative Pest Management</li>
                    <li>💧 Water Conservation Techniques</li>
                    <li>🍃 Soil Health Improvement</li>
                </ul>
            </div>
        </header>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <h2>About AGRI-CURE</h2>
        <p>AGRI-CURE is dedicated to advancing agricultural research and providing farmers with the knowledge and resources necessary for sustainable farming practices. Our mission is to empower farmers through education and research, leading to healthier crops, better yields, and a more sustainable future.</p>
    </section>

    <!-- Researchers Section -->
    <section id="agricultural-research">
    <h2>Agricultural Research and Support</h2>
    <p>At AGRI-CURE, we are committed to supporting farmers through the latest research and innovations in agriculture. Here are some notable researchers, articles, and blogs that contribute to the advancement of farming practices:</p>

    <h3>Notable Agricultural Researchers</h3>
    <ul>
        <li>
            <strong>Dr. David Zilberman</strong><br>
            <em>Affiliation:</em> University of California, Berkeley<br>
            <em>Research Focus:</em> Agricultural economics, policy analysis, and the economics of water and agricultural biotechnology.<br>
            <a href="https://are.berkeley.edu/people/faculty/david-zilberman" target="_blank">Profile</a>
        </li>
        <li>
            <strong>Dr. Ruth DeFries</strong><br>
            <em>Affiliation:</em> Columbia University<br>
            <em>Research Focus:</em> Land-use change, food systems, and the environmental impacts of agriculture.<br>
            <a href="https://www.earth.columbia.edu/articles/view/2685" target="_blank">Profile</a>
        </li>
        <li>
            <strong>Dr. Emily Broad Leib</strong><br>
            <em>Affiliation:</em> Harvard Law School<br>
            <em>Research Focus:</em> Food waste, food systems law, and sustainable agriculture.<br>
            <a href="https://www.law.harvard.edu/faculty/directory/data/1454/Broad-Leib" target="_blank">Profile</a>
        </li>
    </ul>

    <h3>Relevant Articles</h3>
    <ul>
        <li>
            <a href="https://www.sciencedirect.com/science/article/pii/S2351978917300461" target="_blank">The Future of Food: The Role of Agricultural Research</a><br>
            <em>Summary:</em> Discusses the importance of agricultural research in addressing global food security challenges.
        </li>
        <li>
            <a href="https://www.nature.com/articles/s41598-019-49536-6" target="_blank">Agroecology: The Future of Farming</a><br>
            <em>Summary:</em> Explores agroecological practices and their potential to enhance sustainability in farming.
        </li>
        <li>
            <a href="http://www.fao.org/3/i6841e/i6841e.pdf" target="_blank">Climate Change and Agriculture: Impacts and Adaptation</a><br>
            <em>Summary:</em> An in-depth report by the Food and Agriculture Organization on the effects of climate change on agriculture and adaptation strategies.
        </li>
    </ul>

    <h3>Notable Blogs and Online Resources</h3>
    <ul>
        <li>
            <a href="https://agfundernews.com/" target="_blank">AgFunder Network Partners Blog</a><br>
            <em>Summary:</em> Covers the latest trends in agritech, investment opportunities, and innovations in farming.
        </li>
        <li>
            <a href="https://www.soils.org/discover-soil/blog" target="_blank">The Dirt - Soil Science Society of America Blog</a><br>
            <em>Summary:</em> Articles about soil health, research updates, and sustainable farming practices.
        </li>
        <li>
            <a href="http://www.fao.org/news/blogs/en/" target="_blank">Food and Agriculture Organization of the United Nations (FAO) Blog</a><br>
            <em>Summary:</em> Insights and news on global food security, agricultural practices, and sustainability initiatives.
        </li>
        <li>
            <a href="https://www.agri-tech-e.co.uk/blog/" target="_blank">Agri-Tech East Blog</a><br>
            <em>Summary:</em> Focuses on agricultural technology advancements, research, and innovation in the agritech sector.
        </li>
        <li>
            <a href="https://www.usda.gov/media/blog" target="_blank">USDA Blog</a><br>
            <em>Summary:</em> Updates on agricultural research, policy changes, and initiatives from the U.S. Department of Agriculture.
        </li>
    </ul>
</section>


<!-- Research Papers Section -->
<section id="research-papers" class="research-paper-section">
    <h2>Research Papers</h2>
    <ul class="research-paper-list">
        <li class="research-paper-item">
            <a href="https://example.com/research-paper-1.pdf" target="_blank">Sustainable Farming Practices and Their Impact</a>
            <span>Published on: January 2023</span>
        </li>
        <li class="research-paper-item">
            <a href="https://example.com/research-paper-2.pdf" target="_blank">Innovations in Crop Production Techniques</a>
            <span>Published on: March 2023</span>
        </li>
        <li class="research-paper-item">
            <a href="https://example.com/research-paper-3.pdf" target="_blank">Water Management Strategies in Agriculture</a>
            <span>Published on: June 2023</span>
        </li>
    </ul>
</section>


<!-- Support for Farmers - FAQ Section -->
<section id="support-farmers" class="faq-section">
    <h2>How We Support Farming and Farmers</h2>
    <ul class="faq-list">
        <li class="faq-item">
            <h3>1. What resources do you provide for sustainable farming practices?</h3>
            <p>We offer various resources, including guides, articles, and workshops focused on sustainable farming techniques to help farmers improve productivity while preserving the environment.</p>
        </li>
        <li class="faq-item">
            <h3>2. How can farmers access financial assistance or subsidies?</h3>
            <p>We provide information on government programs, grants, and subsidies available to farmers. Our team can assist in the application process to ensure farmers receive the support they need.</p>
        </li>
        <li class="faq-item">
            <h3>3. Do you offer training programs for new farmers?</h3>
            <p>Yes, we conduct training programs that cover various aspects of farming, including crop management, pest control, and the use of modern agricultural technologies.</p>
        </li>
        <li class="faq-item">
            <h3>4. How can farmers stay updated on the latest agricultural research?</h3>
            <p>We regularly publish research papers, newsletters, and updates on our website. Farmers can subscribe to our newsletter to receive the latest information directly.</p>
        </li>
        <li class="faq-item">
            <h3>5. What kind of pest control advice do you provide?</h3>
            <p>We offer integrated pest management strategies that focus on eco-friendly solutions, including biological control methods and the responsible use of pesticides.</p>
        </li>
        <li class="faq-item">
            <h3>6. How do you support farmers during adverse weather conditions?</h3>
            <p>We provide guidance on risk management, including crop insurance options and advice on crop selection that is more resilient to climate challenges.</p>
        </li>
        <li class="faq-item">
            <h3>7. Can farmers reach out for personalized advice?</h3>
            <p>Absolutely! Farmers can contact our support team through our website or via phone to receive tailored advice based on their specific farming needs.</p>
        </li>
        <li class="faq-item">
            <h3>8. Do you collaborate with local agricultural researchers?</h3>
            <p>Yes, we partner with agricultural researchers to develop innovative solutions and share the latest findings with farmers to improve their practices.</p>
        </li>
    </ul>
</section>


    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <p>If you have any questions or inquiries, feel free to reach out to us:</p>
        <p>Email: <a href="mailto:info@agri-cure.com">info@agri-cure.com</a></p>
        <p>Phone: +1 (555) 123-4567</p>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 AGRI-CURE. All rights reserved.</p>
        <div>
            <a href="#" style="color: #fff; margin: 0 10px;">Privacy Policy</a>
            <a href="#" style="color: #fff; margin: 0 10px;">Terms of Service</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
