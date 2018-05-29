<?php

function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function deleteById($id) {
 	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":client_id" => $id
	));

	$db = null;
 }


  function createClient() {
	{
	$client_firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;
	$mobile_number = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;

	if (strlen($client_firstname) == 0 || strlen($client_lastname) == 0 || strlen($mobile_number) == 0 || strlen($email) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients (client_firstname, client_lastname, mobile_number, email) VALUES (:client_firstname, :client_lastname, :mobile_number, :email)";

	$query = $db->prepare($sql);
	$query->execute(array(
		':client_firstname'=> $client_firstname,
		':client_lastname'=> $client_lastname,
		':mobile_number'=> $mobile_number,
		':email'=> $email));

	$db = null;

	return true;
 }
}

 function editClient() {

 	$client_firstname = $_POST['client_firstname'];
 	$client_lastname = $_POST['client_lastname'];
 	$mobile_number = $_POST['mobile_number'];
 	$email = $_POST['email'];
 	$id = $_POST['id'];


	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :client_firstname, client_lastname = :client_lastname, mobile_number = :mobile_number, email = :email WHERE client_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':client_firstname'=> $client_firstname,
		':client_lastname'=> $client_lastname,
		':mobile_number'=> $mobile_number,
		':email'=> $email,
		':id'=> $id));

	$db = null;
 }

  function getClient($id) {
 	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM clients WHERE client_id = :client_id";
 	$query = $db->prepare($sql);
	$query->bindParam(":client_id",$id);
	$query->execute();

	$db = null;
	return $query->fetch();
 }