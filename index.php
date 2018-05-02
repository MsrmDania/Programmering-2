<?php 
//Disse to linier indsættes for at vise fejlmeddeleser for siden.
//Husk at udkommentere dem inden siden sættes i drift!
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', '1')

?>

<!DOCTYPE html>
<html lang="da">
<!--Anvendt Bootstrap skabeleon redigeret til eget behov-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programmeringsopgave</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/programmering.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
</head>

<body>
    <header>
        <!--Navigationsbar-->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!--Burgermenu-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar">
                            </span>
                        <span class="icon-bar">
                            </span>
                        <span class="icon-bar">
                            </span>
                        </button>
                    <!--Burgermenu Slut-->
                    <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-home"> </span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Beregner <span class="glyphicon glyphicon-pencil"></span></a>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Behind the Scenes <span class="glyphicon glyphicon-tasks"></span></a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="pagewrap">
    </div>
</body>

</html>
