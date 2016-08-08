<?php include('config/setup.php');?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'template/header.php';?>
  <body>
    <div class="primary-container" id="posts">
      <!-- Home Modules -->
      <?php
        $init = "SELECT * FROM pages ORDER by ID DESC LIMIT 9";
        $initPosts = mysqli_query($dbc, $init);
        $posts = mysqli_fetch_assoc($initPosts);
        // Echo Out Latest Post
        echo
          '<div class="primary-module-wrapper">
            <a href="' . $posts["body"] . '" target="_blank" class="primary-module-link">
              <div class="primary-image-wrapper"></div>
              <div class="primary-module-image" data-lazy-load-image="' . $posts["leadimage"] . '" data-alt="' . $posts["title"] .' ">
                <noscript>
                  <img src="' . $posts["leadimage"] . '-mls.jpg">
                </noscript>
                <div class="gradient"></br></div>
              </div>
              <div class="primary-module-text-container">
                <div class="primary-title-text">' . $posts["title"] . '</div>
                <div class="secondary-title-text">' . $posts["description"] . '</div>
              </div>
            </a>
          </div>';
        // Loop to echo out next 8 posts
        while($posts = mysqli_fetch_assoc($initPosts)){
          echo
            '<div class="primary-module-wrapper">
              <div class="primary-image-wrapper"></div>
              <a href="' . $posts["body"] . '" target="_blank" class="primary-module-link">
              <div class="primary-module-image" data-lazy-load-image="' . $posts["leadimage"] . '" data-alt="' . $posts["title"] .' ">
                <noscript>
                  <img src="' . $posts["leadimage"] . '-mls.jpg">
                </noscript>
                <div class="gradient"></br></div>
              </div>
                <div class="primary-module-text-container">
                  <div class="primary-title-text">' . $posts["title"] . '</div>
                  <div class="secondary-title-text">' . $posts["description"] . '</div>
                </div>
              </a>
            </div>';
        }
      ?>
    </div>
    <!-- Search Splash-->
    <?php include 'template/searchbar.php';?>
    <!-- Footer -->
    <?php include 'template/footer.php';?>
    <script src="assets/js/index.js"></script>
  </body>
</html>
