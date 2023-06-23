<?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','area_analysis');

    class DB_con{
        function __construct(){
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if(mysqli_connect_error()){
                echo"Feiled to connect Mysql:"+mysqli_connect_error(); 
            }
        }
        public function insert($area,$strength,$weakness,$chance,$obstacle,$tourist,$plant,$creature,$community,$name,$time){
            $result = mysqli_query($this->dbcon,"INSERT INTO tblusers(area,strength,weakness,chance,obstacle,tourist,plant,
            creature,community,name,time) VALUES('$area','$strength','$weakness','$chance','$obstacle','$tourist','$plant','$creature','$community','$name','$time')");
            return $result;
            
        }
        public function fetchdata(){
            $result = mysqli_query($this->dbcon,"SELECT*FROM tblusers");
            return $result;
        }
    }
?>