<?php
class DatabaseConnection
{
    public function connect(){
        $connection = new PDO("mysql:host=localhost;dbname=Shopping_Cart_Exam","Localuser","Localpass");
        return $connection;
    }
}