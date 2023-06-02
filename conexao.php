<?php

class Conexao{

    private $db;
    private $dbHost = "tads_2a_manha.mysql.dbaas.com.br";
    private $dbName = "tads_2a_manha";
    private $dbUser = "tads_2a_manha";
    private $dbPass = "UMCtads2023!";

    public function __construct()
    {
        
        try
        {
            $this->db = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOExepition $e)
        {
            die("Erro ao conectar ao banco de dados:" .$e->getMessage());
        }
    }//Fim do metÃ³do construtor



    public function executarQuery($sql, $params = [])
    {
        try 
        {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        }catch(PDOExepition $e)
        {
            die("Erro ao executar a consulta:" .$e->getMessage());
        }
    }

    //funções específicas para o CRUD
    //create
    public function cadastrarRegistro($dados)
    {
        $sql = "INSERT INTO luana_cp_cadastro SET titulo = :titulo, ingredientes = :ingredientes, modo_de_preparo = :modo_de_preparo WHERE luana_cp_cadastro"
        $stmt = $this->db->prepare($sql);
        $dados['id'] = $id;
        return $stmt->execute($dados);
    }

    //delete
    public function excluirRegistro($id)
    {
        $sql = "DELETE FROM luana_cp_cadastro WHERE luana_cp_cadastro.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('id:', $id);
        return $stmt->execute();
    }
} 