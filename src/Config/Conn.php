<?php
/**
 * Created by PhpStorm.
 * User: juba
 * Date: 15/02/19
 * Time: 20:34
 */

namespace src\Config;


class Conn
{
    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance == null){
            self::$instance = new \PDO("mysql:host=localhost;dbname=capgemini", 'root', '');
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return self::$instance;
        } else{
            return self::$instance;
        }
    }

}