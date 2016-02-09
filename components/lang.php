<?php

class Lang
{
    public static function tr($attribut, $file)
    {

        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        } else{
            $lang = 0;  }
        $blnExist = false;
        if (($handle = fopen($file . '.csv', "a+")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($data[0] == $attribut) {
                    $blnExist = true;
                    $result = $data[$lang];
                }
            }
            if (!$blnExist) {
                fputcsv($handle, array($attribut, $attribut, $attribut));
                $result = $attribut;
            }
        }
        //return $result;
    }


}


