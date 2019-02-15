<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/02/19
 * Time: 17:06
 */

namespace src\Config;

class Database extends \PDO
{
    private $user = 'sql10279231';
    private $pass = 'e2JU9Xpty4';
    private $dbname = 'sql10279231';
    private $host = 'sql10.freemysqlhosting.net';


    public function __construct()
    {
        parent::__construct("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        $this->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    }

//    function DBConnection(){
//
//        try {
//            $DBH = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
//            $DBH->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
//            $this->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
//
//            return $DBH;
//        }
//        catch(\PDOException $e) {
//
//            echo 'ERROR: ' . $e->getMessage();
//        }
//
//    }

}