<?php

class Route{

    private $_controller = array();

    public function routeController( $controller ){
        $this->_controller[] = $controller;

        self::submit();
    }

    public function submit(){
        #$uri = $_GET['uri'];

        //echo $uri;
    }
}

?>
