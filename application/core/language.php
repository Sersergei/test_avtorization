<?php
    class t{
        protected static $translate;
        public function __construct(){
            
            if($_SESSION['translate']) $language='ru';
            require_once 'translate/'.$_SESSION['translate'].'.php';
            self::$translate=$translate;
        }
        private function __clone(){
            
        }
        public static function gett(){
             if (null === self::$translate) {
             new self();
             
             
        }
            return self::$translate;
        }
        public static function sett($translate){
             $_SESSION['translate']=$translate; 
        }
      
    }
?>