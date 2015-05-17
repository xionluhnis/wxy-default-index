<?php

include_once ROOT_DIR . 'files.php';

/**
 * Check whether to redirect to index.html
 */

class Default_Index {
    public function request_url(&$route) {
        $file = Files::resolve_page($route);
        if(!file_exists($file)){
            $default = Files::resolve_page($route . '/index', '.html');
            if(file_exists($default)){
                header('Location: ' . Request::base_url() . $route . 'index.html');
                exit(0);
            }
        }
    }
}
