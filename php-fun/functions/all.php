<?php

// Don't touch this file

$files = glob(__DIR__ . '/*.php');
foreach ($files as $file) {
    if ($file != __FILE__) {
        require($file);
    }
}
