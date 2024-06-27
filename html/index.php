<?php
session_start();
if(isset($_GET['logout'])){
    unset($_SESSION['user_id']);
    header("Location:../html/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fitness Web</title>
    <link rel="stylesheet" href="../scss/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-theme>
    <!--nav--bar-->
    <nav class="navbar navbar-expand-md  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FiTECH.Ai</a>
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="outline: none; box-shadow: none;">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                    <a class="nav-link active ms auto" aria-current="page" href="#HERO">Home</a>
                   </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Membership</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link " href="#about">About-Us</a>
                    </li>
                    <li class="nav-item me-3" id="signinLink">
                        <?php if(isset($_SESSION['user_id'])):?>
                            <a class="nav-link" href="?logout=true"><button id="logoutButton">Logout</button></a>
                        <?php else: ?>
                                <a class="nav-link" href="../html/registration.php"><button id="signInButton">Sign-In</button></a>
                            <?php endif; ?>
                    </li>
                </ul>
                <div class="toggle-switch">
  <label class="switch-label">
    <input type="checkbox" class="checkbox" id="darkModeToggle">
    <span class="slider"></span>
  </label>
</div>  
            </div>
        </div>
    </nav>

    <!--HERO-->
    <section id="HERO" class=" min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase text-white fw-semibold display1" data-aos="fade-right">Welcome to
                        Fitech.ai</h1>
                    <h5 class="text-uppercase text-white mt-3 mb-4" data-aos="fade-left">Change your life now! with
                        latest AI trainer</h5>
                    <div class="btn">
                        <a href="#"><button class="btn1 me-2" data-aos="fade-up">GET STARTED</button></a>
                        <a href="#"><button class="btn2 ms-2" data-aos="fade-up">CONTACT US</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-13" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title text-center">
                        <h1 class="display-4 fw-semibold">About us</h1>
                        <div class="line"></div>
                        <p>Welcome to fitech.ai, where cutting-edge technology meets personalized fitness guidance. At
                            fitech, we believe that
                            everyone deserves access to expert fitness coaching tailored to their unique goals and
                            needs.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 me-2" data-aos="fade-right" data-aos-delay="150">
                    <img src="../images/fitmenAi.jpg" alt="">
                </div>
                <div class="col-lg-5 ms-4" data-aos="fade-left" data-aos-delay="150">
                    <h1>About &nbsp;FiTECH.Ai</h1>
                    <p class="mb-3 mt-4">Our AI-driven platform delivers personalized fitness plans that adapt to your
                        unique goals and progress.</p>
                    <div class="aboutcard d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div class="aboutdetail">
                            <h5>Our Vision</h5>
                            <p>"To revolutionize the fitness industry with AI."</p>
                        </div>
                    </div>
                    <div class="aboutcard d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <div class="aboutdetail">
                            <h5>Our Story</h5>
                            <p>"Born from a passion for fitness and technology"</p>
                        </div>
                    </div>
                    <div class="aboutcard d-flex">
                        <div class="iconbox me-4">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <div class="aboutdetail">
                            <h5>Our Technology</h5>
                            <p>"AI-powered fitness plans tailored to your goals."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--services-->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-13 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class=" display-4 fw-semibold">Awesome Services</h1>
                        <div class="line"></div>
                        <p>Welcome to the future of fitness! Our AI-driven platform is designed to revolutionize your
                            workout experience. With
                            cutting-edge technology, we bring you personalized services that cater to your unique
                            fitness journey.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-service">
            <div class="services-container" data-aos="fade-down" data-aos-delay="250">
                <div class="s1 me-4 theme-shadow p-lg-6 p-4">
                    <div class="icon-service">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <div class="service-desc">
                        <h6>Personalized Plans</h6>
                        <p style="font-size: 12px;">Get custom-tailored workout plans based on your fitness level,
                            goals, and preferences.</p>
                    </div>
                </div>
            </div>
            <div class="services-container" data-aos="fade-down" data-aos-delay="350">
                <div class="s1 me-4 theme-shadow p-lg-6 p-4">
                    <div class="icon-service">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <div class="service-desc">
                        <h6>AI-Powered Health Insights</h6>
                        <p style="font-size: 12px;">Leverage our AI to gain deep insights into your health metrics.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-service1">
            <div class="services-container" data-aos="fade-down" data-aos-delay="450">
                <div class="s1 me-4 theme-shadow p-lg-6 p-4">
                    <div class="icon-service">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <div class="service-desc">
                        <h6>Virtual Personal Trainer</h6>
                        <p style="font-size: 12px;">Experience one-on-one training sessions with our AI-powered virtual
                            trainer
                        </p>
                    </div>
                </div>
            </div>
            <div class="services-container" data-aos="fade-down" data-aos-delay="550">
                <div class="s1 me-4 theme-shadow p-lg-6 p-4">
                    <div class="icon-service">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div class="service-desc">
                        <h6>Community Support</h6>
                        <p style="font-size: 12px;">Join a vibrant community of fitness enthusiasts.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--footer-->
    <footer class="bg-dark">
        <div class="footer-top">
        </div>
        <div class="container d-4">
            <div class="row gy-5">
                <div class="col-lg-3 col-sm-6">
                    <a href="#"><img src="../images/logo.png"></a>
                    <div class="line"></div>
                    <p>Empowering Wellness Through Intelligent Technology</p>
                    <div>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h6 class="mb-0 text-white">SERVICES</h6>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">Personalized workout plans</a></li>
                        <li><a href="#">AI-Powered Health Insights</a></li>
                        <li><a href="#">Virtual Personal Trainer</a></li>
                        <li><a href="#">Community Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h6 class="mb-0 text-white">ABOUT</h6>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">Our Vision</a></li>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Out Technology</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h6 class="mb-0 text-white">CONTACT</h6>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">BHUBANESWAR,751003</a></li>
                        <li><a href="#">+91-(8791XXXX81)</a></li>
                        <li><a href="#">companyFinTech555@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <footer class="bg-dark">
            <div class="footer-top"></div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row g-4 justify-content-between">
                        <div class="col-auto">
                            <p class="mb-0">&copy; 2024 FiTech.ai. All rights reserved.</p>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0"><a href="#"></a>Designed by Tej</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="../js/main.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    

</body>

</html>