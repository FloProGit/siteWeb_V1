<?php



include_once(CLASSES.'View.php');
//include_once(MODEL.'loginModel.php');

class Login 
{

    private const METHOD_GET = 'GET';
    private const LOGIN_VIEW_NAME = 'login';
    private $ModeLogin;

    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] === self::METHOD_GET)
        {
            $data = [
                'usernameError'=>'dqmlkdjqszpmdjqskmd',
            ];
            $myView = new View(self::LOGIN_VIEW_NAME);
            $this->ModeLogin = new loginModel();
            if(isset( $this->ModeLogin ))
            {
                echo 'create';
            }
            else
            {
                echo ' NOT create';

            }
            return $myView->render(['data' => $data]);
        }
        
        if(isset($this->ModeLogin))
        {
            echo 'create';
        }
        else
        {
            echo ' NOT create';

        }
    }
    
     
}