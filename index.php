<?php
$input = $_GET['dir'];

// Sanitasi
$input = str_replace('`', '', $input);
$input = str_replace('$', '', $input);

system("ls \"$(echo \"".$input."\")\" ");