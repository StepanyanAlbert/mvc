
<table border="1" cellpadding="10">
    <thead>
    <tr>
        <th>
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
    </tr>

    </thead>
    <tbody>

<?php

foreach ($selected as $value){
  echo '<tr>';
foreach($value as  $val ){
    echo'<td>'.$val.'</td>';
}


}
        ?>
    </tr>
    </tbody>
    </table>
