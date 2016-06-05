<?php

namespace Controller;


abstract class Controller
{
    function render($view, $data = [])
    {
        ob_start();
        extract($data);
        require APP_VIEW_DIR.$view;
        $output = ob_get_clean();

        return $output;
    }
}