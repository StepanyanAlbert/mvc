<?php
class Lang{

public static function create_(){
 
       
       
          
}
public static function tr($attribut){
   $lang =  $_SESSION['lang'];
   $row = 1;
if (($handle = fopen('http://localhost/project_mvc/components/menu.csv', 0777)) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
   
   
    
    
    
    
     fclose($fp);
}

}


 

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

