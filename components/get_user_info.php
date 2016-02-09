<?php


class Get_user_info
{
    public    $ip;

    public  $browser;
    /**
     *@param  user Ip ,
     * @param  browser   Browser version
     */
    public  function __construct(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $this->ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $this->ip = $_SERVER['REMOTE_ADDR'];
        }

        $this->browser = $_SERVER['HTTP_USER_AGENT'];

    }


}