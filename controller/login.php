<?php



include_once(CLASSES.'View.php');
//include_once(MODEL.'loginModel.php');

class Login 
{

    private const METHOD_GET = 'GET';
    private const LOGIN_VIEW_NAME = 'login_view';
    private $ModeLogin;

    public function loginIn(): View 
    {
        if($_SERVER['REQUEST_METHOD'] === self::METHOD_GET)
        {
            $data = [
                'usernameError'=>'dqmlkdjqszpmdjqskmd',
            ];
            $myView = new View(self::LOGIN_VIEW_NAME);
           
            return $myView->render(['data' => $data]);
        }
        $username= $_POST['username'];
        $password= $_POST['password'];
        $this->ModeLogin = new loginModel($username,$password);
        $datafetch = $this->ModeLogin->validateUser();

        if($datafetch === 'NO USER FOUND')
        {
            echo 'NO USER FOUND';
        }
        else if($datafetch === true)
        {
            echo "VALIDATE";
        }
        else if($datafetch === false)
        {
            echo "wrong Password"; 
        }
      return new View(self::LOGIN_VIEW_NAME);
    }
    
     
}