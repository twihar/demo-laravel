<?php

use Illuminate\Support\Facades\App;

App::setLocale(request('appLang'));
require_once __DIR__ . "/api/authRoutes.php";
require_once __DIR__ . "/api/uploadFileRoutes.php";
require_once __DIR__ . "/api/mobileApplicationRoutes.php";
require_once __DIR__ . "/api/productManagmentRoutes.php";
require_once __DIR__ . "/api/databaseRoutes.php";
require_once __DIR__ . "/api/userRoutes.php";
