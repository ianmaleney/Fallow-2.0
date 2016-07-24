<?php include('config/setup.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $site_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fallow Media is a creative publisher based in Dublin, Ireland.">
    <!-- Primary Stylesheet -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Address Bar Color for Mobile -->
    <meta name="theme-color" content="#111">
    <!-- RSS Feed -->
    <link rel="alternate" type="application/rss+xml" title="Fallow Media Latest Feed" href="http://fallowmedia.com/feed"/>
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="http://fallowmedia.com/favicon.ico"/>
    <link rel="icon" type="image/png" href="http://fallowmedia.com/favicon.png" />
    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous">
    </script>
  </head>
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
            <div class="primary-image-wrapper"></div>
            <a href="' . $posts["body"] . '" target="_blank" class="primary-module-link">
              <div class="primary-module-image">
                <img src="' . $posts["leadimage"] . '">
                <div class="gradient"></br></div>
              </div>
              <div class="primary-module-text-container">
                <div class="primary-text">' . $posts["title"] . '</div>
                <div class="secondary-text">' . $posts["description"] . '</div>
              </div>
            </a>
          </div>';
        // Loop to echo out next 8 posts
        while($posts = mysqli_fetch_assoc($initPosts)){
          echo
            '<div class="primary-module-wrapper">
              <div class="primary-image-wrapper"></div>
              <a href="' . $posts["body"] . '" target="_blank" class="primary-module-link">
                <div class="primary-module-image">
                  <img src="' . $posts["leadimage"] . '">
                  <div class="gradient"></br></div>
                </div>
                <div class="primary-module-text-container">
                  <div class="primary-text">' . $posts["title"] . '</div>
                  <div class="secondary-text">' . $posts["description"] . '</div>
                </div>
              </a>
            </div>';
        }
      ?>
    </div>
    <!-- Search Splash-->
    <div id="search-overlay" class="search-splash">
      <div class="search-wrapper">
        <form id="search-form" action="http://www.fallowmedia.com/searchresults.php" method="get">
          <input type="text" aria-labelledby="search-form" placeholder="Type &amp; Hit Enter..." Name="keywords" autocomplete="off">
        </form>
      </div>
    </div>
    <!-- Footer -->
    <footer>
      <div class="footer-container">
        <a href="" alt="Fallow Media" class="logo">
          <svg id="fallow-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 712.8 712.8"><title>Logo/Home Button</title><path d="M709.9 356.4L356.35 709.93 2.8 356.4 356.35 2.83zm-707.3-.2h707m-353 354V3.2m156 510h-313m311 0v-313m2 1h-313m2 0v312m193.7-117.9l117.1-.4m-78.2 39.3l78.2-.3m-39.3 39.2h39.3M396 317.4l-.3-117.1m39.2 78.2l-.3-78.2m39.2 39.3l.1-39.3M317.4 317.4l-117.1.3m78.2-39.2l-78.2.2m39.4-39.1l-39.4-.1m117.8 155.7l.4 117.1m-39.3-78.2l.3 78.2M240.3 473l-.1 39.3" class="a"/></svg>
        </a>
        <ul class="footer-menu">
          <li class="menu-item"><a href="#" target="_blank" class="menu-link">Projects</a></li>
          <li class="menu-item"><a href="#" target="_blank" class="menu-link">Shop</a></li>
          <li class="menu-item"><a href="#" target="_blank" class="menu-link">Donate</a></li>
          <li class="menu-item"><a id="search-button" onclick="reveal()" class="menu-link">Search</a></li>
        </ul>
        <div class="social">
          <a href="http://facebook.com/fallowmedia" target="_blank">
            <svg id="fb-icon" viewBox="0 0 67 67" xmlns="http://www.w3.org/2000/svg">
              <title>Facebook Icon & Link to Account</title>
              <path d="M28.765 50.32h6.744V33.998h4.499l.596-5.624h-5.095l.007-2.816c0-1.466.14-2.253 2.244-2.253h2.812V17.68h-4.5c-5.405 0-7.307 2.729-7.307 7.317v3.377h-3.369v5.625h3.369V50.32zM33 64C16.432 64 3 50.568 3 34 3 17.431 16.432 4 33 4s30 13.431 30 30c0 16.568-13.432 30-30 30z" fill-rule="evenodd" clip-rule="evenodd"/>
            </svg>
          </a>
          <a href="http://twitter.com/fallow__media" target="_blank">
            <svg id="tw-icon" viewBox="0 0 67 67" xmlns="http://www.w3.org/2000/svg">
              <title>Twitter Icon & Link to Account</title>
              <path d="M38.167 22.283c-2.619.953-4.274 3.411-4.086 6.101l.063 1.038-1.048-.127c-3.813-.487-7.145-2.139-9.974-4.915l-1.383-1.377-.356 1.017c-.754 2.267-.272 4.661 1.299 6.271.838.89.649 1.017-.796.487-.503-.169-.943-.296-.985-.233-.146.149.356 2.076.754 2.839.545 1.06 1.655 2.097 2.871 2.712l1.027.487-1.215.021c-1.173 0-1.215.021-1.089.467.419 1.377 2.074 2.839 3.918 3.475l1.299.444-1.131.678c-1.676.976-3.646 1.526-5.616 1.567-.944.021-1.719.106-1.719.17 0 .211 2.557 1.397 4.044 1.864 4.463 1.377 9.765.783 13.746-1.568 2.829-1.674 5.657-5 6.978-8.221.713-1.715 1.425-4.851 1.425-6.354 0-.975.063-1.102 1.236-2.267.692-.678 1.341-1.419 1.467-1.631.21-.403.188-.403-.88-.043-1.781.636-2.033.551-1.152-.402.649-.678 1.425-1.907 1.425-2.267 0-.063-.314.042-.671.233-.377.212-1.215.53-1.844.72l-1.131.361-1.027-.7c-.566-.381-1.361-.805-1.781-.932-1.069-.296-2.704-.254-3.668.085zM34 64C17.432 64 4 50.568 4 34 4 17.431 17.432 4 34 4s30 13.431 30 30c0 16.568-13.432 30-30 30z" fill-rule="evenodd" clip-rule="evenodd"/>
            </svg>
          </a>
          <a href="https://github.com/ianmaleney/Fallow-Media-2.0" target="_blank">
            <svg id="git-icon" viewBox="0 0 67 67" xmlns="http://www.w3.org/2000/svg">
              <title>Github Icon & Link to Account</title>
              <path d="M20.543 34.568c-.054 0 .592 1.367.61 1.367 1.41 2.516 4.128 4.08 8.713 4.514-.654.488-1.44 1.414-1.549 2.484-.823.523-2.478.696-3.764.297-1.803-.559-2.493-4.066-5.192-3.566-.584.107-.468.486.037.809.823.523 1.597 1.178 2.194 2.571.459 1.07 1.423 2.981 4.473 2.981 1.21 0 2.058-.143 2.058-.143s.023 2.731.023 3.793c0 1.225-1.682 1.57-1.682 2.159 0 .233.557.255 1.004.255.884 0 2.723-.725 2.723-1.998 0-1.011.017-4.41.017-5.006 0-1.3.709-1.712.709-1.712s.088 6.94-.169 7.872c-.302 1.094-.847.939-.847 1.427 0 .726 2.214.179 2.948-1.416.567-1.239.319-8.05.319-8.05l.605-.012s.034 3.117.013 4.542c-.021 1.476-.123 3.342.769 4.222.586.579 2.484 1.594 2.484.666 0-.539-1.04-.982-1.04-2.441v-6.715c.831 0 .706 2.208.706 2.208l.061 4.103s-.184 1.494 1.645 2.119c.645.223 2.025.283 2.09-.09.065-.373-1.662-.928-1.678-2.084-.01-.707.032-1.119.032-4.187 0-3.068-.419-4.202-1.88-5.106 4.508-.455 7.299-1.551 8.658-4.486.106.003.555-1.371.496-1.371.305-1.108.47-2.419.502-3.971-.008-4.21-2.058-5.699-2.451-6.398.58-3.187-.098-4.637-.412-5.135-1.162-.406-4.041 1.045-5.615 2.067-2.564-.737-7.986-.666-10.019.19-3.751-2.639-5.736-2.235-5.736-2.235s-1.283 2.259-.339 5.565c-1.234 1.546-2.154 2.64-2.154 5.539.001 1.634.197 3.096.638 4.372zM33 64C16.432 64 3 50.568 3 34 3 17.431 16.432 4 33 4s30 13.431 30 30c0 16.568-13.432 30-30 30z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
          </a>
        </div>
      </div>
    </footer>
    <script src="assets/js/index.js"></script>
  </body>
</html>
