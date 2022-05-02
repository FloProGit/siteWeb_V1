<?php

class BDDCreationManager
{
    private $arrayAction =[];

    public function __construct($yamlPath,$conn)
    {
        $yamlArray = yaml_parse_file( $yamlPath );
        foreach ($yamlArray as $key => $Action)  {
            
            array_push($this->arrayAction, $this->CreateObjectsAction($key,$Action));
        }

        foreach ($this->arrayAction as $string)  
        {
            $sql = $string->getFinalString();
            $quit = false;
            echo $sql;
            while(!$quit)
            {
                    if( $conn->query($sql) === TRUE)
                    {
                        $quit = true;
                    }
                    else
                    {
                        sleep(2);
                        $quit = true;
                    }
            }
        }
    }
    public function CreateObjectsAction($keyAction,$Action) : ActionBDD
    {
          return new ActionBDD($keyAction,$Action);
    }

    public function showArrayAction() 
    {
         var_dump($this->arrayAction);
    }
}