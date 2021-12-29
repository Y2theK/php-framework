<?php
      class Connection{
        public static function make($config){
                try{
                    return $pdo = new PDO("{$config['host']};dbname={$config['dbname']}",
                                    $config['username'],
                                    $config['password']);
                    // return $pdo;
                }catch(PDOEXCEPTION $e){
                    $e->getmessage();
            }
        }
    }

?>