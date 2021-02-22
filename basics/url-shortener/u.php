<?php
require_once 'database.php';

// /u.php?c=code
$result = getUrlCode($_GET['c'])->fetch();
$long_url = $result['long_url'];

header("Location: " . $long_url);
