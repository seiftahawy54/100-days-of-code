<?php
    $pageTitle = "Operators in PHP";
    $homePage  = "PHP - " . $pageTitle;
    $heading   = "Welcome to " . $pageTitle;
    $brief     = "This lesson is talking about " . $pageTitle . " and how to use it.";
    $siteLanguage = "Arabic";

    if ($siteLanguage == "English") {
        $lang1     = "Hello ";
        $lang2     = "World ";
    } elseif ( $siteLanguage == "Arabic") {
        $lang1     = "مرحبا ";
        $lang2     = "بالعالم ";
    } else {
        $lang1     = "Unknown ";
        $lang2     = "Language ";
    }
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $pageTitle ?></title>
    </head>
    <body>
        <h1><?php echo $heading; ?></h1>
        <p><?php echo $brief; ?></p>
        <h1><?php echo $lang1 . $lang2; ?></h1>
    </body>
</html>
