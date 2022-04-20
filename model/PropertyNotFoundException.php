<?php

class PropertyNotFoundException extends Exception
{

    private $_className;
    private $_property;


    public function __construct($className,$property,$message = "property missing")
    {

        $this->_className = $className;
        $this->_property = $property;
        parent::__construct($message,"0040");

    }

    public function getMoreDetail()
    {
         return "property " . $this->_property . " does not exist in class" . $this->_className;
    }

}