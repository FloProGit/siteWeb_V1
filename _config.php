<?php


class MyAutoload
{
    public static function start()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));

        echo 'DEFINE ACTIVATED';
        $root =$_SERVER['DOCUMENT_ROOT'];
        $host =$_SERVER['HTTP_HOST'];
        define('HOST',$_SERVER['REQUEST_SCHEME'].'://' . $host.'/');
        define('ROOT',$root.'/');
        define('CONTROLLER',ROOT . 'controller/');
        define('VIEW',ROOT .'view/');
        define('MODEL',ROOT .'model/');
        
        define('CSS',HOST.'source/CSS/');
        
        define('CLASSES',ROOT.'classes/');
       // echo '<pre>';print_r($_SERVER);
    }
    public static function autoload($class)
    {
        if(file_exists(MODEL.$class.'.php'))
        {
            include_once(MODEL.$class.'.php');
        }
        elseif(file_exists(CLASSES.$class.'.php'))
        {
            include_once(CLASSES.$class.'.php');
        }
        elseif(file_exists(CONTROLLER.$class.'.php'))
        {
            include_once(CONTROLLER.$class.'.php');
          
        }
        else
        echo $class . "not exist/";
    }
}
?>