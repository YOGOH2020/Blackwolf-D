<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OUTDOOR | BLACKWOLF</title>
    <link rel="stylesheet" href="outdoor.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <style>
      /* Additional CSS for the Explore button */
      .explore-button {
        text-align: center;
        margin-top: 300px;
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

      /* Adjust positioning for the button */
      .button-container {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="slider">
      <span style="--i: 1"><img src="./outdoor/1.jpg" alt="" /></span>
      <span style="--i: 2"><img src="./outdoor/2.jpg" alt="" /></span>
      <span style="--i: 3"><img src="./outdoor/3.jpg" alt="" /></span>
      <span style="--i: 4"><img src="./outdoor/4.jpg" alt="" /></span>
      <span style="--i: 5"><img src="./outdoor/5.jpg" alt="" /></span>
      <span style="--i: 6"><img src="./outdoor/6.jpg" alt="" /></span>
      <span style="--i: 7"><img src="./outdoor/7.jpg" alt="" /></span>
      <span style="--i: 8"><img src="./outdoor/8.jpg" alt="" /></span>
      <span style="--i: 9"><img src="./outdoor/9.jpg" alt="" /></span>
      <span style="--i: 10"><img src="./outdoor/10.jpg" alt="" /></span>
      <span style="--i: 11"><img src="./outdoor/11.jpg" alt="" /></span>
      <span style="--i: 12"><img src="./outdoor/12.jpg" alt="" /></span>
    </div>

    <div class="container explore-button">
      <!-- Centered button wrapper -->
      <div class="centered-button-wrapper">
        <a href="javascript:goBackAndScrollTo('team-area')" class="btn-custom"
          >Explore</a
        >
      </div>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  let isPaused = false;

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
    slider.style.animationPlayState = "paused";
    setTimeout(resumeAnimation, 10000); // Pause for 10 seconds
  }

  // Function to resume the animation
  function resumeAnimation() {
    slider.style.animationPlayState = "running";
  }

  // Add a click event listener to the slider
  slider.addEventListener("click", toggleAnimation);
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
