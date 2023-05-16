<?php

class Connection{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = 'sql308.epizy.com';
        $this->db = 'epiz_34220649_vetemovil';
        $this->user = 'epiz_34220649';
        $this->password = "09J1U9vlOLePce";
        $this->charset = 'utf8mb4';
    }

    public function connect(){
    
        try{
            
            $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection,$this->user,$this->password);
        
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}

?>