<?php

namespace mjcodegroup\HaitiAddressPhp\classes;

class Helper
{
    public function getFileContent($file)
    {
        $contents = file_get_contents(dirname(__DIR__) . "/files/" . $file);
        return json_decode($contents, true);
    }
}
