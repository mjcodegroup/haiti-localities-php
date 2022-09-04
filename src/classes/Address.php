<?php

namespace mjcodegroup\HaitiAddressPhp\classes;

use Exception;

class Address extends Helper
{
    public function getAllStates()
    {
        try {
            return $this->getFileContent("states.json");
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
