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
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $errors = '';

        $sql = "INSERT INTO users(email, password) VALUES ($1, md5($2))";
        $con->runStatement($sql, [$email, $password]);
        header('Location: /page_1.php');
        exit();
    }
 ?>

        <form method="POST">
            <p class="help is-danger"><?= $errors ?></p>
            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="email" type="email" placeholder="Email input" value="<?= $email ?? '' ?>">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="password" type="password" placeholder="Email input" value="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
                <div class="control">
                    <button class="button is-link is-light">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php require_once './shared/footer.php' ?>

