<?php
include("opendb.php");

echo "Der er hul igennem til behandl_observation.php";

$obstype = $_POST['dyrType'];
$obstype = $_POST['dyrAlder'];
$obstype = $_POST['dyrSex'];
$obstekst = $_POST['dyrTekst'];

$sql = "INSERT INTO Pets (obstype, obstekst) VALUES ('".$dyrtype."', '".$dyrAlder."', '".$dyrSex."', '".$dyrtekst."')";

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
