<?php 
//Disse to linier indsættes for at vise fejlmeddeleser for siden.
//Husk at udkommentere dem inden siden sættes i drift!
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', '1')
?>

<?php

 include("opendb.php");
    $sql = 'SELECT dyrType, dyrAlder, dyrSex, dyrTekst FROM pets LIMIT 50';
    //echo "sql: " . $sql; //udkommenteres når vi har tjekket at det virker
    $resultat = mysqli_query($conn, $sql); //hent værdier og læg dem i $resultat, så kan vi bruge dem senere
    //$resultat = mysqli_query($conn, 'SELECT dyrType, dyrAlder, dyrSex, dyrTekst FROM pets LIMIT 50');



?>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/programmering.js"></script>
        <script src="js/formvalidering.js"></script>
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
                        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"> </span></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Mine Kæledyr <span class="glyphicon glyphicon-pencil"></span></a>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Behind the Scenes <span class="glyphicon glyphicon-tasks"></span></a>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="pagewrap">
            <header>
                <h1>Kæledyrs Registrering</h1>
            </header>
            <form name="dyr_form" method="post" action="behandl_dyr.php">
                <fieldset>
                    <legend>Mine kæledyr</legend>
                    <label>Typer af kæledyr:</label><br>
                    <span id='fejltekst'></span>
                    <select id="dyrType" name="dyrType" onblur="dyrTypeOnBlurValidering()">
                        <option value="0">Vælg kæledyr</option>
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
                    <label>Kæledyrets race:</label><br>
                    <span id='fejltekst'></span>
                    <textarea id="dyrRace" name="dyrRace"></textarea><br>
                    <br>
                    <label>Kæledyrs alder:</label><br>
                    <span id='fejltekst'></span>
                    <select id="dyrAlder" name="dyrAlder" onblur="dyrAlderOnBlurValidering()">
                        <option value="0">Vælg alder</option>
                        <option value="0 - 2 år">0 - 2 År</option>
                        <option value="2 - 4 år">2 - 4 År</option>
                        <option value="4-6">4 - 6 År</option>
                        <option value="6-8">6 - 8 År</option>
                        <option value="8-10">8 - 10 År</option>
                        <option value="10-14">10 - 14 År</option>
                        <option value="14-18">14 - 18 År</option>
                        <option value="18-22">18 - 22 År</option>
                        <option value="22-26">22 - 26 År</option>
                        <option value="26-30">26 - 30 År</option>
                        <option value="Over 30">Over 30 År</option>
                    </select><br>
                    <label>Kæledyrs vægt:</label><br>
                    <span id='fejltekst'></span>
                    <select id="dyrVaegt" name="dyrVaegt" onblur="dyrAlderOnBlurValidering()">
                        <option value="0">Vælg vægt</option>
                        <option value="0-2">0 - 2 Kg</option>
                        <option value="2-4">2 - 4 Kg</option>
                        <option value="4-6">4 - 6 Kg</option>
                        <option value="6-8">6 - 8 Kg</option>
                        <option value="8-10">8 - 10 Kg</option>
                        <option value="10-20">10 - 20 Kg</option>
                        <option value="20-30">20 - 30 Kg</option>
                        <option value="30-50">30 - 50 Kg</option>
                        <option value="50-75">50 - 75 Kg</option>
                        <option value="75-100">75 - 100 Kg</option>
                        <option value="100-150">100 - 150 Kg</option>
                        <option value="150-200">150 - 200 Kg</option>
                        <option value="200-250">200 - 250 Kg</option>
                        <option value="250-300">250 - 300 Kg</option>
                        <option value="Over300">Over 300 Kg</option>
                    </select><br>
                    <label>Kæledyrets yndlingsfoder:</label><br>
                    <span id='fejltekst'></span>
                    <select id="dyrMad" name="dyrMad" onblur="dyrSexOnBlurValidering()">
                        <option value="0">Vælg foder</option>
                        <option value="Tørfoder">Tørfoder</option>
                        <option value="Vådfoder">Vådfoder</option>
                        <option value="Halm">Hø, halm og grønt</option>
                        <option value="Ved Ikke">Ved Ikke</option>
                    </select><br>
                    <label>kæledyrets bopæl:</label><br>
                    <span id='fejltekst'></span>
                    <select id="dyrBo" name="dyrBo" onblur="dyrSexOnBlurValidering()">
                        <option value="0">Vælg bopæl</option>
                        <option value="I byen">I byen</option>
                        <option value="På landet">På landet</option>
                        <option value="Ved Ikke">Ved Ikke</option>
                    </select><br>
                    <label>Kæledyrets yndlingsfoder:</label><br>
                    <span id='fejltekst'></span>
                    <select id="dyrSex" name="dyrSex" onblur="dyrSexOnBlurValidering()">
                        <option value="0">Vælg foder</option>
                        <option value="Tørfoder">Tørfoder</option>
                        <option value="Vådfoder">Vådfoder</option>
                        <option value="Halm">Hø, halm og grønt</option>
                        <option value="Ved Ikke">Ved Ikke</option>
                    </select><br>
                    <label>Navn på kæledyr:</label><br>
                    <span id='fejltekst'></span>
                    <textarea id="dyrTekst" name="dyrTekst" onblur="dyrTekstOnBlurValidering()"></textarea><br>
                    <br>
                    <label>Ejers navn:</label><br>
                    <span id='fejltekst'></span>
                    <textarea id="dyrEjer" name="dyrEjer"></textarea><br>
                    <br>
                    <button type="submit" value="submit">Indsend</button>
                </fieldset>
            </form>
            <section id="pets_form">
                <?php while ($r = mysqli_fetch_array($resultat, MYSQLI_ASSOC)) { //En while-løkke der lægger hver række i $r
                            echo '<section class=""><h3>' . $r['dyrType'] . ", " . $r['dyrAlder'] . ", " . $r['dyrSex'] . '</h3><h4>' . $r['dyrTekst'] . '</h4></section>';
                        } 
                 ?>
            </section>
        </div>
        <!-- pagewrap -->
        <footer>
            <p>&copy; Copyright Maiken Mikkelsen, Anders Vinther, Gurli Tonsberg</p>
        </footer>
    </body>


    </html>
