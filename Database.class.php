<?php

    class Conexao{

        private $db;

        public function __construct($dbHost, $dbName, $dbUser, $dbPass){
            try{
                $this->db = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPass);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {
                die("Erro ao conectar ao banco de dados: ". $e->getMessage());
            }
        }

        public function executarQuery($sql, $params = []){
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->execute($params);
                return $stmt;
            }catch(PDOExepition $e){
                die("Erro ao executar a consulta:" .$e->getMessage());
            }
        }
    }