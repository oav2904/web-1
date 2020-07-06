<?php
require_once './shared/header.php';
require_once './shared/guard.php';
?>
<section class="section">
    <div class="container">
      <h1 class="title">
        Welcome <?php $_SESSION['user_name']. " ". $_SESSION['user_lastname'] ?>
      </h1>
    </div>
</section>


<?php require_once './shared/footer.php' ?>