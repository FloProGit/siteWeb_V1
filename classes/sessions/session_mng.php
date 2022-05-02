<?php



class SessionMng{

 static function init_php_session() : bool
 {
    if(!session_id())
    {
        session_start();
        session_regenerate_id();
        return true;
    }
    return false;
 }
 static function clean_php_session() : void
 {
    session_unset();
    session_destroy();
 }

}