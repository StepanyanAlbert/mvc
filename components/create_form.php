<?php


class Create_form{

    public static function starform($method,$action,$enctype=null)
    {
 ?>
        <form action="<?=$action?>" method="<?=$method?>">
        <?php
    }
    public  static function endform(){
        ?>
        </form>
        <?php
    }
}