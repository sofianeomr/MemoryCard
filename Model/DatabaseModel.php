<?php 

class DatabaseModel { 
    private static $dbName = 'u705298866_MemoryCard'; 
    private static $dbHost = '127.0.0.1:3306' ; 
    private static $dbUsername = 'u705298866_omranis'; 
    private static $dbUserPassword = ''; 
    private static $cont = null; 
    public function __construct() { 
        die('Init function is not allowed'); 
    } 
    public static function connect() { 
        // Connexion à la base de données

        if ( null == self::$cont ) 
        { 
        try 
            { 
                self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
            } 
        catch(PDOException $e) 
        { 
            die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>
