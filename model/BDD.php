<?php
class BDD
{
    private $_bdd;

    private static $_instance;

    public static function getInstance()
    {
        if(empty(self::$_instance))
        {
            self::$_instance = new BDD();
        }
        return self::$_instance->_bdd;
    }

    public function __construct()
    {
        $dbname = 'flositeweb';
        $host = 'localhost';
        $user = 'root';
        $password = '';

        $dsn = 'mysql:dbname='. $dbname .';host=' . $host;
        $this->_bdd = new PDO($dsn,$user,$password);
    }


    public function getBdd()
    {
        return $this->_bdd;
    }
}