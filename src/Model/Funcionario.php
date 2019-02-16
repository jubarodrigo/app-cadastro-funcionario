<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/02/19
 * Time: 11:40
 */

namespace src\Model;

use src\Config\Conn as DB;

/**
 * Class Funcionario
 * @package src\Model
 */
class Funcionario
{
    /**
     * @var string
     */
    private $nome;
    /**
     * @var string
     */
    private $dataNascimento;
    /**
     * @var string
     */
    private $cidade;
    /**
     * @var integer
     */
    private $telefone;
    /**
     * @var DB
     */
    private $db;

    /**
     * Funcionario constructor.
     */
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * @return array
     */
    public function listar(){

        $sql = $this->db->query("SELECT * FROM funcionarios");
        $response = $sql->fetchAll(\PDO::FETCH_ASSOC);

        return $response;
    }

    /**
     * @return bool
     */
    public function salvar(){
        $sql = "INSERT INTO funcionarios (nome,data_nascimento,cidade,telefone) values (:nome,:data_nascimento,:cidade,:telefone)";

        $response = $this->db->prepare($sql);
        $response->bindParam(':nome',$this->nome);
        $response->bindParam(':data_nascimento',$this->dataNascimento);
        $response->bindParam(':cidade',$this->cidade);
        $response->bindParam(':telefone',$this->telefone);

        return $response->execute();
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @param mixed $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }


}