<?php


class MyAutoload
{
    public static function start()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));

        $root =$_SERVER['DOCUMENT_ROOT'];
        $host =$_SERVER['HTTP_HOST'];
        define('HOST',$_SERVER['REQUEST_SCHEME'].'://' . $host.'/');
        define('ROOT',$root.'/');
        define('CONTROLLER',ROOT . 'controller/');
        define('VIEW',ROOT .'view/');
        define('MODEL',ROOT .'model/');
        
        define('CSS',HOST.'source/CSS/');
        
        define('CLASSES',ROOT.'classes/');
    }
    public static function autoload($class)
    {
        $class =str_replace('app\\','',$class);

        $class =str_replace('\\','/',$class);

        if(file_exists(MODEL.$class.'.php'))
        {
            // echo 'MODEL AUTOLOAD => '.MODEL.$class.'.php';
            include_once(MODEL.$class.'.php');
        }
        // elseif(file_exists(CLASSES.$class.'.php'))
        // {
        //     echo 'CLASSES AUTOLOAD => '.CLASSES.$class.'.php';

        //     include_once(CLASSES.$class.'.php');
        // }
        elseif(file_exists(CONTROLLER.$class.'.php'))
        {
            // echo 'CONTROLLER AUTOLOAD => '.CONTROLLER.$class.'.php';

            include_once(CONTROLLER.$class.'.php');
          
        }
        elseif(file_exists($class.'.php'))
        {
            // echo 'NONE AUTOLOAD => '.$class.'.php';

            include_once($class.'.php');
        }
        else
        {
            echo 'ERROR AUTOLOAD => '. $class . " (not exist)";

        }
    }
}
?>