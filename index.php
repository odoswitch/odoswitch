<?php
require 'vendor/autoload.php';

use Odoswitch\Odoswitch\User;

$user = new User('localhost', 'david');
$a = $user->user();
$dd = $user->getdomain();
printf("\t==================********==================\n");
printf("<br>");

printf("\tvotre code est %s", $a);
printf("<br>");
printf("\t==================********==================\n");


printf("\tvotre domaine %s", $dd);
printf("<br>");
printf("\t==================********==================\n");
