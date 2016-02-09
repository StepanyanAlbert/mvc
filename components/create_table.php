<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style> table{
        border-collapse: collapse;
    }</style>
<?php

class Create_table
{
public static function create()
 {
     return new Create_table();
 }
    public  static function create_tabl($count=[]){

       echo $count->param1;
       echo $count->param2;
        call_user_func_array('create_tabl', array('1',555));
    }


}


/**
 * @param $params
 * @param header_title   array content of th tags --array
 * @param   buttons  addidtional th for buutons like add update or ......  --array
 * @param td values
 * @param border_value   table border value
  */
function function_name($params) {

    ?><table border="<?php if(isset($params->border_value)){ echo $params->border_value;}else{echo 1;} ?>"
    cellpadding="<?php if(isset($params->cellpadding)){echo $params->cellpadding;}else {echo 5;} ?>"><thead><tr>;
<?php
     foreach($params->header_title as $titles){

         echo '<th class="">'. $titles.'</th>';
     }
    if(isset($params->buttons)){
        foreach($params->buttons as $buttons ){
            echo '<th>'. $buttons.'</th>';
        }
    }
echo '</tr><tr>';
   foreach($params->field as $value) {
       echo '<td>'.$value.'</td>';
   }

    echo '</tr></thead><tbody>';

    echo '</tbody></table>';


}

$params = (object) array( 'header_title' =>
 array("User id","User_name","User_email","User_password"),'field'=>
 array("First value","second",'sadasd ',"<i class=\"fa fa-anchor\"></i>value"), 'border_value'=>4,
    'cellpadding');

call_user_func_array('function_name', array($params));die;
