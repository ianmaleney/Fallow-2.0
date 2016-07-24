<?php include('setup.php');

$postQuery = "SELECT * FROM pages ORDER by ID DESC LIMIT 9";
$postResults = mysqli_query($dbc, $postQuery);
$posts = mysqli_fetch_assoc($postResults);
?>
