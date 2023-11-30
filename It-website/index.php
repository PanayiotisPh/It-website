<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="google-site-verification" content="A7vF-CMNEaJdjY7RzSLg8obWyF9k6ZROutvVlJn1Ta8" />
    <meta name="viewport" content="with=device=width, initial-scale=1.0">
    <title>ICON solutions booking</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <button onclick="topFunction()" id="scrollBtn" title="Go to top">Top</button>
        <script>
            // Get the button:
            let mybutton = document.getElementById("scrollBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
        </script>
    </section>

    <section class="header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">Home</a></li>

                    <li><a href="#" onclick="openPopupSignIn()" >Sign In</a></li>
                    <div class="popupSignIn" id="popupSignIn">
                        <form method="post" action="authentication.php" class="form-container">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>
                        
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>


                            <label style = "color:red;font-family:verdana;font-size:100%;text-align:center;"> 
                                <?php if (isset($_SESSION['fail'])){ echo $_SESSION['fail'];}?>
                            </label>  

                            <button type="submit" class="btn">Sign In</button>
                            <button type="button" class="btn cancel" onclick="closePopupSignIn()">Close</button>
                            <?php if (isset($_SESSION['fail'])){ unset($_SESSION['fail']);}?>

                          </form>
                    </div>

                    <li><a href="#" onclick="openPopup()" >Sign Up</a></li>
                    <div class="popupSignUp" id="popupSignUp">
                        <form method="post" action="signup.php" class="form-container">
                            <label for="name"><b>Name</b></label>
                            <input type="text" placeholder="Enter Name" name="name" required>

                            <label for="surname"><b>Surname</b></label>
                            <input type="text" placeholder="Enter Surname" name="Surname" required>

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>
                        
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <label style = "color:red;font-family:verdana;font-size:150%;text-align:center;">
                             <?php if (isset($_SESSION['failSign'])){ echo  $_SESSION['failSign'] ;}?>
                            </label>
                        
                            <button type="submit" class="btn">Sign Up</button>
                            <button type="button" class="btn cancel" onclick="closePopup()">Close</button>
                            <?php if (isset($_SESSION['failSign'])){ unset($_SESSION['failSign']);}?>

                          </form>
                    </div>
                    <li><a href="forgetPassUI.php">Forget Password</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
                </ul>
            </div>
        </nav>
    <div class="text-box">
        <h1>Need an IT support? At your service.</h1>
        <p>Our team brings its years of experience to ensure high level of service at any technical
            problem you have.<br> Our professional services are fast, cheap and done with perfection.
        </p>
    </div>


    </section>

    <script>
        let popupSignIn = document.getElementById("popupSignIn");
        let popupSignUp = document.getElementById("popupSignUp");

        function openPopupSignIn(){
            popupSignUp.classList.remove("open-popupSignUp");
            popupSignIn.classList.add("open-popupSignIn");
        }
        function closePopupSignIn(){
            popupSignIn.classList.remove("open-popupSignIn");
        }

        function openPopup(){
            popupSignIn.classList.remove("open-popupSignIn");
            popupSignUp.classList.add("open-popupSignUp");
        }
        function closePopup(){
            popupSignUp.classList.remove("open-popupSignUp");
        }
    </script>

    <section class="service">
        <h1>Services We Offer</h1>

        <div class="row">
            <div class="service-col">
                <h3>Cloud Backup Services</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
            </div>
            <div class="service-col">
                <h3>Data Backup and Restoration</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                    <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                    <path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z"/>
                  </svg>
            </div>
            <div class="service-col">
                <h3>Firewall Services</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
                    <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
                  </svg>
            </div>
            
        </div>
        <div class="row">
            <div class="service-col">
                <h3>Software Configurations</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
                    <path d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z"/>
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                  </svg>
            </div>

            <div class="service-col">
                <h3>Network Configurations</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-router" viewBox="0 0 16 16">
                    <path d="M5.525 3.025a3.5 3.5 0 0 1 4.95 0 .5.5 0 1 0 .707-.707 4.5 4.5 0 0 0-6.364 0 .5.5 0 0 0 .707.707Z"/>
                    <path d="M6.94 4.44a1.5 1.5 0 0 1 2.12 0 .5.5 0 0 0 .708-.708 2.5 2.5 0 0 0-3.536 0 .5.5 0 0 0 .707.707ZM2.5 11a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm4.5-.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2.5.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm1.5-.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Z"/>
                    <path d="M2.974 2.342a.5.5 0 1 0-.948.316L3.806 8H1.5A1.5 1.5 0 0 0 0 9.5v2A1.5 1.5 0 0 0 1.5 13H2a.5.5 0 0 0 .5.5h2A.5.5 0 0 0 5 13h6a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5h.5a1.5 1.5 0 0 0 1.5-1.5v-2A1.5 1.5 0 0 0 14.5 8h-2.306l1.78-5.342a.5.5 0 1 0-.948-.316L11.14 8H4.86L2.974 2.342ZM14.5 9a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h13Z"/>
                    <path d="M8.5 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                  </svg>
            </div>
            <div class="service-col">
                <h3>Hardware Configurations</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-motherboard" viewBox="0 0 16 16">
                    <path d="M11.5 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5Zm2 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5Zm-10 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6Zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6ZM5 3a1 1 0 0 0-1 1h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0V3Zm0 1h3v3H5V4Zm6.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2Z"/>
                    <path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2H1Zm1 11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v11Z"/>
                  </svg>
            </div>
        </div>
    </section>

    <section class="crew">
        <h1>Our Crew</h1>
        <div class="row">
            <div class="crew-col">
                <img src="images/giorgos andreou2.jpg">
                <div class="layer">
                    <h3>GIORGOS ANDREOU</h3>
                </div>
            </div>
            <div class="crew-col">
                <img src="images/kostas fotiou2.jpg">
                <div class="layer">
                    <h3>KOSTAS FOTIOU</h3>
                </div>
            </div>
            <div class="crew-col">
                <img src="images/maria georgiou2.jpg">
                <div class="layer">
                    <h3>MARIA GEORGIOU</h3>
                </div>
            </div>
        </div>

    </section>

    <section class="crew-cv">
        <div class="row">
            <div class="crew-cv-col">
                <h3>Giorgos Andreou is a self-motivated team member and a pleasure to work with.
                    He demonstrates superior technical ability and produces work of exceptional 
                    quality. Giorgos takes the time to fully understand the scope of projects
                    and displays a keen attention to detail.</h3>
            </div>
            <div class="crew-cv-col">
                <h3>Kostas Fotiou, having worked at our organization for four years, Kostas is an
                    experienced member of the team and displays a high level of institutional
                    knowledge. She requires a minimal amount of supervision to fulfill her job
                    duties and maintains a good working relationship with team members cross-functionally.</h3>
            </div>
            <div class="crew-cv-col">
                <h3>Maria Georgiou is committed to producing work that meets high standards.
                    She is always looking to improve the quality of her deliverables.
                    Maria frequently goes above and beyond in her efforts to ensure consistency
                    and generate content that exceeds expectations.</h3>
            </div>
            
        </div>
    </section>

    <section>
        <br>
        <br>
        <h1>Our Location</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.7131504621593!2d33.353767!3d35.163774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de19fe733e0f35%3A0x5190ae5066a0a746!2sGeorgiou%20Griva%20Digeni%2042-44%2C%20Nicosia%201096!5e0!3m2!1sen!2s!4v1665620089953!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class = "cta">
        <h1>For any questions or technical problems<br>Please Contact Us</h1>
        <a href="contactus2.php" class="hero-text">CONTACT US</a>
    </section>
    <section class = "footer">
        <a href="termsAndConditions.html">Terms and Conditions</a>
        <a href="privacyPolicy.html">Privacy Policy</a>
        <h5>Copyright © 2022 All rights reserved. Team 9</h5>
    </section>
</body>
</html>>
