<?php
/**
 * Created by PhpStorm.
 * User: juba
 * Date: 15/02/19
 * Time: 23:37
 */

namespace src\Controller;

use src\Model\Postos as PostosModel;


/**
 * Class Postos
 * @package src\Controller
 */
class Postos
{

    /**
     * @var PostosModel
     */
    private $postoModel;

    /**
     * Funcionario constructor.
     */
    public function __construct()
    {
        $this->postoModel = new PostosModel();
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function listar()
    {
        try{
            $postos = $this->postoModel->listar();

            return $postos;

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

            $this->postoModel->setNome($_POST['nome']);
            $this->postoModel->setDataNascimento($_POST['data_nascimento']);
            $this->postoModel->setCidade($_POST['cidade']);
            $this->postoModel->setTelefone($_POST['telefone']);

            $response = $this->postoModel->salvar();

            return $response;

        }catch (\Exception $e){
            $msg = $e->getMessage();
            throw new \Exception($msg);
        }
    }

}