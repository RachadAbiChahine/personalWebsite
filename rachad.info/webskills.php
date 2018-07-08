<?php
include './fonction.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="dc.date.modified" content="2016-08-07">
        <meta name="author" content="Rachad ABI CHAHINE">
        <script src="jquery-2.2.4.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/circle.css">
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-82073496-1', 'auto');
            ga('send', 'pageview');

        </script>

        <link rel="icon" href="12072775_10154137280210288_4332863429938732608_n.jpg" />

        <title>web skills</title>

    </head>
    <body class="container" style="height:100%; background-color:rgb(135,80,156)">
        <h1 class="text-center" style="color: orange">Web skills</h1>
        <div class="margin-top-30px col-xs-12"></div>
        <div class="col-xs-8 col-xs-offset-2">   
            <?= skills("HTML / HTML5", 90); ?>
            <?= skills("CSS / CSS3", 70); ?>
            <?= skills("Bootstrap", 80); ?>
            <?= skills("JS", 25); ?>
            <?= skills("Bootstrap", 80); ?>
            <?= skills("PHP", 80); ?>
            <?= skills("Yii2", 70); ?>
            <?= skills("Symfony2", 55); ?>
            <?= skills("Twig", 70); ?>
            <?= skills("SQL", 70); ?>
            <?= skills("Doctrine", 80); ?>
            <?= skills("ActiveRecord", 75); ?>
            <?= skills("PL/SQL", 45); ?>
        </div>
    </body>
</html>
