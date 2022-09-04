<?php

require_once './vendor/autoload.php';

use \mjcodegroup\HaitiAddressPhp\classes\Address;

$address = new Address();

//get All departments
$departments = $address->getAllStates();
//print_r($departments);

//get All districts
$districts = $address->getAllDistricts();
//print_r($districts);

//get All districts
$districts_departement = $address->getAllDistrictsByDepartmentCode('AR');
//print_r($districts_departement);
