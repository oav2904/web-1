<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../models/Category.php';

use crojasaragonez\UtnDb\PgConnection;

$con = new PgConnection('postgres', '12345', 'isw', 5432, 'localhost');
$con->connect();

$category_model = new Category($con);
