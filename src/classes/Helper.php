<?php

namespace mjcodegroup\HaitiAddressPhp\classes;

class Helper
{
    public function getFileContent($file, $toArray = false)
    {
        $contents = file_get_contents(dirname(__DIR__) . "/files/" . $file);
        return json_decode($contents, $toArray);
    }

    public function removeEmphasis($string)
    {
        return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
    }
}
