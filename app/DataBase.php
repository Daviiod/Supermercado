<?php
namespace App;
use PDO;
use PDOException;

class DataBase{

    private const HOST = 'localhost';
    private const USER = 'root';
    private const PASSWORD = '456';
    private const DBNAME = 'supermercado';

    private $connection;
    private $table;

    public function __contruct($table){
        $this->table = $table;
        $this->setConnection();
    }
    //metodo que cria conexao com o banco
    public function setConnection(){
        $connection = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME,self::USER,self::PASSWORD);
    }
    //metodo que cadastra/insere dados
    public function insert($array){
    //extrair as chaves do array
    $fields = array_keys($array);
    //criar um array com valores =  ?
    $binds = array_pad([],count($array),'?');
    //criar a query
    $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES('.implode(',',$binds).')';
    //executar a query
    //$this->execute($query, array_values($array));
    return $this->connection->lastInsertId();
    }
}

$db = new DataBase('fornecedor');
$db->insert([
    'nome'=>'Saka Max',
    'cnpj'=>'324',
    'telefone'=>'(63) 9 9745-5148',
    'email'=>'saka@max.com',
    'endereco'=>'Rua Saka Max']);
?>

git config --global user.name "Daviiod"
git config --global user.email "davioliveiraduarte2018@gmail.com"
