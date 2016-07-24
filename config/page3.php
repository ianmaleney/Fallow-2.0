<?php
include('setup.php');
// Load Third Batch
$load3 = "SELECT * FROM pages WHERE ID<(SELECT max(id)-20 FROM pages) ORDER by ID DESC LIMIT 9";
$results3 = mysqli_query($dbc, $load3);
$posts3 = mysqli_fetch_assoc($results3);
while($posts3 = mysqli_fetch_assoc($results3)){
  echo
    '<div class="primary-module-wrapper">
      <div class="primary-image-wrapper"></div>
      <a href="' . $posts3["body"] . '" target="_blank" class="primary-module-link">
        <div class="primary-module-image">
          <img src="' . $posts3["leadimage"] . '">
          <div class="gradient"></br></div>
        </div>
        <div class="primary-module-text-container">
          <div class="primary-text">' . $posts3["title"] . '</div>
          <div class="secondary-text">' . $posts3["description"] . '</div>
        </div>
      </a>
    </div>';
  }
?>
