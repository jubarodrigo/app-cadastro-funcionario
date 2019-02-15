<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/02/19
 * Time: 11:40
 */

namespace src\Model;

use src\Config\Database as DB;

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

    public function __construct()
    {
        $this->db = new DB();
    }

    public function listar(){
        $sql = "SELECT * FROM funcionarios";
        $response = $this->prepare($sql);
        $response->setFetchMode(\PDO::FETCH_ASSOC);

        return $response;
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