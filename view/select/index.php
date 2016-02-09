<?php
//$new = new User_model();
//table::createDatagrid($new,
//    array(
//
//    'column'=>array(
//       'id',
//        'name'=>array(
//            'class'=>'name',
//
//
//        ),
//        'buttons'=>array(
//            'edit','delete','view'
//        ),
//
//
//    ),
//
//
//
//
//));


?>
<table border="1" class="mytable" cellpadding="10">
    <thead>
    <tr>
        <th class="custom">
            user_id
        </th>
        <th>
            user_firstname
        </th>
        <th>
            user_lastname
        </th>
        <th>
            user_email
        </th>
        <th>
            user_password
        </th>
        <th>
            <?php echo $xml->Update->$lang;?>
        </th>
        <th>
            <?php echo $xml->Delete->$lang;?>
        </th>
        <th>
            <?php echo $xml->Add->$lang;?>
        </th>
    </tr>

    </thead>
    <tbody>

<?php
$num=1;
foreach ($selected as $value){
  echo '<tr>';
foreach($value as  $val ){
    echo'<td class="">'.$val.'</td>
   ';
}?><td>
    <a href='' class="update"> <i class='fa fa-pencil'></i><?php echo $xml->Update->$lang;?> </a></td>
    <td class="delete"><a href=""> <i class='fa fa-trash'></i>  <?php echo $xml->Delete->$lang;?></a></td>
    <td><a href='<?php echo  $glob_host->req_scheme.$glob_host->host.$glob_host->project_name;?>registration/'> <i class='fa fa-plus-circle'></i>  <?php echo $xml->Add->$lang;?></a></td>
<?php


}
        ?>

    </tr>
    </tbody>
    </table>
