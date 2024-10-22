<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- navbar section   -->
    <div class="header">
	<nav>
		<button id="sidebar-toggle" class="sidebar-button" onclick="toggleSidebar()">☰</button>
		<div id="sidebar" class="sidebar">
			<button class="close-btn" onclick="toggleSidebar()">×</button>
			<a href="#">Home</a>
			<hr class="divider">
			<a href="#">About</a>
			<hr class="divider">
			<a href="#">Education</a>
			<hr class="divider">
			<a href="#">Feedback</a>
			<hr class="divider">
			<a href="#">Support</a>
			<hr class="divider">
			<a href="#">Reference</a>
			<hr class="divider">
			<a href="#">Contact Us</a>
		</div>
        <div class="a" style="text-align: center; margin: 20px;">
    <p style="font-size: 32px; font-weight: bold; color: #4CAF50;">AGRI--CURE</p>
    <ul style="list-style-type: none; padding: 0;">
        <li id="nav3" onclick="showPopup()" style="display: inline-block; margin: 0 15px; padding: 10px 20px; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease;">HOME</li>
        <li id="nav3" onclick="showPopup()" style="display: inline-block; margin: 0 15px; padding: 10px 20px; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease;">SERVICES</li>
        <li id="nav3" onclick="showPopup()" style="display: inline-block; margin: 0 15px; padding: 10px 20px; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease;">ABOUT US</li>
        <li id="nav3" onclick="showPopup()" style="display: inline-block; margin: 0 15px; padding: 10px 20px; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.3s ease;">PRODUCTS</li>
        <li style="display: inline-block; margin: 0 15px; padding: 10px 20px;"><a href="login.php" style="color: white; text-decoration: none; background-color: #686854; border-radius: 50px; padding: 10px 20px;">Login/Signup</a></li>
    </ul>

    <!-- Popup Overlay -->
<!-- Popup Overlay -->
<div id="popupOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 1000;">
    <div id="popupWindow" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0.7); background-image: linear-gradient(45deg, #4CAF50, #3F51B5); padding: 20px; width: 320px; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); text-align: center; opacity: 0; transition: transform 0.5s ease, opacity 0.5s ease;">
        <h2 style="color: white; font-family: Arial, sans-serif;">
        <i class="bi bi-info-circle-fill" style="color: #ff5722;"></i><br>Please Login First</h2>
        <p style="color: #fff; margin-bottom: 20px;">You need to log in to access this section.</p>
        <button id="closeBtn" onclick="closePopup()" style="background-color: #ff5722; color: white; border: none; padding: 10px 20px; border-radius: 50px; cursor: pointer; margin-top: 15px; transition: background-color 0.3s ease;">OK</button>
    </div>
</div>


    <script>
        function showPopup() {
            document.getElementById('popupOverlay').style.display = 'block';
            setTimeout(() => {
                document.getElementById('popupOverlay').classList.add('active');
                document.getElementById('popupWindow').style.opacity = '1';
                document.getElementById('popupWindow').style.transform = 'translate(-50%, -50%) scale(1)';
            }, 10);
        }

        function closePopup() {
            document.getElementById('popupWindow').style.opacity = '0';
            document.getElementById('popupWindow').style.transform = 'translate(-50%, -50%) scale(0.7)';
            setTimeout(() => {
                document.getElementById('popupOverlay').style.display = 'none';
            }, 500);
        }
    </script>
</div>

	</nav>
	<div class="b">
		<h1>WELCOME TO INDIA'S FIRST AGRICULTURE WEBSITE</h1>
		<P>WHEN EVERY THING IS GOING TO MODERN WE WANT TOMORDENIZE  THE FARMER 
	 THOUGH CONNECTING WITH OUR WEBSITE FIRST TIME THAT IS GOING TO HAPPEN</P><br><br>
	 <a HREF="english.php" class="btn">visit us to know more</a>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="fish"></div>
         <div class="bubble"></div>
         <div class="bubble"></div>
         <div class="bubble"></div>
         <div class="bubble"></div>
         <span class="button__text"></span>
     </a>
	</div>
</div>
<script>
	function toggleSidebar() {
		var sidebar = document.getElementById("sidebar");
		sidebar.classList.toggle("active");
	}
</script>

    <!-- hero section  -->

    <!-- services section  -->

    <section class="services-section" id="services">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 services">

                    <div class="row row1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/about9.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Research</h4>
                                    <p class="card-text">Agriculture plays a vital role in food production, economic growth, and environmental sustainability through innovative practices.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/about11.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Branding</h4>
                                    <p class="card-text">Effective branding in agriculture enhances product recognition, builds consumer trust, and fosters a loyal customer base.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row2">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/about8.avif" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">UI/UX Design</h4>
                                    <p class="card-text">Effective UX/UI design in agriculture enhances user engagement, streamlines processes, and improves accessibility to vital resources for farmers and consumers alike.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="images/about7.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Development</h4>
                                    <p class="card-text">Sustainable agricultural development focuses on improving productivity, ensuring food security, and promoting environmental stewardship for future generations.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                <h3 style="
                font-size: 36px; 
                font-weight: bold; 
                text-align: center; 
                color: #fff; 
                background: linear-gradient(90deg, #4CAF50, #8BC34A); 
                padding: 10px 20px; 
                border-radius: 10px; 
                box-shadow: 0px 8px 10px rgba(0, 0, 0, 0.2); 
                letter-spacing: 2px; 
                text-transform: uppercase; 
                display: inline-block; 
                margin-bottm: 20px; 
                transition: all 0.3s ease-in-out;" 
                onmouseover="this.style.background='linear-gradient(90deg, #8BC34A, #4CAF50)'; this.style.boxShadow='0px 6px 10px rgba(0, 0, 0, 0.3)'; this.style.transform='translateY(-5px)';"
                onmouseout="this.style.background='linear-gradient(90deg, #4CAF50, #8BC34A)'; this.style.boxShadow='0px 4px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='translateY(0)';">
                Services
                </h3>
                    <h1>We can help you solve your problem through our service.</h1>
                    <p>We are a brand strategy & digital design agency building brands that matter in culture with more
                        than ten years of experience.</p>
                        <img src="images/about2.jpg" 
                        style="width: 100%; max-width: 800px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;" alt="About Us Image"
                        onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.3)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)';">
                    <button class="btn" style="width: 60%; color: #fff; margin-top: 20px;">Explore Services</button>
                </div>

            </div>
        </div>
    </section>

    <!-- about section  -->

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="images/about.jpg" 
                        style="width: 100%; max-width: 800px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s ease, box-shadow 0.3s ease;" alt="About Us Image"
                        onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.3)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.2)';">
                    
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>Who we are</h3>
                    <h1>Providing creative and technology services for growing brands.</h1>

                    <p>Our company specializes in research, brand identity design, UI/UX design, development and graphic
                        design. To help our clients improve their business, we work with them all over the world.</p>
                        <button class="btn" style="width: 60%; color: #fff; margin-top: 20px;">Learn more</button>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section  -->

    <footer style="background-color: #2c3e50; color: #ecf0f1; position: relative; overflow: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="logo" style="font-size: 28px; font-weight: bold; margin: 0; animation: fadeIn 1s;color: #4CAF50;">
                     AGRI--CURE
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="d-flex" style="list-style: none; padding: 0; margin: 0; justify-content: center;">
                        <li style="margin: 0 15px;">
                            <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">Home</a>
                        </li>
                        <li style="margin: 0 15px;">
                            <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">Services</a>
                        </li>
                        <li style="margin: 0 15px;">
                            <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">About Us</a>
                        </li>
                        <li style="margin: 0 15px;">
                            <a href="#" style="color: #ecf0f1; text-decoration: none; font-size: 18px; transition: color 0.3s;">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p style="text-align: center; margin: 0; animation: fadeIn 1s;">&copy; 2024 AGRI--CURE</p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12">
                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="color: #ecf0f1; font-size: 24px; transition: transform 0.3s;">
                        <i class="bi bi-arrow-up-short"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Add keyframes for animation -->
        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            .back-to-top:hover {
                transform: scale(1.2);
                color: #e67e22; /* Change color on hover */
            }
            a:hover {
                color: #e67e22; /* Change color on hover for links */
            }
        </style>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>