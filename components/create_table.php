<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php

class Create_table
{
    public static function create()
    {
        return new Create_table();
    }

    public static function create_tabl($count = [])
    {

        echo $count->param1;
        echo $count->param2;
        call_user_func_array('create_tabl', array('1', 555));
    }


    /**
     * @param $params
     * @param header_title   array content of th tags --array
     * @param   buttons  addidtional th for buutons like add update or ......  --array
     * @param td values
     * @param border_value   table border value
     * @param  specify class_name_theader table header class
     */
    public static function createDatagrid($array)
    {
        $object = $array['data'];
        $arrList = $object->getAll();

        $attributs = $object->getAttributes();

        $html = '<table border="1" style="border-collapse: collapse" cellpadding="25px">';
        if ($array['enableHeader']) {

            $html .= '<thead> <tr>';

if(isset($array['columns'])){

    foreach ($attributs as $key => $value) {
        if(in_array($value,$array['columns'])){
            $html .= '<td>' . $value . '</td>';

        }
    }




}else{
    foreach ($attributs as $key => $value) {
        $html .= '<td>' . $value . '</td>';
    }

}



            $html .= '</tr></thead>';
        }
            $html .= '<tbody>';
            foreach($arrList as $k => $v){

                $html .= '<tr>';
                foreach($v as $nkey =>$nval){
                    $html .= '<td>'.$nval.'</td>';


                }
                $html .= '</tr>';
            }



            $html .= '</tbody>';



        $html .= '</table>';
        return $html;
    }
}

