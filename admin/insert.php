<?php
/* Attempt MySQL server connection. */
$dbc = mysqli_connect('localhost', 'root', 'root', 'fallrdac_pages') OR die('Could Not Connect Because: '.mysqli_connect_error());


// Escape user inputs for security
$title = mysqli_real_escape_string($dbc, $_POST['title']);
$description = mysqli_real_escape_string($dbc, $_POST['description']);
$body = mysqli_real_escape_string($dbc, $_POST['body']);
$leadimage = mysqli_real_escape_string($dbc, $_POST['leadimage']);
$author = mysqli_real_escape_string($dbc, $_POST['author']);
$plaintext = mysqli_real_escape_string($dbc, $_POST['plaintext']);

// attempt insert query execution
$sql = "INSERT INTO pages (title, description, body, leadimage, author, plaintext) VALUES ('$title', '$description', '$body', '$leadimage', '$author', '$plaintext')";
if(mysqli_query($dbc, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbc);
}


// close connection
mysqli_close($dbc);
?>
