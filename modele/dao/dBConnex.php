<?php
    class dBConnex extends PDO{
        private static $instance;
        
        public static function getInstance(){
            if ( !self::$instance ){
                self::$instance = new dBConnex();
            }
            return self::$instance;
        }
        
        function __construct(){
            try {
                parent::__construct(Param::$dsn ,Param::$user, Param::$pass);
            } catch (Exception $e) {
                echo $e->getMessage();
                die("Impossible de se connecter. " );
            }
        }
        
        
    }


