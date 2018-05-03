<?php
session_start();

include("opendb.php");
//echo "der er hul igennem til behandl_dyr.php";
$dyrType = $_POST['dyrType'];
$dyrRace = $_POST['dyrRace'];
$dyrAlder = $_POST['dyrAlder'];
$dyrVaegt = $_POST['dyrVaegt'];
$dyrMad = $_POST['dyrMad'];
$dyrBo = $_POST['dyrBo'];
$dyrVacc = $_POST['dyrVacc'];
$dyrSex = $_POST['dyrSex'];
$dyrFarve = $_POST['dyrFarve'];
$dyrTekst = $_POST['dyrTekst'];
$dyrEjer = $_POST['dyrEjer'];

$errorsFound = [];
if (strlen($dyrType) != 0) {
	$errorsFound['dyrType'] = 'Der skal vælges et dyr';
}
if (empty($dyrRace)) {
	$errorsFound['dyrRace'] = 'Angiv venligst en race';
}
if (strlen($dyrAlder) != 0) {
	$errorsFound['dyrAlder'] = 'Angiv venligst alderen på dit kæledyr';
}
if (strlen($dyrVaegt) != 0) {
	$errorsFound['dyrVaegt'] = 'Angiv venligst vægten på dit kæledyr';
}
if (strlen($dyrMad) != 0) {
	$errorsFound['dyrMad'] = 'Angiv venligst kæledyrets yndlingsfoder';
}
if (strlen($dyrBo) != 0) {
	$errorsFound['dyrBo'] = 'Angiv venligst kæledyrets bopæl';
}
if (strlen($dyrVacc) != 0) {
	$errorsFound['dyrVacc'] = 'Udfyld venligst';
}
if (strlen($dyrSex) != 0) {
	$errorsFound['dyrSex'] = 'Angiv venligst kæledyrets køn';
}
if (strlen($dyrFarve) != 0) {
	$errorsFound['dyrFarve'] = 'Angiv venligst kæledyrets farve';
}
if (empty($dyrTekst)) {
	$errorsFound['dyrTekst'] = 'Angiv venligst kæledyrets navn';
}
if (empty($dyrEjer)) {
	$errorsFound['dyrEjer'] = 'Angiv venligst ejerens navn';
}

$_SESSION['formErrors'] = $errorsFound;
$_SESSION['lastInput'] = $_POST;

if (!empty($errorsFound)) {
	header('Location: index.php');
}
else {
	$sql = "INSERT INTO pets (dyrType, dyrRace, dyrAlder, dyrVaegt, dyrMad, dyrBo, dyrVacc, dyrSex, dyrFarve, dyrTekst, dyrEjer) VALUES ('".$dyrType."', '".$dyrRace."', '".$dyrAlder."', '".$dyrVaegt."', '".$dyrMad."', '".$dyrBo."', '".$dyrVacc."', '".$dyrSex."', '".$dyrFarve."', '".$dyrTekst."', '".$dyrEjer."')";/*}*/

	//echo("SQL: " . $sql);

	if ($conn->query($sql) === TRUE) {
	   // echo "Gemt i databasen<br>";
	} else {
		// echo "Fejl: " . $sql . "<br>" . $conn->error . "<br>";
		echo "Der er sket en fejl<br>";
	}

	$conn->close(); //vi lukker forbindelsen til databasen igen
	header('Location: index.php');
}
?>