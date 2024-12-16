<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../src/assests/images/icons.png" type="images/png" />
  <title>Gallery</title>

  <link rel="stylesheet" href="../src/assests/css/faq.css" />
  <!-- <link rel="stylesheet" href="../src/assests/css/gallery.css" /> -->
  <link rel="stylesheet" href="../src/assests/css/index.css" />
  <linK rel="stylesheet" href="../src/assests/css/responsive.css" />

  <script src="../src/assests/javascript/index.js" defer></script>
  <script src="../src/assests/javascript/gallery.js" defer></script>
  <script src="../src/assests/javascript/imageSlider.js" defer></script>
</head>

<body>
  <section class="body_section">
    <section class="background_section">
      <!-- Header Section Starts -->
      <?php require('./header.php') ?>
      <!-- Header Section Ends Here -->
      <main>
        <section class="gallery_section">
          <section class="competition_achievement_images" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-sine">
            <section class="competition_achievement_images_slider">
              <img src="../src/assests/images/1.jpg" alt="karate.png" />
              <img src="../src/assests/images/2.jpg" alt="karate.png" />
              <img src="../src/assests/images/3.jpg" alt="karate.png" />
              <img src="../src/assests/images/14.jpg" alt="karate.png" />
              <img src="../src/assests/images/16.jpg" alt="karate.png" />
              <img src="../src/assests/images/19.jpg" alt="karate.png" />
              <img src="../src/assests/images/20.jpg" alt="karate.png" />
              <img src="../src/assests/images/21.jpg" alt="karate.png" />
              <img src="../src/assests/images/22.jpg" alt="karate.png" />
              <img src="../src/assests/images/23.jpg" alt="karate.png" />
              <img src="../src/assests/images/24.jpg" alt="karate.png" />
              <img src="../src/assests/images/25.jpg" alt="karate.png" />
              <img src="../src/assests/images/26.jpg" alt="karate.png" />
              <img src="../src/assests/images/13.jpg" alt="karate.png" />
            </section>
          </section>

          <section class="competition_achievement_images_popup">
            <section class="competition_achievement_image_details">
              <section class="competition_achievement_image">
                <img src="./src/assests/images/our_achievement1.jpeg" alt="karate.png" class="large_image" />
              </section>

              <section class="competition_achievement_images_controls">
                <section class="competition_achievement_images_control prev_slide">&#9668;</section>
                <section class="competition_achievement_images_control next_slide">&#9658;</section>
              </section>
            </section>
          </section>

          <section class="competition_images_buttons">
            <section class="competition_images_button load_more">
              <button>Load More Images</button>
            </section>

            <section class="competition_images_button load_less hidden">
              <button>Load Less Images</button>
            </section>
          </section>
        </section>
      </main>

      <!-- Footer Section Starts -->
      <?php require('./footer.php') ?>
      <!-- Footer Section Ends Here -->
    </section>
  </section>
</body>

</html>