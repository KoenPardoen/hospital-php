<?php

require(ROOT . "model/speciesModel.php");

function index()
{
	render("species/index", array('species' => getAllSpecies()
	));
}

function create()
{
	render("species/create");
}

function createSave() {
	if (!createSpecies()) {
		header("Location:" . URL . "error/error_404");
		exit();
	}

	header("Location:" . URL . "species/index");
}


function delete($id)
{
	if (!deleteSpec($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
}

function edit($id) {
	render("species/edit", array('spec' => getSpec($id)
	));
}

function editSave() {
	editSpec($_POST);
	header("Location:" . URL . " species/index");

}