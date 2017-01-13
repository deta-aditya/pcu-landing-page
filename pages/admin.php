<?php

if ($_PLP['subpage'] === '') {
  $subpage = isset($_SESSION['admin']) ? 'dashboard' : 'login';
} else {
  $subpage = $_PLP['subpage'];
}

check_privilege($subpage);
$_PLP['subpage'] = $subpage;

include 'admin/'. $subpage . '.php';
