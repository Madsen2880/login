<?php
    require_once '../database.php';

    $output = $conn->newQuery()
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php?p=home"><img src="/img/news-logo.jpg" alt="Side logo" height="70" width="70"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?p=home">My News <span class="sr-only">(current)</span></a></li>
                    <li><a href="index.php?p=andetNyt">Andet nyt</a></li>
                    <li><a href="index.php?p=logind">Log ind</a></li>
                </ul>
                <form class="navbar-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Søg</button>
                </form>

            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>

<div class="container">

    <h2>Welcome</h2>
    <h3>You have now logged in to your admin panel</h3>
    <hr>
    <br>
    <h3>Here's an overview of your articles:</h3>

    <?php

    $showart = $conn->prepare('SELECT id,heading,content,createt,picture FROM articles');
    $showart->execute();




    ?>




</div>