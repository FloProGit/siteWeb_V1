<?php



include_once(CLASSES.'View.php');

class Login 
{

    private const METHOD_GET = 'GET';
    private const LOGIN_VIEW_NAME = 'login';


    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] === self::METHOD_GET)
        {
            $myView = new View(self::LOGIN_VIEW_NAME);
            return $myView->render(['data'=> ['usernameError'=>'dqmlkdjqszpmdjqskmd']]);
        }

    }
    
     
}