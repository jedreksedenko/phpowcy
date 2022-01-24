<?php


require 'includes/config.php';
require 'includes/header.php';
if ($user->check()) { 
    $userData = $user->data();

    echo '<h1>Witaj '.$userData['login'].'!</h1>';
    echo '<p>zobaczyć swój <a href="profile.php?id='.$userData['id'].'">profil</a> albo się <a href="logout.php">wylogować</a></p>';
} else {
    echo '<p>Nie jesteś zalogowany.<br><a href="login.php">Zaloguj</a> się lub <a href="register.php">zarejestruj</a> jeśli jeszcze nie masz konta.</p>';
}
require 'includes/footer.php';
