<?php
include("opendb.php");

//echo "Der er hul igennem til behandl_observation.php";

$dyrType = $_POST['dyrType'];
$dyrAlder = $_POST['dyrAlder'];
$dyrVaegt = $_POST['dyrVaegt'];
$dyrMad = $_POST['dyrMad'];
$dyrBo = $_POST['dyrBo'];
$dyrVacc = $_POST['dyrVacc'];
$dyrSex = $_POST['dyrSex'];
$dyrTekst = $_POST['dyrTekst'];
$dyrEjer = $_POST['dyrEjer'];

$sql = "INSERT INTO pets (dyrType, dyrAlder, dyrVaegt, dyrMad, dyrBo, dyrSex, dyrTekst, dyrEjer) VALUES ('".$dyrType."', '".$dyrAlder."', '".$dyrVaegt."', '".$dyrMad."', '".$dyrBo."', '".$dyrVacc."', '".$dyrSex."', '".$dyrTekst."', '".$dyrEjer."')";

echo("SQL: " . $sql);

if ($conn->query($sql) === TRUE) {
    echo "Gemt i databasen<br>";
} else {
    //echo "Fejl: " . $sql . "<br>" . $conn->error . "<br>";
    echo "Der er sket en fejl<br>";
}

$conn->close(); //vi lukker forbindelsen til databasen igen
    header('Location: index.php');
?>
