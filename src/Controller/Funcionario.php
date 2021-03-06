<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/02/19
 * Time: 11:40
 */

namespace src\Controller;

use src\Model\Funcionario as FuncionarioModel;

/**
 * Class Funcionario
 * @package src\Controller
 */
class Funcionario
{
    /**
     * @var FuncionarioModel
     */
    private $funcionarioModel;

    /**
     * Funcionario constructor.
     */
    public function __construct()
    {
        $this->funcionarioModel = new FuncionarioModel();
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function listar()
    {
        try{
            $funcionarios = $this->funcionarioModel->listar();

            return $funcionarios;

        }catch (\Exception $e){
            $msg = $e->getMessage();
            throw new \Exception($msg);
        }
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function salvar()
    {
        try{
            if (!isset($_POST['nome']))
                throw new \Exception("Nome Obrigatório");

            if (!isset($_POST['data_nascimento']))
                throw new \Exception("Data de Nascimento Obrigatória");

            if (!isset($_POST['cidade']))
                throw new \Exception("Cidade Obrigatória");

            if (!isset($_POST['telefone']))
                throw new \Exception("Telefone Obrigatório");

            $this->funcionarioModel->setNome($_POST['nome']);
            $this->funcionarioModel->setDataNascimento($_POST['data_nascimento']);
            $this->funcionarioModel->setCidade($_POST['cidade']);
            $this->funcionarioModel->setTelefone($_POST['telefone']);

            $response = $this->funcionarioModel->salvar();

            return $response;

        }catch (\Exception $e){
            $msg = $e->getMessage();
            throw new \Exception($msg);
        }
    }

}