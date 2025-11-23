<?php

function set_position() : int{
    if ($_GET){
        return $_GET["position"];
    }

    else{
        return 0;
    }
}

require "templates/layout.phtml"
?>