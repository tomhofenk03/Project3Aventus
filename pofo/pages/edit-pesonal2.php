<?php
include "../includes/connect.php";
session_start();

$values = [];

$values["id"] = $_SESSION["id"];

if(ISSET($_POST['naam']))
	$values['naam'] = $_POST['naam'];
if(ISSET($_POST['geboorteplaats']))
	$values['geboorteplaats'] = $_POST['geboorteplaats'];
if(ISSET($_POST['geboortedatum']))
	$values['geboortedatum'] = $_POST['geboortedatum'];
if(ISSET($_POST['nationaliteit']))
	$values['nationaliteit'] = $_POST['nationaliteit'];
if(ISSET($_POST['rijbewijs']))
	$values['rijbewijs'] = $_POST['rijbewijs'];

if (count($values) != 6 ){
	echo '<p> Niet alle gegevens zijn ingevuld </p>';
}

$sql = 'INSERT INTO persoonlijkeinformatie (id, naam, geboorteplaats, geboortedatum, nationaliteit, rijbewijs)
		VALUES(:id, :naam, :geboorteplaats, :geboortedatum, :nationaliteit, :rijbewijs)';

$stmt = $pdo->prepare($sql);

if($stmt->execute($values)){
	header('Location: ../pages/edit-personal.php');

	$_SESSION["naam"] = $values["naam"];
	$_SESSION["geboorteplaats"] = $values["geboorteplaats"];
	$_SESSION["geboortedatum"] = $values["geboortedatum"];
	$_SESSION["nationaliteit"] = $values["nationaliteit"];
	// $_SESSION["rijbewijs"] = $values["rijbewijs"];
	exit;
}

preprint_r($values);//WORKS
?>