<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ARTISTIC | BLACKWOLF</title>
    <link rel="stylesheet" href="artistic.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <style>
      /* Additional CSS for the Explore button */
      .explore-button {
        text-align: center;
        margin-top: 20px;
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

      .hi-slide {
        max-width: 100%;
        height: auto;
        margin: 50px auto 0;
      }

      /* Add 3D rotation effect */
      .rotate-3d {
        perspective: 1000px;
        transform-style: preserve-3d;
        animation: rotate 15s linear infinite;
      }

      @keyframes rotate {
        0% {
          transform: perspective(1000px) rotateY(0);
        }
        100% {
          transform: perspective(1000px) rotateY(360deg);
        }
      }
    </style>
  </head>
  <body>
    <br />
    <br />
    <div class="slide hi-slide rotate-3d">
      <div class="hi-prev"></div>
      <div class="hi-next"></div>
      <ul>
        <li><img src="./artistic/1.jpg" alt="" /></li>
        <li><img src="./artistic/2.jpg" alt="" /></li>
        <li><img src="./artistic/3.jpg" alt="" /></li>
        <li><img src="./artistic/4.jpg" alt="" /></li>
        <li><img src="./artistic/5.jpg" alt="" /></li>
        <li><img src="./artistic/6.jpg" alt="" /></li>
        <li><img src="./artistic/7.jpg" alt="" /></li>
        <li><img src="./artistic/8.jpg" alt="" /></li>
        <li><img src="./artistic/9.jpg" alt="" /></li>
        <li><img src="./artistic/10.jpg" alt="" /></li>
        <li><img src="./artistic/11.jpg" alt="" /></li>
        <li><img src="./artistic/12.jpg" alt="" /></li>
      </ul>
    </div>

    <div class="container explore-button">
      <!-- Centered button wrapper -->
      <div class="centered-button-wrapper">
        <a href="javascript:goBackAndScrollTo('team-area')" class="btn-custom"
          >Explore</a
        >
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./jquery.hislide.js"></script>
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

  $(document).ready(function () {
    $(".slide").hiSlide();

    let isPaused = false;
    let timeout;

    // Function to toggle the animation
    function toggleAnimation() {
      if (isPaused) {
        resumeAnimation();
      } else {
        pauseAnimation();
      }
      isPaused = !isPaused;
    }

    // Function to pause the animation for 10 seconds
    function pauseAnimation() {
      const slider = document.querySelector(".rotate-3d");
      slider.style.animationPlayState = "paused";
      clearTimeout(timeout); // Clear any existing timeout
      timeout = setTimeout(resumeAnimation, 10000); // Pause for 10 seconds
    }

    // Function to resume the animation
    function resumeAnimation() {
      const slider = document.querySelector(".rotate-3d");
      slider.style.animationPlayState = "running";
    }

    if (window.innerWidth <= 768) {
      let currentIndex = 0;
      const slides = $(".hi-slide > ul > li");

      setInterval(() => {
        slides.removeClass("active");
        slides.eq(currentIndex).addClass("active");

        currentIndex = (currentIndex + 1) % slides.length;
      }, 3000); // Change slide every 3 seconds (adjust the interval as needed)
    }

    // Add click event listener to the slider for pausing
    const slider = document.querySelector(".rotate-3d");
    slider.addEventListener("click", toggleAnimation);
  });
</script>
  </body>
</html>
