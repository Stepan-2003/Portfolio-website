<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>Stepan Portfolio</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar-nav">
    
     <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- // Preloader -->
    

    <!-- ====== Header ====== -->
    <header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo" href="index.html">
                    <!-- <img src="assets/images/logo.png" alt="logo"> -->
                </a>
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#service">SERVICE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">PORTFOLIO</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#Projects">PROJECTS</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
    <!-- ====== // Header ====== -->

    <!-- ====== Hero Area ====== -->
    <div class="hero-aria" id="home">
        <!-- Hero Area Content -->
        <div class="container">
            <div class="hero-content h-100">
                <div class="d-table">
                    <div class="d-table-cell">
                        <h2 class="text-uppercase">I'm Stepan</h2>
                        <h3 class="text-uppercase">FullStack Developer</h3>
                        <p>Make designed by as Stepan.</p>
                        <a href="https://stepanresume.tiiny.site" class="button smooth-scroll">My Resume</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Hero Area Content -->
        <!-- Hero Area Slider -->
        <div class="hero-area-slids owl-carousel">
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/profile1.jpg)"></div>
                <!-- // Single Background -->
            </div>
            <!-- <div class="single-slider">
               
                <div class="slider-bg" style="background-image: url(assets/images/hero-area/img-2.jpg)"></div>
                
            </div> -->
        </div>
        <!-- // Hero Area Slider -->
    </div>
    
    <!-- ====== //Featured Area ====== -->

    <!-- ====== About Area ====== -->
    <section id="about" class="section-padding about-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>About Me</h2>
                       
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-bg" style="background-image:url(assets/images/profile2.jpg)">
                        <!-- Social Link -->
                        <div class="social-aria">
                            <a target="_blank" href="https://www.facebook.com/mari.stephan.7?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/in/stepan-m-4b6411329?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i></a>
                            <a target="_blank" href="https://www.instagram.com/mr_fraud__67/profilecard/?igsh=Y2V6eDlhc3pibGk5"><i class="fab fa-instagram"></i></a>
                            <!-- <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-youtube"></i></a> -->
                        </div>
                        <!-- // Social Link -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Hello, I am <span>Stepan</span></h2>
                        <h4>Full Stack Developer </h4>
                        <p> As a recent graduate with a degree in[Information Technology] and hands-on experience in both Front-end and back-end develepment,I am seeking a challenging position as a Full-Stack Developer.My goal is to leverage my skils in [HTML,CSS,JavaScript,Node.js,MYSQL] and my passion for creating innovative web applications to contribute to a dynamic development team.Eager to apply my knowledge,learn from experienced professionals,user-friendly solutions that drive business success.</p>

                        <!-- <h5>My Skills</h5>

                        
                        <div id="skills" class="skill-area">

                            
                            <div class="single-skill">
                                <div class="skillbar" data-percent="100%">
                                    <div class="skillbar-title"><span>HTML5</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">100%</div>
                                </div>
                            </div>
                            
                            <div class="single-skill">
                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>CSS3</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>
                            </div>
                           
                            <div class="single-skill">
                                <div class="skillbar" data-percent="50%">
                                    <div class="skillbar-title"><span>JS</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">50%</div>
                                </div>
                            </div>

                            <div class="single-skill"></div>
                                <div class="skillbar" data-percent="50%">
                                    <div class="skillbar-title"><span>Bootstrap</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">50%</div>
                                </div>
                            </div>

                            <div class="single-skill"></div>
                                <div class="skillbar" data-percent="50%">
                                    <div class="skillbar-title"><span>MongoDB</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">50%</div>
                                </div>
                            </div>

                            <div class="single-skill"></div>
                                <div class="skillbar" data-percent="50%">
                                    <div class="skillbar-title"><span>AWS</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">50%</div>
                                </div>
                            </div>

                            

                        </div> -->
                        <!-- //Skill Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // About Area ====== -->

    <!-- skills start -->

    

    <section class="skills" id="skills">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>My Skills</h2>
                       
                    </div>
                </div>
            </div>
            
            <div class="skills-details">
                <div class="skill">
                    <div class="skill-name">HTML</div>
                    <div class="skill-bar">
                        <div class="skill-percentage" style="width: 90%;">90%</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">CSS</div>
                    <div class="skill-bar">
                        <div class="skill-percentage" style="width: 80%;">80%</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">JAVA SCRIPT</div>
                    <div class="skill-bar">
                        <div class="skill-percentage" style="width: 65%;">65%</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">BOOSTRAP</div>
                    <div class="skill-bar">
                        <div class="skill-percentage" style="width: 70%;">70%</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">SQL</div>
                    <div class="skill-bar">
                        <div class="skill-percentage" style="width: 75%;">75%</div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">MONGODB</div>
                    <div class="skill-bar">
                        <div class="skill-percentage" style="width: 70%;">70%</div>
                    </div>
                </div>
                <div class="skill">
                  <div class="skill-name">AWS</div>
                  <div class="skill-bar">
                      <div class="skill-percentage" style="width: 55%;">55%</div>
                  </div>
              </div>
              <div class="skill">
                <div class="skill-name">DEVOPS</div>
                <div class="skill-bar">
                <div class="skill-percentage" style="width: 50%;">50%</div>
                </div>
            </div>
            </div>
        </div>
      </section>

     <!-- skills end -->

    

    <!-- ====== Blog Section ====== -->
    <section class="section-padding pb-70 blog-section bg-light" id="blog">
        <div class="container" id="Projects">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Projects</h2>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Blog -->
                <div class="col-lg-6 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb" style="background-image: url(assets/images/camera-gear-cover-1.webp)"></div>
                        <h4 class="blog-title"><a href="">Front-End Project</a></h4>
                        <p class="blog-meta"><a href="#">Stepan</a>, 02 OCT 2024</p>
                        <p>HTML Design,HTML5.Resposive,Mixed column.Creative commons.art or photography,bootstrap,Jquery,Portfolio,Services,Responsive.</p>
                        <a href="https://github.com/Stepan-2003/Front-End-Project" class="button">View Project</a>
                    </div>
                </div>
               
                <div class="col-lg-6 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-2.jpg)"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Lifetime free Update</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div>
                </div>
                <!-- Single Blog -->
                <!-- Single Blog -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-3.jpg)"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Unlimited Support</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div>
                </div> -->
                <!-- Single Blog -->
            </div>
        </div>
    </section>
    <!-- ====== // Blog Section ====== -->


   


    <!-- ====== Contact Area ====== -->
    <section id="contact" class="section-padding contact-section bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Contact Me</h2>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form -->
                    <form id="contact-form" action="#" method="post" class="contact-form bg-white">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Name">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" required placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="" class="form-control" required placeholder="Message"></textarea>
                        </div>
                        <div class="form-btn text-center">
                            <button class="button" type="submit">Send Message</button>
                            <p class="form-message"></p>
                        </div>
                    </form>
                    <!-- // Form -->
                </div>
            </div>
            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== -->


    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; 2018 <a href="#about">A Template Designed by Stepan</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->






     <!-- ====== ALL JS ====== -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>


<?php
        if (isset($_POST['submit'])) {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $subject = mysqli_real_escape_string($conn, $_POST['subject']);
            $message = mysqli_real_escape_string($conn, $_POST['message']);

            // Insert query
            $query = "INSERT INTO users (name, email, subject, message) 
                      VALUES ('$name', '$email', '$subject', '$message')";
            $data = mysqli_query($conn, $query);

            if ($data) {
                echo "<p class='text-success text-center'>Data successfully inserted into the database.</p>";
            } else {
                echo "<p class='text-danger text-center'>Failed to insert data. Please try again.</p>";
            }
        }
    ?>
