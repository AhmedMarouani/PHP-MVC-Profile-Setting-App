<?php
    class Dbh{
        protected function connect(){
            try{
                $user = "root";
                $pass = "";
                $pdo = new PDO("mysql:host=localhost; dbname=programmer_test",$user, $pass );
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
            }catch(PDOException $e){
                print "Error!!: " . $e->getMessage() . "</br>";
                die();
            }
        }
    }
?>