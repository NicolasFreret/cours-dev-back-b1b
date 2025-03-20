<?php

$page="accueil";

$welcome = isset($_SESSION['user']) ? 'Bonjour '.$_SESSION['user']['fname'] : '';

require 'views/index.php';