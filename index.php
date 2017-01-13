<?php

$_PLP = [];

include 'config.php';
include 'utilities.php';

// Get page variable from the address
$_PLP['page'] = (isset($_GET['p']) and $_GET['p'] !== '') ? $_GET['p'] : 'home';
$_PLP['subpage'] = (isset($_GET['sp']) and $_GET['sp'] !== '') ? $_GET['sp'] : '';

// Includes the page
include 'pages/'. $_PLP['page'] . '.php';

// Unset one-shot sessions
unset_one_shots();