<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'template/header.php';?>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="primary-container info-page-container">
      <a href="/index.php" alt="Fallow Media" class="logo header-logo">
        <svg id="fallow-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 712.8 712.8">
          <title>Logo/Home Button</title>
          <path d="M709.9 356.4L356.35 709.93 2.8 356.4 356.35 2.83zm-707.3-.2h707m-353 354V3.2m156 510h-313m311 0v-313m2 1h-313m2 0v312m193.7-117.9l117.1-.4m-78.2 39.3l78.2-.3m-39.3 39.2h39.3M396 317.4l-.3-117.1m39.2 78.2l-.3-78.2m39.2 39.3l.1-39.3M317.4 317.4l-117.1.3m78.2-39.2l-78.2.2m39.4-39.1l-39.4-.1m117.8 155.7l.4 117.1m-39.3-78.2l.3 78.2M240.3 473l-.1 39.3" class="a"/>
        </svg>
      </a>
      <!-- Main Content -->
      <section class="info-section">
        <?php
          require_once $_SERVER['DOCUMENT_ROOT'].'/config/setup.php';
          if(isset($_GET['keywords'])) {
            $keywords = $dbc->escape_string($_GET['keywords']);
            $query = $dbc->query("
              SELECT *
              FROM pages
              WHERE body LIKE '%{$keywords}%'
              OR title LIKE '%{$keywords}%'
              OR description LIKE '%{$keywords}%'
              OR author LIKE '%{$keywords}%'
              OR plaintext LIKE '%{$keywords}%'
              ORDER BY date DESC
            ");
        ?>
        <!-- Search Results -->
        <div class="searchresults">
          <!-- Number of results -->
          <h1>Found <?php echo $query->num_rows; ?> results for "<?php echo $keywords ?>":</h1>
          <!-- Begin Query -->
          <?php if($query->num_rows) {
              while($r = $query->fetch_object()) {
          ?>
          <div class="primary-module-wrapper search-result">
            <div class="primary-image-wrapper"></div>
            <a href="<?php echo $r->body; ?>" target="_blank" class="primary-module-link">
              <div class="primary-module-image" data-lazy-load-image="<?php echo $r->leadimage; ?>" data-alt="<?php echo $r->title; ?>">
                <noscript>
                  <img src="<?php echo $r->leadimage; ?>-mls.jpg">
                </noscript>
                <div class="gradient"></br></div>
              </div>
              <div class="primary-module-text-container">
                <div class="primary-title-text"><?php echo $r->title; ?></div>
                <div class="secondary-title-text"><?php echo $r->description; ?></div>
              </div>
            </a>
          </div>
          <?php } } } ?>
        </div>
      </section>
    </div>
    <!-- Search Splash-->
    <?php include 'template/searchbar.php';?>
    <!-- Footer -->
    <?php include 'template/footer.php';?>
    <script src="assets/js/index.js"></script>
  </body>
</html>
