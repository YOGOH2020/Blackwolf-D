<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CORPRATE | BLACKWOLF</title>
    <link rel="stylesheet" href="corp.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
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
    <div class="gallery-container">
      <div class="gallery-item" data-index="1">
        <img src="./corporate/1.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="2">
        <img src="./corporate/2.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="3">
        <img src="./corporate/3.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="4">
        <img src="./corporate/4.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="5">
        <img src="./corporate/5.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="6">
        <img src="./corporate/6.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="7">
        <img src="./corporate/7.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="8">
        <img src="./corporate/8.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="9">
        <img src="./corporate/9.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="10">
        <img src="./corporate/10.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="11">
        <img src="./corporate/11.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="12">
        <img src="./corporate/12.jpg" alt="" />
      </div>
    <div class="gallery-item" data-index="13">
        <img src="./corporate/corp1.jpg" alt="" />
        </div>
     <div class="gallery-item" data-index="14">
        <img src="./corporate/corp2.jpg" alt="" />
      </div>
    <div class="gallery-item" data-index="15">
        <img src="./corporate/corp3.jpg" alt="" />
      </div>
      <div class="gallery-item" data-index="16">
        <img src="./corporate/corp4.jpg" alt="" />
      </div>
       <div class="gallery-item" data-index="17">
        <img src="./corporate/corp5.jpg" alt="" />
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

      const galleryItem = document.getElementsByClassName("gallery-item");
      const lightBoxContainer = document.createElement("div");
      const lightBoxContent = document.createElement("div");
      const lightBoxImg = document.createElement("img");
      const lightBoxPrev = document.createElement("div");
      const lightBoxNext = document.createElement("div");

      lightBoxContainer.classList.add("lightbox");
      lightBoxContent.classList.add("lightbox-content");
      lightBoxPrev.classList.add("fa", "fa-angle-left", "lighbox-prev");
      lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

      lightBoxContainer.appendChild(lightBoxContent);
      lightBoxContent.appendChild(lightBoxImg);
      lightBoxContent.appendChild(lightBoxPrev);
      lightBoxContent.appendChild(lightBoxNext);

      document.body.appendChild(lightBoxContainer);

      let index = 1;

      function showLightBox(n) {
        if (n > galleryItem.length) {
          index = 1;
        } else if (n < 1) {
          index = galleryItem.length;
        }

        let imageLocation =
          galleryItem[index - 1].children[0].getAttribute("src");
        lightBoxImg.setAttribute("src", imageLocation);
      }

      function currentImage() {
        lightBoxContainer.style.display = "block";

        let imageIndex = parseInt(this.getAttribute("data-index"));
        showLightBox((index = imageIndex));
      }

      for (let i = 0; i < galleryItem.length; i++) {
        galleryItem[i].addEventListener("click", currentImage);
      }

      function sliderImage(n) {
        showLightBox((index += n));
      }

      function prevImage() {
        sliderImage(-1);
      }

      function nextImage() {
        sliderImage(1);
      }

      lightBoxPrev.addEventListener("click", prevImage);
      lightBoxNext.addEventListener("click", nextImage);

      function closeLightBox() {
        if (this === event.target) {
          lightBoxContainer.style.display = "none";
        }
      }

      lightBoxContainer.addEventListener("click", closeLightBox);
    </script>
  </body>
</html>
