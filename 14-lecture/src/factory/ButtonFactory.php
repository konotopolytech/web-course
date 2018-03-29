<?php

require_once("Button.php");

class ButtonFactory
{
    public static function createButton($type)
    {        
        $baseClass = 'Button';
        $targetClass = ucfirst($type).$baseClass;
        
        require($targetClass . '.php');
        
        if (class_exists($targetClass) && is_subclass_of($targetClass, $baseClass)) {
            return new $targetClass;
        } else {
            throw new Exception("The button type '$type' is not recognized.");
        }
    }
}