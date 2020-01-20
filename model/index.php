<?php

  class Database{
    static $servername = "127.0.0.1";
    static $port = "3306";
    static $username = "test";
    static $password = "test";
    static $dbname = "test";
    static $conn;

    public static function connect(){
      self::$conn = new PDO("mysql:host=".self::$servername.";port=".self::$port.";dbname=".self::$dbname, self::$username, self::$password);
      self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    //метод для записи в бд 
    public static function change($query){
      self::$conn->query($query);
    }

    //метод для вывода данных из бд 
    public static function select($query){
      $data = self::$conn->query($query);
      return $data->fetchAll(PDO::FETCH_ASSOC);
    }
  }