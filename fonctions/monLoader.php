<?php
spl_autoload_register('Autoloader::autoloadTrait');
spl_autoload_register('Autoloader::autoloadDto');
spl_autoload_register('Autoloader::autoloadDao');
spl_autoload_register('Autoloader::autoloadFonctions');


class Autoloader{
    
    
    static function autoloadTrait($class){
        $file = 'traits/' . lcfirst($class) . '.php';
        if(is_file($file)&& is_readable($file)){
            require $file;
        }
        
    }
    
    
    static function autoloadDto($class){
        $file = 'modele/dto/' . lcfirst($class) . '.php';
        if(is_file($file)&& is_readable($file)){
            require $file;
        }
      
    }
    
    static function autoloadFonctions($class){
        $file = 'fonctions/' . lcfirst($class) . '.php';
        if(is_file($file)&& is_readable($file)){
            require $file;
        }
        
    }
    
    static function autoloadDao($class){
        $file = 'modele/dao/' . lcfirst($class) . '.php';
        if(is_file($file)&& is_readable($file)){
            require $file;
        }
        
    }
    
    
}


