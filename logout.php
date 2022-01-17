<?php


require 'includes/config.php';
require 'includes/header.php';

session_destroy();
echo '<p class="success">Zostałeś wylogowany!  <a href="index.php">stronę główną</a></p>';

require 'includes/footer.php';
