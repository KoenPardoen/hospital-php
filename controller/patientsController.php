<?php

require(ROOT . "model/patientsModel.php");

function index()
{
	render("patients/index", array('patients' => getAllPatients()
	));
}

function create() {
	render("patients/create", array(
		'clients' => getClientInfo(),
		'species' => getSpecInfo()
	));
}


function createSave() {
	if (!createPatient()) {
		header("Location:" . URL . "error/error_404");
		exit();
	}

	header("Location:" . URL . "patients/index");
}

function delete($id) {
	deleteById($id);

	header("Location:" . URL . " patients/index");
}

function edit($id) {
	render("patients/edit", array('patients' => getPatient($id), 		'clients' => getClientInfo(),
		'species' => getSpecInfo()
	));
}

function editSave() {
	editPatient();
	header("Location:" . URL . " patients/index");

}