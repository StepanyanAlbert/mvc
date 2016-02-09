<?php
class Inputs{

    public static  function create_inputs($type,$name,$text,$id=null,$class=null){
    ?>
        <label for="<?=$id?>"><?=$text?></label><input type="<?= $type;?>" name="<?= $name;?>" class="<?= $class;?>" id="<?= $id;?>">
      <?php
        }

      public static  function create_radio($name,$text,$value,$id=null,$class=null){
    ?>
          <label for="<?=$id?>"><?= $text?></label>
          <input type="radio" name="<?= $name;?>" value="<?= $value;?>" class="<?= $class;?>" id="<?= $id;?>">
      <?php
        }

    public static function create_checkbox($name,$text,$value,$id=null,$class=null){
    ?>
        <label for="<?=$id?>"><?= $text?></label>
            <input type="checkbox" name="<?= $name;?>" value="<?= $value;?>" class="<?= $class;?>" id="<?= $id;?>">
        <?php

    }
    public static function create_selectbox($name,$text,$opt_val=null){
       ?>
        <select name="<?= $name;?>">
	    <option value="<?=$opt_val;?>"><?= $text;?></option>


<?php
    }
    public static function select_end(){
        echo"</select>";
    }
}