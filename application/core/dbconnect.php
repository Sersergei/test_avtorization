<?php
class DBconnect
{
   
    protected static $_instance;
 
    private function __construct(){
              require_once "config_db.php";
        try{
            $connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME;
            self::$_instance=new PDO($connect_str,DB_USER,DB_PASS);
        }
        catch(PDOException $e) {  
            echo $e->getMessage();  
}
    }
  
    private function __clone(){
    }
  
    public static function getInstance() {
        
        if (null === self::$_instance) {
          
             new self();
        }
       
        return self::$_instance;
    }
}
?>