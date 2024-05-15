<?php
// Load the core application
require_once 'application/models/Model.php';
require_once 'application/controllers/Controller.php';


$controller = new Controller();


$controller->loadProcess();

?>