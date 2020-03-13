<?php
    $lessonTitle    = "Concatination";
    $homePage       = "PHP - " . $lessonTitle;
    $heading        = "Welcome to " . $lessonTitle;
    $brief          = "This lesson is talking about " . $lessonTitle . " and how to use it.";
    $languages      = "<ul>";
    $languages      .= "<li>PHP</li>";
    $languages      .= "<li>HTML</li>";
    $languages      .= "<li>CSS</li>";
    $languages      .= "<li>JavaScript</li>";
    $languages      .= "</ul>";
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
        <h2>The languages i love</h2>
        
        <?php echo $languages;?>
        
    </body>
</html>