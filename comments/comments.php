<?php
    $lessonTitle    = "Comments";
    $homePage       = "PHP - " . $lessonTitle;
    $heading        = "Welcome to " . $lessonTitle;
    $brief          = "This lesson is talking about " . $lessonTitle . " and how to use it.";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $homePage;?></title>
    </head>
    <body>
        <h1><?php echo $heading; ?></h1>
        <p><?php echo $brief; ?></p>
        
    </body>
</html>