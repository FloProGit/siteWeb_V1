<?php
//include('_config.php');

include(CLASSES.'View.php');

class Home
{
    public function showHome()
    {
        $myView = new View('home');
        $myView->render();
    }

    public function showCompetence()
    {
        $myView = new View('competence');
        $myView->render();
    }

    public function showA_Propos()
    {
        $myView = new View('a_propos');
        $myView->render();
    }

  
}