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
        $dbname = 'test';
        echo $_ENV['DATABASE_DNS'];
        $host = $_ENV['DATABASE_DNS'];
        $user = $_ENV['DATABASE_USER'];
        $password = $_ENV['DATABASE_PASSWORD'];
        try
        {

            $dsn = $host;
            $this->_bdd = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }
        catch(PDOException $pe)
        {
            $errorMsg = $pe->getMessage();
            echo $errorMsg;
            if(str_contains($errorMsg,'Unknown database'))
            {
                echo "this is Bad Connection";
                echo '<form action="../BDD/bdd_create.php" method="get">
                host: <input type="text" name="host">
                user: <input type="text" name="user">
                password: <input type="text" name="password">
                <input type="submit" value="Open Form">
                </form>';
            }
            else{
                echo "is other error";
            }
        }        
    }

    public function getBdd()
    {
        return $this->_bdd;
    }
}