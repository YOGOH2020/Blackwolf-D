<?php
// blackwolf-home.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="U2DeFP6O8HXpP45IWE_orhZToOMgE8D-bHwC1Pcvc0w" />
    <title>BLACKWOLF HOME</title>
    <!-- Include Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- Link your custom CSS file -->
    <link rel="stylesheet" href="style.css" />
    <!-- Include Boxicons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>
    <!-- Loader Section -->
    <div id="loader">
      <div id="wrapperload">
        <div class="elem">
          <img src="./images/name.png" alt="name" />
        </div>
        <div class="elem">
          <h3>Photographer | Videographer Media</h3>
        </div>
        <div class="elem">
          <h3>Get Imaginations to Life Through Lenses.</h3>
        </div>
        <div class="elem">
          <img src="./images/name.png" alt="name" />
        </div>
      </div>
    </div>

    <!-- Header Section -->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <a href="./index.php" class="navbar-brand">
          <img
            src="./images/name.png"
            alt="name"
            style="width: 100px; height: 30px"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon custom-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="./index.php" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about-me" class="nav-link">About Me</a>
            </li>
            <li class="nav-item">
              <a href="#team-area" class="nav-link">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact Me</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

<!-- Home Section -->
<section class="home">
  <div class="container">
    <div class="row">
      <!-- Rearrange the columns for mobile view -->
      <div class="col-lg-6 order-lg-2">
        <div class="home-img">
          <div class="glowing-circle">
            <span></span>
            <span></span>
            <div class="image">
              <img
                src="./images/max.jpg"
                alt="max"
                class="img-fluid rounded-circle" ;
              />
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="home-content">
          <h1>Hi, I'm Edrian Maxwell</h1>
          <h3>Photographer | Videographer</h3>
          <p>
            Welcome to My Profile as I showcase my Journey from Edrian
            Maxwell to BLACKWOLF Media.
          </p>
          <a href="#contact" class="btn btn-primary">Hire Me</a>
        </div>
      </div>
      <!-- End rearrangement for mobile view -->
    </div>
  </div>
</section>


    <section class="about-me" id="about-me" style="margin-bottom: 30px;">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 mx-auto">
            <div class="about-me-content">
              <img
                src="./images/max.jpg"
                alt="Edrian Maxwell"
                class="img-fluid rounded-circle"
              />
              <h2 class="text-center">EDRIAN MAXWELL OWUOR</h2>
              <p class="text-center">
                Meet Edrian Maxwell A Visionary Photographer & Tech Enthusiast
                With two years of capturing life's beautiful moments, Edrian is
                more than just a photographer; he's a storyteller. Through his
                lens, he weaves tales of love, adventure, and unforgettable
                memories. But Edrian's passion doesn't stop there. He's also
                deeply fascinated by technology's ever-evolving landscape. When
                he's not behind the camera, you'll find him exploring the latest
                gadgets, diving into coding adventures, and pushing the
                boundaries of creativity. Join him on his journey of freezing
                moments in time and embracing the endless possibilities of the
                digital world.
              </p>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </section>


<div id="team-area" >
    <div class="container">
      <div class="row team-row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 class="text-white">Portfolio</h2>
          </div>
        </div>
  
        <div class="col-md-6">
          <div id="team1" class="single-team">
            <div class="team-img">
              <img src="./outdoor/11.jpg" alt="" />
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Outdoor</h3>
                <p><a href="./outdoor.php"><i class="fas fa-tree"></i></a></a></p>
                <p>Click Icon to Open Link</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="team2" class="single-team">
            <div class="team-img">
              <img src="./corporate/1.jpg" alt="" />
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Corporate</h3>
                <p><a href="./corp.php"><i class="fas fa-briefcase"></i></a></p>
                <p>Click Icon to Open Link</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row team-row">
        <div class="col-md-6">
          <div id="team4" class="single-team">
            <div class="team-img">
              <img src="./wedding/7.jpg" alt="" />
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Wedding</h3>
                <p><a href="./wedding.php"><i class="fas fa-ring"></i></a></p>
                <p>Click Icon to Open Link</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="team5" class="single-team">
            <div class="team-img">
              <img src="./studio/11.jpg" alt="" />
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Studio</h3>
                <p><a href="./studio.php"><i class="fas fa-microphone"></i></a></p>
                <p>Click Icon to Open Link</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row team-row">
        <div class="col-md-6">
          <div id="team4" class="single-team">
            <div class="team-img">
              <img src="./artistic/7.jpg" alt="" />
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3> Artistic</h3>
                <p> <a href="./artistic.php"><i class="fas fa-paint-brush"></i></a></p>
                <p>Click Icon to Open Link</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="team5" class="single-team">
            <div class="team-img">
              <img src="./graduation/4.jpg" alt="" />
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Graduation</h3>
                <p><a href="./graduation.php"><i class="fas fa-graduation-cap"></i></a></p>
                <p>Click Icon to Open Link</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row team-row">
        <div class="col-md-6">
          <div id="team4" class="single-team">
            <div class="team-img">
              <img src="./cultural/4.jpg" alt="" />
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3> Cultural</h3>
                <p><a href="./cultural.php"><i class="fas fa-globe"></i></a></p>
                <p>Click Icon to Open Link</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="get-in-touch" id="contact">
    <h1 class="title">Get In Touch</h1>
    <div class="cont">
        <div class="contact">
          <form  method="post" action="">
            <div class="contact-form row">
                <div class="form-field col-lg-6">
                    <input id="name" class="input-text" type="text" name="Name">
                    <label for="name" class="label">Name</label>
                </div>
                <div class="form-field col-lg-6">
                    <input id="email" class="input-text" type="email" name="Email">
                    <label for="email" class="label">Email</label>
                </div>
                <div class="form-field col-lg-6">
                    <input id="area" class="input-text" type="text" name="Location">
                    <label for="area" class="label">Location</label>
                </div>
                <div class="form-field col-lg-6">
                    <input id="phone" class="input-text" type="phone" name="PhoneNumber">
                    <label for="phone" class="label">Phone Number</label>
                </div>
                <div class="form-field col-lg-12">
                    <input id="message" class="input-text" type="phone" name="Message">
                    <label for="message" class="label">Message</label>
                </div>
                <div class="form-field col-lg-12">
                    <input type="submit" class="submit-btn" value="submit" name="send">
                </div>
            </div>
            <div class="success">
              <?php
              if (isset($_POST['send'])) {
                  $Name = $_POST['Name'];
                  $PhoneNumber = $_POST['PhoneNumber'];
                  $Location = $_POST['Location'];
                  $Email = $_POST['Email'];
                  $Message = $_POST['Message'];
      
                  $mailHeader = "From: " . $Name . "<" . $Email . ">\r\n";
                  $recipient = "info@blackwolf.co.ke";
      
                  if (mail($recipient, $PhoneNumber, $Message, $mailHeader)) {
                      echo '<p class="text-center">Thank You for Contacting BlackWolf Media. We will get back to you as soon as possible!</p>';
                  } else {
                      echo '<p class="text-center">An error occurred. Please try again later.</p>';
                  }
              }
              ?>
          </div>
          </form>
        </div>
    </div>
  </section>
  
      <footer>
        <div class="social-icons">
            <!-- Replace the href values with your actual social media links -->
            <a href="https://www.facebook.com/max.sqwizzy?mibextid=b06tZ0" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/MediaBlac22274" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/__owuor?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtu.be/GDqglVYBC9Q?si=SkbfccBVCx9zpwin" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://api.whatsapp.com/send?phone=254758680112" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="rights">
            &copy; 2023 BlackWolf Media  |  All Rights Reserved.
        </div>
    </footer>

</body>

    <!-- JavaScript -->
    <script src="./script.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
