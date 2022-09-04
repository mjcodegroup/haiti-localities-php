<?php

namespace mjcodegroup\HaitiAddressPhp\classes;

use Exception;

class Address extends Helper
{
    public function getAllStates($toArray = false)
    {
        try {
            return $this->getFileContent("departments.json", $toArray);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getAllDistricts($toArray = false)
    {
        try {
            return $this->getFileContent("districts.json", $toArray);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getAllDistrictsByDepartmentCode($departmentCode = 'AR')
    {
        try {
            $res = $this->removeEmphasis('Gonaïves');
            var_dump($res);
            exit;
            $allDistricts = $this->getAllDistricts(true);
            foreach ($allDistricts as $districs) {
                if ($districs['department_code'] == $departmentCode) {
                    return $districs;
                }
            }
            return [];
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
