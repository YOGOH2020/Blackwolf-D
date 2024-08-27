<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEDDING | BLACKWOLF</title>
    <link rel="stylesheet" href="./wedding.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <style>
      /* Additional CSS for the Explore button */
      .explore-button {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
      }

      .explore-button a {
        display: inline-block;
        background-color: #3a86ff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease, color 0.3s ease;
      }

      .explore-button a:hover {
        background-color: #27ae60;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="box">
        <div class="dream">
          <img src="./wedding/1.jpg" alt="" />
          <img src="./wedding/2.jpg" alt="" />
          <img src="./wedding/3.jpg" alt="" />
          <img src="./wedding/4.jpg" alt="" />
        </div>
        <div class="dream">
          <img src="./wedding/5.jpg" alt="" />
          <img src="./wedding/6.jpg" alt="" />
          <img src="./wedding/7.jpg" alt="" />
          <img src="./wedding/8.jpg" alt="" />
        </div>
        <div class="dream">
          <img src="./wedding/9.jpg" alt="" />
          <img src="./wedding/10.jpg" alt="" />
          <img src="./wedding/11.jpg" alt="" />
          <img src="./wedding/12.jpg" alt="" />
        </div>
      </div>

      <div class="container explore-button">
        <!-- Centered button wrapper -->
        <div class="centered-button-wrapper">
          <a href="javascript:goBackAndScrollTo('team-area')" class="btn-custom"
            >Explore</a
          >
        </div>
      </div>
    </div>
    <script>
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
