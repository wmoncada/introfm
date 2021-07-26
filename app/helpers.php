<?php

if ( ! function_exists("view") ) 
{
    function view($view) 
    {
        return new App\Http\Response($view);
    }
}