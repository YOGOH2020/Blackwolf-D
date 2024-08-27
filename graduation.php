<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GRADUATION | BLACKWOLF</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="jquery.flipster.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
      /* Add custom CSS for responsiveness and background */
      body {
        background-color: #0c1022;
      }

      .container {
        padding: 20px;
      }

      .hero {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #0c1022;
        overflow: hidden;
      }

      .carousel {
        width: 100%; /* Make the carousel full width */
        max-width: 600px; /* Limit the maximum width for larger screens */
      }

      .carousel img {
        max-width: 100%;
        -webkit-box-reflect: below 20px
          linear-gradient(rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.3));
      }

      /* Centered button wrapper */
      .centered-button-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
      }

      /* Button styling */
      .btn-custom {
        background-color: #fff; /* Button background color */
        color: #5d9aa6; /* Button text color */
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease, color 0.3s ease;
      }

      .btn-custom:hover {
        background-color: #5d9aa6; /* Hover background color */
        color: #fff; /* Hover text color */
      }
    </style>
  </head>
  <body>
    <div class="hero">
      <div class="carousel">
        <ul>
          <li><img src="./graduation/1.jpg" alt="" /></li>
          <li><img src="./graduation/2.jpg" alt="" /></li>
          <li><img src="./graduation/3.jpg" alt="" /></li>
          <li><img src="./graduation/2.jpg" alt="" /></li>
          <li><img src="./graduation/5.jpg" alt="" /></li>
          <li><img src="./graduation/6.jpg" alt="" /></li>
          <li><img src="./graduation/7.jpg" alt="" /></li>
          <li><img src="./graduation/8.jpg" alt="" /></li>
          <li><img src="./graduation/9.jpg" alt="" /></li>
          <li><img src="./graduation/10.jpg" alt="" /></li>
          <li><img src="./graduation/11.jpg" alt="" /></li>
          <li><img src="./graduation/12.jpg" alt="" /></li>
        </ul>
      </div>
    </div>

    <div class="container">
      <!-- Centered button wrapper -->
      <div class="centered-button-wrapper">
        <a href="javascript:goBackAndScrollTo('team-area')" class="btn-custom"
          >Explore</a
        >
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Flipster script -->
    <script src="./jquery.flipster.min.js"></script>
    <script>
      // Wrap your script in a document ready function to ensure the DOM is loaded
      $(document).ready(function () {
        $(".carousel").flipster({
          style: "carousel",
          spacing: -0.3,
        });
      });
      function goBackAndScrollTo(sectionId) {
        // Check if the referring page is available
        if (document.referrer) {
          // Navigate back to the referring page
          window.location.href = document.referrer + "#" + sectionId;
        } else {
          // If there's no referring page, simply scroll to the section
          const section = document.getElementById(sectionId);
          if (section) {
            section.scrollIntoView({ behavior: "smooth" });
          }
        }
      }
    </script>
  </body>
</html>
