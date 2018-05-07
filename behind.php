<!DOCTYPE html>
<html lang="da">
<!--Anvendt Bootstrap skabeleon redigeret til eget behov-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>Programmeringsopgave</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type=image/x-icon>
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/programmering.js"></script>
    <script src="js/formvalidering.js"></script>
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
                    <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"> </span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Mine Kæledyr <span class="glyphicon glyphicon-pencil"></span></a>-->
                        <li><a href="index.php">Mine Kæledyr <span class="fa fa-paw"></span></a></li>
                        <li class="active"><a href="behind.php">Behind the Scenes <span class="glyphicon glyphicon-tasks"></span></a></li>
                        <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Behind the Scenes <span class="glyphicon glyphicon-tasks"></span></a>-->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="pagewrap">
        <div id="video_behind">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/IZ3hgmqUfew?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div id="behind_tekst">
            <p>Vi har valgt at lave en side, hvor man kan registrere kæledyr. Siden optager cookies for den individuelle<br>bruger og brugeren alarmeres igennem en cookiemeddelelse første gang de besøger hjemmesiden.</p>
            <p>Sidens formular består af 8 selectors og 3 indtastningsfelter, som alle har validering for at sikre at alle<br>felterne er udfyldt, før de bliver sendt til databasen.</p>
            <p>Formularen kan først indsendes til databasen når alle felter er udfyldt, dette vises brugeren ved at indsend<br>knappen først er tilgængelig, når brugeren har udfyldt alle felter. Derefter bliver en sætning genereret ud<br>fra brugerens svar, som dukker op nederst på siden som en registrering.</p>
            <p>Sidens validering er bygget sådan, at hvis et svar ikke er valid bliver det relevante felt oplyst i rødt.<br>Brugerens aktive felt er gult og et valid svar ville blive oplyst i grønt.</p>
            <p>Dette er til for at kommunikere til brugeren om deres fremskridt i formularen, og for at give dem besked,<br>hvis de mangler at udfylde et felt eller hvis noget der at valgt tæller som et invalid svar. </p>
            <p>Vi har valgt at kun nogen dataene bliver vist på siden efter at formularen er blevet udfyldt. Bl.a. har vi valgt<br>udlade information såsom om dyret er vaccineret.</p>
            <p>Formularen står i single column for at gøre den letlæselig og for at hjælpe på tastehastighed for brugeren.<br> Label står over indtastningsfelterne og selectors af samme grund. Vi har valgt at designet skal være enkelt<br>og med bløde, lyse farver.</p>
            <p>Forbedringer som kunne laves på siden, kunne bestå af muligheden for flere selectors og indtastningsfelter<br>for at få mere konkret data, og at sørge for at inputfelterne er anderledes fra dyr til dyr, så alle<br>valgmuligheder giver mening til dyret.</p>
            <p>Her kunne der bl.a. være anskaffelses år, født år, døds år, stamtavlenummer og mulighed for at uploade dokumenter mm.</p>
            <p>Funktionelle forbedringen af siden, kunne bestå et login system, så at brugeren har muligheden for at<br>håndtere deres kæledyr, slette og rette i værdierne.</p>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Tilbage til toppen">Top</button>
    </div>
    <footer>
        <p>&copy; Copyright Maiken Mikkelsen, Anders Vinther, Gurli Tonsberg</p>
        <script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js" data-bg="#272627" data-fg="#FFFFFF" data-link="#c1c1c1" data-linkmsg="Mere info" data-message="På vores website bruges cookies til at huske dine indstillinger. Ved fortsat brug af websiden godkender du cookiepolitikken." data-cookie="CookieInfoScript" data-text-align="left" data-close-text="OK!">


        </script>

    </footer>

</body>
