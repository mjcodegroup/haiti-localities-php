<?php

require_once './vendor/autoload.php';

use \mjcodegroup\HaitiAddressPhp\classes\Address;

$address = new Address();
$states = $address->getAllStates();
print_r($states);
