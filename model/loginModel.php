<?php


class loginModel extends BaseManager
{
   private $_username;
   private $_password;
    
    public function __construct($username,$password)
    {
        echo'login construct';
        parent::__construct("user","User");

        
    }

    public function validateUser()
    {
        $this->_username = $_POST['username'];
        $this->_password = $_POST['password'];

        // if(isset($this->_bdd))
        // {
        //     $req = $this->_bdd->prepare("SELECT * FROM users WHERE username=?" );
        //     //$req->setFetchMode(PDO::FETCH_ASSOC);
        //     $req->execute(array($this->_username));
        // }
        // $result = $req->fetch(PDO::FETCH_LAZY);
        // //$result = $req->fetch(PDO::FETCH_ASSOC);
        // if( $req->rowCount() === 0)
        // {
        //         return 'NO USER FOUND';
        // }
        // else{
        //     if($req->rowCount() === 1)
        //     {
        //         return $this->compare($result->password ,$this->_password);
        //     }
        // }
    }

    private function compare($a ,$b)
    {
        if($a === $b)
        return true;

        return false;
    }

    public function getUserName()
    {
        return $this->_username;
    }
    public function getPassword()
    {
        return $this->_password;
    }
}