<?php
include("opendb.php");

//echo "Der er hul igennem til behandl_observation.php";

$dyrType = $_POST['dyrType'];
$dyrAlder = $_POST['dyrAlder'];
$dyrSex = $_POST['dyrSex'];
$dyrTekst = $_POST['dyrTekst'];

$sql = "INSERT INTO Pets (dyrType, dyrAlder, dyrSex, dyrTekst) VALUES ('".$dyrtype."', '".$dyrAlder."', '".$dyrSex."', '".$dyrtekst."')";

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
