<?php
include "../includes/connect.php";
session_start();

$values = [];

$values["id"] = $_SESSION["id"];

if(ISSET($_POST['werkervaring']))
	$values['werkervaring'] = $_POST['werkervaring'];
if(ISSET($_POST['begindatum_werkervaring']))
	$values['begindatum_werkervaring'] = $_POST['begindatum_werkervaring'];
if(ISSET($_POST['einddatum_werkervaring']))
	$values['einddatum_werkervaring'] = $_POST['einddatum_werkervaring'];
if(ISSET($_POST['omschrijving_werkervaring']))
	$values['omschrijving_werkervaring'] = $_POST['omschrijving_werkervaring'];


if (count($values) != 5 ){
	echo '<p> Niet alle gegevens zijn ingevuld </p>';
}

$sql = 'INSERT INTO werkervaring (id, werkervaring, begindatum_werkervaring, einddatum_werkervaring, omschrijving_werkervaring)
		VALUES(:id, :werkervaring, :begindatum_werkervaring, :einddatum_werkervaring, :omschrijving_werkervaring)';

$stmt = $pdo->prepare($sql);

if($stmt->execute($values)){
	header('Location: ../pages/edit-werkervaring.php');

	$_SESSION["werkervaring"] = $values["werkervaring"];
	$_SESSION["begindatum_werkervaring"] = $values["begindatum_werkervaring"];
	$_SESSION["einddatum_werkervaring"] = $values["einddatum_werkervaring"];
	$_SESSION["omschrijving_werkervaring"] = $values["omschrijving_werkervaring"];
	exit;
}

preprint_r($values);//WORKS
?>