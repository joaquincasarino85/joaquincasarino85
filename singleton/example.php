<?php

class Db {

    public static $instance;

    public static function getInstance(){
        if(!self::$instance instanceof self){
            self::$instance = new self();
        } 

        return self::$instance;
    }
}

$db = Db::getInstance();

var_dump($db);