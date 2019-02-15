<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/02/19
 * Time: 11:40
 */

namespace src\Controller;

use src\Model\Funcionario as FuncionarioModel;

class Funcionario
{
    private $funcionarioModel;

    public function __construct()
    {
        $this->funcionarioModel = new FuncionarioModel();
    }

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

}