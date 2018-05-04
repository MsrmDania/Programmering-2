<?php
session_start();
//Disse to linier indsættes for at vise fejlmeddeleser for siden.
//Husk at udkommentere dem inden siden sættes i drift!
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', '1')
?>

    <?php

 include("opendb.php");
    $sql = 'SELECT dyrType, dyrRace, dyrAlder, dyrVaegt, dyrMad, dyrBo, dyrVacc, dyrFarve, dyrSex, dyrTekst, dyrEjer FROM pets LIMIT 50';
    //$sql =  'SELECT * FROM pets LIMIT 50';
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
            <link rel="shortcut icon" href="img/favicon.ico" type=image/x-icon>
            <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/programmering.js"></script>
        </head>

        <body onload="checkCookie()">
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
                                <li class="active"><a href="index.php">Mine Kæledyr <span class="fa fa-paw"></span></a></li>
                                <li><a href="behind.php">Behind the Scenes <span class="glyphicon glyphicon-tasks"></span></a></li>
                                <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Behind the Scenes <span class="glyphicon glyphicon-tasks"></span></a>-->
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!--Navbar Slut-->
            <div id="pagewrap">
                <header>
                    <h1>Kæledyrs Registrering</h1>
                </header>
                <form name="dyr_form" method="post" action="behandl_dyr.php">
                    <fieldset>
                        <legend>Mine kæledyr</legend>

                        <!--Kæledyrs Type Start-->
                        <label>Typer af kæledyr:</label><br>
                        <?PHP if (!empty($formErrors['dyrType'])) echo '<b>'.$formErrors['dyrType'].'</b>'; ?>
                        <select id="dyrType" name="dyrType" required>
                        <option value="">Vælg kæledyr</option>
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
                        <hr>

                        <!--Kæledyrs Race Start-->
                        <label>Kæledyrets race:</label><br>
                        <?PHP if (!empty($formErrors['dyrRace'])) echo '<b>'.$formErrors['dyrRace'].'</b>'; ?>
                        <input onkeyup="onBlurValidRace()" id="dyrRace" name="dyrRace" required><br>
                        <br>
                        <hr>

                        <!--Kæledyrs Alder Start-->
                        <label>Kæledyrs alder:</label><br>
                        <?PHP if (!empty($formErrors['dyrAlder'])) echo '<b>'.$formErrors['dyrAlder'].'</b>'; ?>
                        <select id="dyrAlder" name="dyrAlder" required>
                        <option value="">Vælg alder</option>
                        <option value="0 - 2 år">0 - 2 År</option>
                        <option value="2 - 4 år">2 - 4 År</option>
                        <option value="4 - 6 år">4 - 6 År</option>
                        <option value="6 - 8 år">6 - 8 År</option>
                        <option value="8 - 10 år">8 - 10 År</option>
                        <option value="10 - 14 år">10 - 14 År</option>
                        <option value="14 - 18 år">14 - 18 År</option>
                        <option value="18 - 22 år">18 - 22 År</option>
                        <option value="22 - 26 år">22 - 26 År</option>
                        <option value="26 - 30 år">26 - 30 År</option>
                        <option value="Over 30 år">Over 30 År</option>
                    </select><br>
                        <hr>

                        <!--Kæledyrs Vægt Start-->
                        <label>Kæledyrs vægt:</label><br>
                        <?PHP if (!empty($formErrors['dyrVaegt'])) echo '<b>'.$formErrors['dyrVaegt'].'</b>'; ?>
                        <select id="dyrVaegt" name="dyrVaegt" required>
                        <option value="">Vælg vægt</option>
                        <option value="0 - 2 kg">0 - 2 Kg</option>
                        <option value="2 - 4 kg">2 - 4 Kg</option>
                        <option value="4 - 6 kg">4 - 6 Kg</option>
                        <option value="6 - 8 kg">6 - 8 Kg</option>
                        <option value="8 - 10 kg">8 - 10 Kg</option>
                        <option value="10 - 20 kg">10 - 20 Kg</option>
                        <option value="20 - 30 kg">20 - 30 Kg</option>
                        <option value="30 - 50 kg">30 - 50 Kg</option>
                        <option value="50 - 75 kg">50 - 75 Kg</option>
                        <option value="75 - 100 kg">75 - 100 Kg</option>
                        <option value="100 - 150 kg">100 - 150 Kg</option>
                        <option value="150 - 200 kg">150 - 200 Kg</option>
                        <option value="200 - 250 kg">200 - 250 Kg</option>
                        <option value="250 - 300 kg">250 - 300 Kg</option>
                        <option value="Over 300 kg">Over 300 Kg</option>
                    </select><br>
                        <hr>

                        <!--Kæledyrs Mad Start-->
                        <label>Kæledyrets yndlingsfoder:</label><br>
                        <?PHP if (!empty($formErrors['dyrMad'])) echo '<b>'.$formErrors['dyrMad'].'</b>'; ?>
                        <select id="dyrMad" name="dyrMad" required>
                        <option value="">Vælg foder</option>
                        <option value="tørfoder">Tørfoder</option>
                        <option value="vådfoder">Vådfoder</option>
                        <option value="halm, hø og grønt">Hø, halm og grønt</option>
                    </select><br>
                        <hr>

                        <!--Kæledyrs Bo Start-->
                        <label>Kæledyrets bopæl:</label><br>
                        <?PHP if (!empty($formErrors['dyrBo'])) echo '<b>'.$formErrors['dyrBo'].'</b>'; ?>
                        <select id="dyrBo" name="dyrBo" required>
                        <option value="">Vælg bopæl</option>
                        <option value="i byen">I byen</option>
                        <option value="på landet">På landet</option>
                        <option value="et ukendt sted">Ved Ikke</option>
                    </select><br>
                        <hr>

                        <!--Kæledyrs Vaccine Start-->
                        <label>Er kæledyret vaccineret?:</label><br>
                        <?PHP if (!empty($formErrors['dyrVacc'])) echo '<b>'.$formErrors['dyrVacc'].'</b>'; ?>
                        <select id="dyrVacc" name="dyrVacc" required>
                        <option value="">Vælg...</option>
                        <option value="Ja">Ja</option>
                        <option value="Nej">Nej</option>
                        <option value="Ved Ikke">Ved Ikke</option>
                    </select><br>
                        <hr>

                        <!--Kæledyrs Køn Start-->
                        <label>Kæledyrets Køn:</label><br>
                        <?PHP if (!empty($formErrors['dyrSex'])) echo '<b>'.$formErrors['dyrSex'].'</b>'; ?>
                        <select id="dyrSex" name="dyrSex" required>
                        <option value="">Vælg køn</option>
                        <option value="Han">Han</option>
                        <option value="Hun">Hun</option>
                        <option value="Den">Ved Ikke</option>
                    </select><br>
                        <hr>

                        <!--Kæledyrs Farve Start-->
                        <label>Kæledyrs farve:</label><br>
                        <?PHP if (!empty($formErrors['dyrFarve'])) echo '<b>'.$formErrors['dyrFarve'].'</b>'; ?>
                        <select id="dyrFarve" name="dyrFarve" required>
                        <option value="">Vælg farve</option>
                        <option value="brun">Brun</option>
                        <option value="sort">Sort</option>
                        <option value="hvid">Hvid</option>
                        <option value="grå">Grå</option>
                        <option value="broget">Broget</option>
                        <option value="rød">Rød</option>
                        <option value="gul">Gul</option>
                        <option value="fler farvet">Fler farvet</option>
                    </select><br>
                        <hr>

                        <!--Kæledyrs Navn Start-->
                        <label>Navn på kæledyr:</label><br>
                        <?PHP if (!empty($formErrors['dyrTekst'])) echo '<b>'.$formErrors['dyrTekst'].'</b>'; ?>
                        <input onkeyup="onBlurValidTekst()" id="dyrTekst" name="dyrTekst" required><br>
                        <br>

                        <!--Ejer Navn Start-->
                        <label>Ejers navn:</label><br>
                        <?PHP if (!empty($formErrors['dyrEjer'])) echo '<b>'.$formErrors['dyrEjer'].'</b>'; ?>
                        <input onkeyup="onBlurValidEjer()" id="dyrEjer" name="dyrEjer" required><br>
                        <br>

                        <!--Submit Button-->
                        <button id="submit" type="submit" value="submit">Indsend</button>
                        <hr>
                        <h2>Registreringer:</h2>
                    </fieldset>
                </form>
                <section id="pets_form">
                    <?php while ($r = mysqli_fetch_array($resultat)) { //En while-løkke der lægger hver række i $r
                            echo '<section class=""><h3>' . $r['dyrType'] . ", " . $r['dyrAlder'] . ", " . $r['dyrSex'] . '</h3><h4>' . $r['dyrTekst'] . " er en " . $r['dyrRace'] . " som er " . $r['dyrFarve'] . ", bor " . $r['dyrBo'] . ", foretrækker " . $r['dyrMad'] . " og vejer " . $r['dyrVaegt'] . ". " . $r['dyrSex'] . " har en ejer som hedder " . $r['dyrEjer'] . ". " . '</h4></section>';
                        } 
                 ?>
                </section>
                <hr>
                <button onclick="topFunction()" id="myBtn" title="Tilbage til toppen">Top</button>
                <img id="pet_image" src="img/pet_bg_small.jpg" alt="Et billede af dyr">
            </div>
            <!-- pagewrap -->
            <footer>
                <p>&copy; Copyright Maiken Mikkelsen, Anders Vinther, Gurli Tonsberg</p>
            </footer>

            <script src="js/formvalidering.js"></script>
            <script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js" data-bg="#272627" data-fg="#FFFFFF" data-link="#c1c1c1" data-linkmsg="Mere info" data-message="På vores website bruges cookies til at huske dine indstillinger. Ved fortsat brug af websiden godkender du cookiepolitikken." data-cookie="CookieInfoScript" data-text-align="left" data-close-text="OK!">


            </script>



        </body>


        </html>
