<?php

class View
{
    private $template;

    public function __construct($template)
    {
        $this->template = $template;
    }

    public function render($params = [])
    {
        $template = $this->template;
        ob_start();
        extract($params);
        include(VIEW .$template.'.php');
        $content = ob_get_clean();
        include(VIEW.'_template.php');
    }



}

