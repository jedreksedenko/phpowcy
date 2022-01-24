<?php
require 'includes/config.php';
require 'includes/header.php';
if (!$user->check()) {
    echo '<p class="error">strona jest dostępna tylko dla zalogowanych użytkowników.</p>';
    require 'includes/footer.php';
    die;
}

$id = intval($_GET['id']);
$profile = $user->data($id);
if (empty($profile)) {
    echo '<p class="error"> użytkownik  nie istnieje.</p>';
    require 'includes/footer.php';
    die;
}
?>
<h1>Profil użytkownika <?php echo $profile['login'] ?></h1>
<dl>
    <dt>Login:</dt> <dd><?php echo $profile['login'] ?></dd>
    <dt>E-mail:</dt> <dd><?php echo $profile['email'] ?></dd>
</dl>

<?php
require 'includes/footer.php';
