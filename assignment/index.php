<?php

require "./app/model/model.php";
$f3 = require "./app/lib/base.php";
require "./app/controller/controller.php";


// Controller
$controller = new Controller($f3);
$f3 = $controller->f3;

// Load configuration
$f3->set('DEBUG',3);
$f3->set("UI","./app/view/");

// Route
// index
$f3->route('GET /index.php','Controller->index');
// index
$f3->route('GET /index.php/getPageData','Controller->getPageData');

$f3->route('GET /index.php/hook','Controller->hook');
	

$f3->route('POST /index.php/getGallery','Controller->getGallery');
$f3->route('POST /index.php/fileupload','Controller->fileupload');
$f3->route('POST /index.php/addGallery','Controller->addGallery');
$f3->route('POST /index.php/deleteGallery','Controller->deleteGallery');
// f3 run
$f3->run();
