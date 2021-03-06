<?php

include 'dashboard_p.php';
include 'graph_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="dashboard_main_content.css" />
  <link rel="stylesheet" href="navigation.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="colors.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- linking jquery by cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- link to aos git library -->

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

      <li id="active">
        <a href="dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
        </ul>
      </li>


      <li>
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

  <a id="button"></a>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' id="nav_bar1"></i>
      <span class="text">Dashboard</span>
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



    <div class="main_content">
      <div id="main_content_text">A large number of students have been affected by Covid-19.
        <br>
        Here is our website VaxX, which provides the overall information
        about the vaccination status based on the data entered by the students.
      </div>

      <div id="covid_count_info">

        <div id="covid_count1" data-aos="fade-right">
          <span class="covid_count"><?php echo "$y"; ?></span>
          <span class="covid_count_content"> Are Fully Vaccinated</span>
        </div>

        <div id="covid_count2" data-aos="fade-right">
          <span class="covid_count"><?php echo "$z"; ?></span>
          <span class="covid_count_content"> Are Patially Vaccinated</span>
        </div>

        <div id="covid_count3" data-aos="fade-left">
          <span class="covid_count"><?php echo "$x"; ?></span>
          <span class="covid_count_content"> Are Not Vaccinated !!</span>
        </div>

        <div id="covid_count4" data-aos="fade-left">
          <span class="covid_count"><?php echo "$a"; ?></span>
          <span class="covid_count_content"> Tested And Negative !!</span>
        </div>
      </div>
      <div id="main_content_text">Graphs have been designed based on the data and here are the results:
      </div>

      <div id="content_arrange">


        <div id="graph_analysis">
          <div id="pie_chat_for_vaccines_taken" data-aos="fade-right">
            <canvas id="piechart"></canvas>
          </div>



          <div id="branch_wise_vaccinated_bar_chart" data-aos="fade-left">
            <canvas id="barchart"></canvas>
          </div>

          <!-- <div id="image_in_dashboard">
                <img src="images/vaccine-vaccination.jpg">
              </div> -->

          <div id="branch_wise_not_vaccinated_bar_chart" data-aos="zoom-in">
            <canvas id="horizontalbarchart"></canvas>
          </div>
        </div>


      </div>
    </div>

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
  <script type="text/javascript">
    var vacc_types = [<?php echo $covishield_count ?>, <?php echo $Covaxin_count ?>, <?php echo $Sputnik_count ?>, <?php echo $novacc_count ?>];
    var branch_count = [<?php echo $CSE_count ?>, <?php echo $ECE_count ?>, <?php echo $ME_count ?>,
      <?php echo $BT_count ?>, <?php echo $ISE_count ?>, <?php echo $EEE_count ?>
    ];

    var branch_count_no = [<?php echo $CSE_count_no ?>, <?php echo $ECE_count_no ?>, <?php echo $ME_count_no ?>,
      <?php echo $BT_count_no ?>, <?php echo $ISE_count_no ?>, <?php echo $EEE_count_no ?>
    ]
  </script>
  <script type="text/javascript" src="dashboard.js"></script>
  <!-- js for aos library -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000
    });
  </script>

</body>

</html>