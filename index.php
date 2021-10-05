<?php
$input = $_GET['dir'];

// Sanitasi
$input = str_replace('`', '', $input);
$input = str_replace('$', '', $input);
$input = str_replace('cp', '', $input);
$input = str_replace('mv', '', $input);

system("ls \"$(echo \"".$input."\")\" ");
