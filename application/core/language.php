<?php
    class t{
        protected static $translate;
        public function __construct(){
            
            if(!isset($_SESSION['translate'])) $language='ru';
            else $language=$_SESSION['translate'];
            require_once 'translate/'.$language.'.php';
            self::$translate=$translate;
        }
        private function __clone(){
            
        }
        public static function gett(){
             if (null === self::$translate) {
             new self();
             return self::$translate;
             
        }
            return self::$translate;
        }
        public static function sett($translate){
             $_SESSION['translate']=$translate; 
        }
      
    }
?>