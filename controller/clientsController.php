<?php

require(ROOT . "model/clientsModel.php");

function index()
{
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

function create() {
	render("clients/create");
}

function createSave() {
	if (!createclient()) {
		header("Location:" . URL . "error/error_404");
		exit();
	}

	header("Location:" . URL . "clients/index");
}

function delete($id) {
	deleteById($id);

	header("Location:" . URL . " clients/index");
}

function edit($id) {
	render("clients/edit", array('client' => getClient($id)
	));
}

function editSave() {
	editClient($_POST);
	header("Location:" . URL . " clients/index");

}