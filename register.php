<?php


require 'includes/config.php';
require 'includes/header.php';

if ($_POST) {
   
    $login = $db->real_escape_string(htmlspecialchars(trim($_POST['login'])));
    $password = $_POST['password'];
    $passwordVerify = $_POST['password_v'];
    $email = $db->real_escape_string(htmlspecialchars(trim($_POST['email'])));
    $emailVerify = $db->real_escape_string(htmlspecialchars(trim($_POST['email_v'])));
    $checkLogin = $db->query("SELECT COUNT(*) FROM users WHERE login = '$login'")->fetch_row();
    $checkEmail = $db->query("SELECT COUNT(*) FROM users WHERE email = '$email'")->fetch_row();

    
    $errors = array();
    if (empty($login) || empty($email) || empty($emailVerify) || empty($password) || empty($passwordVerify)) {
        $errors[] = 'Proszę wypełnić wszystkie pola';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Podany adres e-mail jest niepoprawny';
    }
    if ($checkLogin[0] > 0) {
        $errors[] = 'Ten login jest już zajęty';
    }
    if ($checkEmail[0] > 0) {
        $errors[] = 'Ten e-mail jest już używany';
    }

    if ($password != $passwordVerify) {
        $errors[] = 'Podane hasła się nie zgadzają';
    }
    if ($email != $emailVerify) {
        $errors[] = 'Podane adresy e-mail się nie zgadzają';
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<p class="error">'.$error.'</p>';
        }
    } else {
        $password = password_hash($password, PASSWORD_BCRYPT); 
        $result = $db->query("INSERT INTO users (login, email, password) VALUES('$login', '$email', '$password')");
        if (!$result) {
            echo '<p class="error">Wystąpił błąd przy rejestrowaniu użytkownika.<br>'.$db->error.'</p>';
        } else {
            echo '<p class="success">'.$login.', zostałeś zarejestrowany.
            <br><a href="login.php">Logowanie</a></p>';
        }  }
}
?>
<form method="post" action="register.php">
    <label for="login">Login:</label>
    <input maxlength="32" type="text" name="login" id="login" required>
    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password" required>
    <label for="password_v">Hasło (ponownie):</label>
    <input type="password" name="password_v" id="password_v" required>
    <label for="email">Email:</label>
    <input type="email" name="email" maxlength="255" id="email" required>
    <label for="email_v">Email (ponownie):</label>
    <input type="email" name="email_v" maxlength="255" id="email_v" required><br>
    <input type="submit" value="Zarejestruj">
</form>
<?php
require 'includes/footer.php';
