<?php

require_once "controllers/template.controller.php";
require_once "controllers/intro.controller.php";
require_once "controllers/sections.controller.php";
require_once "controllers/ecommerce.controller.php";



require_once "models/intro.model.php";
require_once "models/template.model.php";
require_once "models/sections.model.php";
require_once "models/commerce.model.php";
require_once "models/route.php";




$template = new ControllerTemplate();

$template-> template();



