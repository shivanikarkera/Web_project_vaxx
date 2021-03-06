<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="classroom.css">

    <!-- linking jquery by cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- link to aos git library -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


    <nav class="sidebar close">
        <div class="logo-details">
            <a href="homepage.php"><i class="fas fa-solid fa-virus"></i></a>
            <span class="logo_name" id="logo">VaXx</span>
            <i class='bx bx-menu' id="nav_btn"></i>
        </div>



        <ul class="nav-links">

            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
                </ul>
            </li>


            <li id="active">
                <a href="homepage.php">
                    <i class="fas fa-user"></i>
                    <span class="link_name">Homepage</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="Homepage.php">Homepage</a></li>
                </ul>
            </li>

            <li>
                <a href="classroom.php">
                    <i class="fas fa-chalkboard"></i>
                    <span class="link_name">Classroom</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="classroom">Classroom</a></li>
                </ul>
            </li>



            <li>
                <a href="signup.php">
                    <i class="fas fa-sign-in-alt"></i>
                    <span class="link_name">Sign Up</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="signup.php">Sign Up</a></li>
                </ul>
            </li>
            <li>
                <a href="inputform.php">
                    <i class="far fa-sticky-note"></i>
                    <span class="link_name">Fill Data </span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="inputform.php">Fill Data</a></li>
                </ul>
            </li>



            <li>
                <a href="contact.php">
                    <i class="fas fa-address-book"></i>
                    <span class="link_name">Contact Us</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="contact.php">Contact Us</a></li>
                </ul>
            </li>


            <li>
            </li>
        </ul>
    </nav>

    <!-- Back to top button -->
    <a id="button"></a>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' id="nav_bar1"></i>
            <span class="text">Homepage</span>
            <span id="welcome_txt"> Welcome,
                <?php
                // echo $_SESSION['usn'];
                // Start the session
                if (isset($_SESSION['usn'])) {

                    $welcome_name = $_SESSION['usn'];
                    echo  "$welcome_name &nbsp; &nbsp;";
                    echo "<button><a href=\"logout.php\">LOG OUT</a></button>";
                } else {
                    echo "Guest User &nbsp";
                    echo "
                    <button><a href=\"login.php\">LOG IN</a></button>";
                } ?>
            </span>
        </div>



        <section class="1">
            <section class="parallax">
                <div class="parallax-inner">
                    <br>
                    <h1> <span class="main-heading-primary">Want to know </span> <span class="main-heading-secondary">
                            more about covid ?
                            <i id="scroll_down" class="fas fa-chevron-down arrow bounce"></i></span>
                    </h1>

                    <!-- <h5>Our website Vaxx provides you with the latest information about covid awareness and vaccination status of NMAMIT students</h5> -->

                    <br>
                </div>
            </section>

            <div id="intro_content">

                <h1> What Is Coronavirus?</h1><br>



                <br>
                <div data-aos="zoom-in">Coronaviruses are a type of virus. There are many different kinds, and some cause disease. A
                    coronavirus
                    identified in 2019, SARS-CoV-2, has caused a pandemic of respiratory illness, called COVID-19.</div>

                <div data-aos="zoom-in">Most people infected with the virus will experience mild to moderate respiratory illness and
                    recover without requiring
                    special treatment. However, some will become seriously ill and require medical attention. Older
                    people and those with
                    underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or
                    cancer are more
                    likely to develop serious illness. Anyone can get sick with COVID-19 and become seriously ill or die
                    at any age.</div>


            </div>

            <div id="video" data-aos="zoom-in">
                <iframe width="700" height="400" src="https://www.youtube.com/embed/aerq4byr7ps">
                </iframe>
            </div>

            <div id="precaution_content">
                <h1>How To Prevent Covid</h1>
                <div id="arrange_precaution_content">
                    <div id="precaution_image" data-aos="fade-right">
                        <img src="images/img3.jpeg" alt="precaution_image">
                    </div>

                    <ul data-aos="zoom-in">
                        <li>
                            Maintain a safe distance from others (at least 1 metre), even if they don???t appear to be
                            sick.
                        </li>
                        <li>Wear a mask in public, especially indoors or when physical distancing is not possible.</li>
                        <li>Choose open, well-ventilated spaces over closed ones. Open a window if indoors.</li>
                        <li>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
                        <li>Get vaccinated when it???s your turn. Follow local guidance about vaccination.</li>
                        <li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
                        <li>Stay home if you feel unwell.</li>
                    </ul>
                </div>
            </div>


            <div id="precaution_content">
                <h1>Symptoms of Covid</h1>
                <div id="arrange_precaution_content">

                    <ul data-aos="zoom-in">
                        It has been found that Covid 19 is a close relative of SARS. SARS is a novel type of virus that was reported in 2007,
                        and like most SARS viruses, Covid 19 affects the respiratory tract in humans. The infection starts off with mild
                        flu-like symptoms or no symptoms, and further progress to severe symptoms.
                        <br><br>

                        Covid 19 primarily infects the lungs in the affected individuals and in severe cases causes??? death due to ARDS and
                        pneumonia.
                        <li>
                            fever
                        </li>
                        <li>cough</li>
                        <li>tiredness</li>
                        <li>loss of taste or smell</li>
                        <li>sore throat</li>
                        <li>headache</li>
                        <li>aches and pains,etc</li>
                    </ul>

                    <div id="precaution_image" data-aos="fade-left">
                        <img src="images/symptoms.webp" alt="precaution_image">
                    </div>
                </div>
            </div>
            <div class="shareframe">

            <h2>Share the Page :</h2>
                <div class="frame">
                    <a href="#" class="btn">
                        <i class="fab fa-facebook-f" style="color: #3b5998;"></i>
                    </a>
                    <a href="#" class="btn">
                        <i class="fab fa-twitter" style="color: #00acee;"></i>
                    </a>
                    <a href="#" class="btn">
                        <i class="fab fa-dribbble" style="color: #ea4c89;"></i>
                    </a>
                    <a href="#" class="btn">
                        <i class="fab fa-linkedin-in" style="color:#0e76a8;"></i>
                    </a>
                    <a href="#" class="btn">
                        <i class="fab fa-get-pocket" style="color:#ee4056;"></i>
                    </a>
                    <a href="#" class="btn">
                        <i class="far fa-envelope"></i>
                    </a>
                </div>

            </div>








        </section>


        <footer>
            <div class="content">
                <div class="left box">
                    <div class="upper">
                        <div class="topic">About us</div>
                        <p> &nbsp;VaXx is a website that helps track the vaccination status of the students in NMAMIT.</p>

                        <div>

                            <a href="http://www.instagram.com/u_shifali"><i class="fab fa-instagram contact_us_icon"></i></a>&nbsp;
                            <a href="https://github.com/ushifali"><i class="fab fa-github contact_us_icon"></i></a>&nbsp;
                            <a href="https://www.linkedin.com/in/shifali-u-055748192/"><i class="fab fa-linkedin contact_us_icon"></i></a>&nbsp;
                            : SHIFALI U
                        </div>

                        <div>


                            <a href="http://www.instagram.com/shivani_.karkera"><i class="fab fa-instagram contact_us_icon"></i></a>&nbsp;
                            <a href="https://github.com/shivanikarkera"><i class="fab fa-github contact_us_icon"></i></a>&nbsp;
                            <a href="https://www.linkedin.com/in/shivani-girish-karkera-71842a19b/"><i class="fab fa-linkedin contact_us_icon"></i></a>&nbsp;
                            : SHIVANI GIRISH KARKERA
                        </div>
                    </div>

                </div>

                <div class="right box">

                    <div class="topic">Contact us</div>
                    <div class="phone">
                        <a href="#"><i class="fas fa-phone-volume"></i>&nbsp;+91 80958 13777</a>
                    </div>
                    <div class="email">
                        <a href="#"><i class="fas fa-envelope"></i>&nbsp;4nm19cs176@nmamit.in</a>
                    </div>
                    <br>
                    <div class="phone">

                        <a href="#"><i class="fas fa-phone-volume"></i>&nbsp;+91 94810 17173</a>
                    </div>
                    <div class="email">
                        <a href="#"><i class="fas fa-envelope"></i>&nbsp;4nm19cs178@nmamit.in</a>

                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>Copyright ?? 2020 <a href="#">VaXx</a> All rights reserved</p>
            </div>
        </footer>

    </section>




    <script type="text/javascript" src="navigation.js"></script>
    <script type="text/javascript" src="dashboard.js"></script>
    <script type="text/javascript" src="homepage.js"></script>

    <!-- js for aos library -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>



</body>

</html>