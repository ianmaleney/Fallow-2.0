<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<title>Fallow Media | Search Results</title>
    
<?php include($_SERVER['DOCUMENT_ROOT'].'/config/css.php'); ?>

</head>
    
<body>
        
<!-- Header -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
        
<!-- Main Content -->
<div>
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
</div>

<!-- Search Results -->
<div id="searchresults">
    
    <div class="result-count container">
            Found <?php echo $query->num_rows; ?> results.
    </div>

    <?php if($query->num_rows) {
        while($r = $query->fetch_object()) {
        ?>
    
            <div class="container">
            <div class="result">
                <img src="<?php echo $r->leadimage; ?>" />
                <h3><a href="<?php echo $r->body; ?>"><?php echo $r->title; ?></a></h3>
                <p id="desc"><?php echo $r->description; ?></p>
                <p id="date">(Published: <?php $dtime = new DateTime($r->date);
                          echo $dtime->format("d-m-Y"); ?>, by <?php echo $r->author; ?>)</p>
            </div>
            </div>
    
        <?php } } } ?>
</div>
        
<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
    
        
</body>
</html>