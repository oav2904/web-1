<?php
require_once '../shared/header.php';
require_once '../shared/db.php';

$name = $_POST['name'] ?? '';
$description = $_POST['description'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_model->create($name,$description);
    return header("Location: /categories");
}

require_once './form.php';
 ?>