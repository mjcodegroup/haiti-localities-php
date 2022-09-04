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


    public function getAllCities($toArray = false)
    {
        try {
            $citiesInfo = $this->getFileContent("cities.json", true);
            $onlyCities = [];
            foreach ($citiesInfo as $cityInfo) {
                $onlyCities[] = $cityInfo['municipalities'];
            }
            return $onlyCities;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getAllDistrictsByDepartmentCode($departmentCode = 'AR')
    {
        try {
            $allDistricts = $this->getAllDistricts(true);
            foreach ($allDistricts as $districts) {
                if ($districts['department_code'] == $departmentCode) {
                    return $districts;
                }
            }
            return [];
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
