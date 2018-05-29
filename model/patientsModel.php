<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `patients`.*,
	 `species`. `species_description`,
	 `clients`. `client_firstname`, 
	 `clients`. `client_lastname`
    FROM `patients`
	JOIN `species`
	ON `patients`.`species_id` = `species`.`species_id`
	JOIN clients
	ON `patients`.`client_id` = `clients`.`client_id`";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

  function getPatient($id) {
 	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM patients WHERE patient_id = :patient_id";
 	$query = $db->prepare($sql);
	$query->bindParam(":patient_id",$id);
	$query->execute();

	$db = null;
	return $query->fetch();
 }

function getClientInfo() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `clients`.* FROM `clients`";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getSpecInfo() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `species`.* FROM `species`";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function deleteById($id) {
 	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":patient_id" => $id
	));

	$db = null;
 }

 function createPatient() 
    {
	$patientName = isset($_POST['patientName']) ? $_POST['patientName'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$patientStatus = isset($_POST['patientStatus']) ? $_POST['patientStatus'] : null;
	$client = isset($_POST['client']) ? $_POST['client'] : null;

	if (strlen($patientName) == 0 || strlen($species) == 0 || strlen($patientStatus) == 0 || strlen($client) == 0) {
		return false;
	}

    $db = openDatabaseConnection();

    $sql = "INSERT INTO patients(patient_name, species_id, patient_status, client_id) VALUES (:patientName, :species, :patientStatus, :client)";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':patientName' => $patientName,
        ':species' => $species,
        ':patientStatus' => $patientStatus,
        ':client' => $client));

    $db = null;
    
    return true;
}

 function editPatient() {

    $patientName = $_POST['patientName'];
    $species = $_POST['species'];
    $patientStatus = $_POST['patientStatus'];
    $client = $_POST['client'];
 	$id = $_POST['id'];


	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patientName, species_id = :species, patient_status = :patientStatus, client_id = :client WHERE patient_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':patientName'=> $patientName,
		':species'=> $species,
		':patientStatus'=> $patientStatus,
		':client'=> $client,
		':id'=> $id));

	$db = null;
 }


 

 
