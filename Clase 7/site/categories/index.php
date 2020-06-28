<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
 ?>

<div class="container">

<div class="container">
    <h1>Categories</h1>
    <a class="button is-success" href="/animals/create.php">New Category</a>
</div>
<div class="columns is-multiline">
    <?php
    $categories = $category_model->read();
    if ($categories) {
        foreach ($categories as $category) {
            require './card.php';
        }
    }
    ?>
</div>
</div>