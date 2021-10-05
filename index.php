<?php
$input = $_GET['dir'];

// Sanitasi
$input = str_replace('`', '', $input);
$input = str_replace('$', '', $input);
$input = str_replace('cp', '', $input);
$input = str_replace('mv', '', $input);
$input = str_replace('sh', '', $input);

system("ls \"$(echo \"".$input."\")\" ");
