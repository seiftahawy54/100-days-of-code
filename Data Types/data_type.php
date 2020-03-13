<?php
    $lessonTitle    = "Data Types";
    $homePage       = "PHP - " . $lessonTitle;
    $heading        = "Welcome to " . $lessonTitle;
    $brief          = "This lesson is talking about " . $lessonTitle . " and how to use it.";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $lessonTitle;?></title>
    </head>
    <body>
        <h1><?php echo $heading; ?></h1>
        <p><?php echo $brief; ?></p>
    </body>
</html>