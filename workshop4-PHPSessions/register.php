<?php
require_once './shared/header.php';
require_once './shared/db.php';
?>
<section class="section">
    <div class="container">
        <h1 class="title">
            Sign Up
        </h1>
        <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $p_name = $_POST['p_nombre'] ?? '';
        $user = $_POST['user'] ?? '';
        $lastname = $_POST['lastname'] ?? ''; 
        $email = $_POST['email'] ?? '';
        $repassword = $_POST['s_contra'] ?? '';
        $password = $_POST['p_contra'] ?? '';
        $errors = '';
        if( $password == $repassword){
        $results = $user_model->create($p_name,$user,$lastname,$email,$password);
        exit();
    }
    else{

        $errors = 'No concuerdan las contraseñas';
    }
}
?>
        <form method="POST">

<div class="field">
  <label class="label">Name</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" name= "p_nombre" type="text" required placeholder="Name input" value="">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
 
<div class="field">
  <label class="label">User</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="text" placeholder="User input" value="" name = "user">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>

    <div class="field">
  <label class="label">Lastname</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="text" placeholder="Lastname input" value="" name = "lastname">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="email" required placeholder="Email input" value="" name = "email">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
 
<div class="field">
    <label class="label">Password</label>
    <div class="control has-icons-left has-icons-right">
        <input class="input" required type="password" placeholder="password input" value="" name = "p_contra">
        <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
        </span>
        <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
        </span>
    </div>
</div>
<div class="field">
    <label class="label">Re~Password</label>
    <div class="control has-icons-left has-icons-right">
        <input class="input" required type="password" placeholder="password input" value="" name = "s_contra">
        <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
        </span>
        <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
        </span>
    </div>
</div>
    </div>

</section>
<?php require_once './shared/footer.php' ?>

