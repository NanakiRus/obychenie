<?php

class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        include $template;
    }

    public function render($template)
    {
        return $template;
    }
}