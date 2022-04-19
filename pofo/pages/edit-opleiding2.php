<?php
include "../includes/connect.php";
session_start();

$values = [];

$values["id"] = $_SESSION["id"];

if(ISSET($_POST['opleiding']))
	$values['opleiding'] = $_POST['opleiding'];
if(ISSET($_POST['begindatum_opleiding']))
	$values['begindatum_opleiding'] = $_POST['begindatum_opleiding'];
if(ISSET($_POST['einddatum_opleiding']))
	$values['einddatum_opleiding'] = $_POST['einddatum_opleiding'];
if(ISSET($_POST['omschrijving_opleiding']))
	$values['omschrijving_opleiding'] = $_POST['omschrijving_opleiding'];

if (count($values) != 5 ){
	echo '<p> Niet alle gegevens zijn ingevuld </p>';
}

$sql = 'INSERT INTO opleidingen (id, opleiding, begindatum_opleiding, einddatum_opleiding, omschrijving_opleiding)
		VALUES(:id, :opleiding, :begindatum_opleiding, :einddatum_opleiding, :omschrijving_opleiding)';

$stmt = $pdo->prepare($sql);

if($stmt->execute($values)){
	header('Location: ../pages/edit-opleiding.php');

	$_SESSION["opleiding"] = $values["opleiding"];
	$_SESSION["begindatum_opleiding"] = $values["begindatum_opleiding"];
	$_SESSION["einddatum_opleiding"] = $values["einddatum_opleiding"];
	$_SESSION["omschrijving_opleiding"] = $values["omschrijving_opleiding"];
	exit;
}

preprint_r($values);//WORKS
?>