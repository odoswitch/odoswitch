<?php
require 'vendor/autoload.php';

use Odoswitch\Odoswitch\User;

$user = new User();
$a = $user->user();
printf("\t==================********==================\n");
printf("<br>");

printf("\tvotre code est %s", $a);
printf("<br>");
printf("\t==================********==================\n");
