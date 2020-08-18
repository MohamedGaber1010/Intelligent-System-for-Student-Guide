<?php

  class DataBase
  {

    /**
    * Holds a reference to the database connection handler (PDO)
    */
    private static $dbcon;

    // Private to prevent instantiation ..
    private function __construct(){}

    /**
    * Singleton design pattern
    * get only one single instance from the class
    */
    public static function getInstance(){
      if (self::$dbcon === null) {
        try {
          self::$dbcon = new PDO('mysql://hostname='. DB_HOST . ';dbname=' . DB_NAME , DB_USER, DB_PASS);
          self::$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          echo 'Failed To Connect' . $e->getMessage();
        }
      }
      return self::$dbcon;
    }
  }

 ?>
