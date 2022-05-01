<?php


class Router
{

    private $request;
    

    private $routes =[

        'home'=>['controller' => 'home', 'method'=>'showHome'],

        'competence'=>['controller' => 'home', 'method'=>'showCompetence'],

        'a_propos'=>['controller' => 'home', 'method'=>'showA_Propos'],

        'login'=>['controller' => 'login', 'method'=>'loginIn'],

        // -----use only for check some  variable -----
        'check'=>['controller' => 'home', 'method'=>'showCheck'],
        //------------------------------



        ];

    public function __construct($request)
    {
        $this->request = $request;    

    }


    public function renderController()
    {
        $request = $this->request;
        echo $request;
        if(key_exists($request, $this->routes))
        {
            $controller = $this->routes[$request]['controller'];
          
            $method = $this->routes[$request]['method'];
            
            $currentController = new $controller();

            $currentController->$method();
        }
        else
        {
            echo '404';
        }
    }
}