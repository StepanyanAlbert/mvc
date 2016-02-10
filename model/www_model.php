<?php

/**
 * Created by PhpStorm.
 * User: Sedrak
 * Date: 10.02.2016
 * Time: 21:36
 */
class www_model extends Model{
    public $tableName = 'www';
    public function __construct()
    {
        parent::__construct();
        parent::setAttributs();

    }




}