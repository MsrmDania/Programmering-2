<?php 
//Disse to linier indsættes for at vise fejlmeddeleser for siden.
//Husk at udkommentere dem inden siden sættes i drift!
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', '1')

 include("opendb.php");
    $sql = 'SELECT dyrtype, dyrtekst FROM Pets LIMIT 50';
    //echo "sql: " . $sql; //udkommenteres når vi har tjekket at det virker
    $resultat = mysqli_query($conn, $sql); //hent værdier og læg dem i $resultat, så kan vi bruge dem senere

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
    <div id="pagewrap">
        <header>
            <h1>Kæledyr</h1>
        </header>
        <form name="dyr_form" method="post" action="behandl_dyr.php">
            <fieldset>
                <legend>Mine kæledyr</legend>
                <label>Typer af kæledyr:</label><br>
                <select id="dyrType" name="dyrType">
                        <option value="Kat">Kat</option>
                        <option value="Hund">Hund</option>
                        <option value="Fugl">Fugl</option>
                        <option value="Fisk">Fisk</option>
                        <option value="Øgle">Øgle</option>
                        <option value="Slange">Slange</option>
                        <option value="Skildpadde">Skildpadde</option>
                        <option value="Gnaver">Gnaver</option>
                        <option value="Kanin">Kanin</option>
                        <option value="Marsvin">Marsvin</option>
                        <option value="Hamster">Hamster</option>
                        <option value="Hest">Hest</option>
                        <option value="Andet">Andet</option>
                    </select><br>
                <label>Kæledyrs alder:</label><br>
                <select id="dyrAlder" name="dyrAlder">
                        <option value="0-2">0 - 2 År</option>
                        <option value="2-4">2 - 4 År</option>
                        <option value="4-6">4 - 6 År</option>
                        <option value="6-8">6 - 8 År</option>
                        <option value="8-10">8 - 10 År</option>
                        <option value="10-14">10 - 14 År</option>
                        <option value="14-18">14 - 18 År</option>
                        <option value="18-22">18 - 22 År</option>
                        <option value="22-26">22 - 26 År</option>
                        <option value="26-30">26 - 30 År</option>
                        <option value="Over30">Over 30 År</option>
                    </select><br>
                <label>Køn:</label><br>
                <select id="dyrSex" name="dyrSex">
                        <option value="Han">Han</option>
                        <option value="Hun">Hun</option>
                        <option value="VedIkke">Ved Ikke</option>
                    </select><br>
                <label>Navn på kæledyr:</label><br>
                <textarea id="dyrTekst" name="dyrTekst"></textarea><br>
                <br>
                <button type="submit" value="submit">Indsend</button>
            </fieldset>
        </form>
        <section id="pets_form">
            <?php while ($r = mysqli_fetch_array($resultat)) { //En while-løkke der lægger hver række i $r
                            echo '<section class=""><h3>' . $r['dyrtype'] . '</h3><p>' . $r['dyrtekst'] . '</p></section>';
                        } 
                 ?>
        </section>
        <footer>
            <p>&copy; Copyright Maiken Mikkelsen, Anders Vinther, Gurli Tonsberg</p>
        </footer>
    </div>
    <!-- pagewrap -->
</body>

</html>
