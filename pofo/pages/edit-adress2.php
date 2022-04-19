<?php
include "../includes/connect.php";

session_start();

$values = [];

$values["id"] = $_SESSION["id"];

if(ISSET($_POST['straat']))
	$values['straat'] = $_POST['straat'];
if(ISSET($_POST['woonplaats']))
	$values['woonplaats'] = $_POST['woonplaats'];
if(ISSET($_POST['postcode']))
	$values['postcode'] = $_POST['postcode'];
if(ISSET($_POST['provincie']))
	$values['provincie'] = $_POST['provincie'];
if(ISSET($_POST['land']))
	$values['land'] = $_POST['land'];

if (count($values) != 6 ){
	echo '<p> Niet alle gegevens zijn ingevuld </p>';
}

$sql = 'SELECT id FROM adresgegevens WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt -> execute (array(':id' =>  $values['id']));


$stmt -> rowCount();
$numRow = $stmt -> rowCount();

if($numRow > 0){
$sql = 'UPDATE adresgegevens SET (straat = :straat, woonplaats = :woonplaats, postcode = :postcode, provincie = :provincie, land = :land)
		WHERE id = :id';

		
}else{
$sql = 'INSERT INTO adresgegevens (id, straat, woonplaats, postcode, provincie, land)
		VALUES(:id, :straat, :woonplaats, :postcode, :provincie, :land)';

}
$stmt = $pdo->prepare($sql);

if($stmt->execute($values)){
	header('Location: ../pages/edit-adress.php');

	$_SESSION["straat"] = $values["straat"];
	$_SESSION["woonplaats"] = $values["woonplaats"];
	$_SESSION["postcode"] = $values["postcode"];
	$_SESSION["provincie"] = $values["provincie"];
	$_SESSION["land"] = $values["land"];


	exit;
}



preprint_r($values);//WORKS
?>