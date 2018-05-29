<?php

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getSpec($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function createSpecies() 
{
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$species_description = isset($_POST['species_description']) ? $_POST['species_description'] : null;
	
	if (strlen($species_description) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(species_id, species_description) VALUES (:species_id, :species_description)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species_id' => $species_id,
		':species_description' => $species_description));

	$db = null;
	
	return true;
}



function deleteSpec($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

 function editSpec() {

 	$spec_description = $_POST['spec_description'];
 	$id = $_POST['id'];


	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_description = :spec_description WHERE species_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(

		':spec_description'=> $spec_description,
		':id'=> $id));

	$db = null;
 }







