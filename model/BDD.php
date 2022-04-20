<?php
class BDD
{
    private $_bdd;

    private static $_instance;

    public static function getInstance($datasource)
    {
        if(empty(self::$_instance))
        {
            self::$_instance = new BDD($datasource);
        }
        return self::$_instance->_bdd;
    }

    public function __construct($datasource)
    {
        $dbname = $$datasource->dbname;
        $host = $$datasource->host;
        $user = $$datasource->user;
        $password = $$datasource->password;

        $dsn = 'mysql:dbname='. $dbname .';host=' . $host;
        $this->_bdd = new PDO($dsn,$user,$password);
    }


    public function getBdd()
    {
        return $this->_bdd;
    }
}