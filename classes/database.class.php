<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/__lib/main.php';

class database{

    public static $getdatabase=NULL;

    public static function getconnection(){

        if(database::$getdatabase==NULL){

            $server=get_config("servername");
            $username=get_config("username");
            $userpass=get_config("password");
            $db_name=get_config("dbname");

            $conn=new mysqli($server,$username,$userpass,$db_name);

            if($conn->connect_error==true){
                return false;
            }
            else{

                database::$getdatabase = $conn;
                return $conn;
                

            }
        }
        else{
            return database::$getdatabase;
        }




    }
}