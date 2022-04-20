<?php 


class loginModel extends BaseManager
{

    public function __construct($datasource)
    {
        parent::__construct("user","User",$datasource);
    }

    public function checkUser($user,$mail)
    {

        $req = $this->_bdd->prepare("SELECT * FROM user WHERE user=" . $user);
        $req->execute();
        $req->sedtFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->_object);

        echo $req->fetch();
        return $req->fetch();

    }

}