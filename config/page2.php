<?php
include('setup.php');
// Load Second Batch
$load2 = "SELECT * FROM pages WHERE ID<(SELECT max(id)-12 FROM pages) ORDER by ID DESC LIMIT 9";
$results2 = mysqli_query($dbc, $load2);
$posts2 = mysqli_fetch_assoc($results2);
while($posts2 = mysqli_fetch_assoc($results2)){
  echo
  '<div class="primary-module-wrapper">
    <div class="primary-image-wrapper"></div>
    <a href="' . $posts2["body"] . '" target="_blank" class="primary-module-link">
    <div class="primary-module-image" data-lazy-load-image="' . $posts2["leadimage"] . '" data-alt="' . $posts2["title"] .' ">
      <noscript>
        <img src="' . $posts2["leadimage"] . '-mls.jpg">
      </noscript>
      <div class="gradient"></br></div>
    </div>
      <div class="primary-module-text-container">
        <div class="primary-title-text">' . $posts2["title"] . '</div>
        <div class="secondary-title-text">' . $posts2["description"] . '</div>
      </div>
    </a>
  </div>';
  }

?>

<script>
  lazy();
</script>
