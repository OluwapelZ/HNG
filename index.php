<?php
/**
 * Created by PhpStorm.
 * User: oluwapelumi
 * Date: 4/9/18
 * Time: 6:16 PM
 */
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="HNG Internship"/>
    <meta name="viewport" content="width=device-width,initial scale=1">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css">
    <title>InpireAway</title>
</head>
<body>
    <div class="home">
        <div class="container">
            <div class="navBarStyle top-right">
                <a href="#">Contact Us</a>
                <a class="inbetween">|</a>
                <a href="#">About Us</a>
            </div>
            <img src="public/img/background.png">
            <div class="date_time_position">
                <?php
                date_default_timezone_set("Africa/Lagos");
                ?>
                <a><?= date("h:i:sa"); ?></a> | <a><?= date("d-m-Y");?></a>
            </div>
        </div>
    </div>
</body>
</html>

