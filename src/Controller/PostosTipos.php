<?php
/**
 * Created by PhpStorm.
 * User: juba
 * Date: 15/02/19
 * Time: 23:49
 */

namespace src\Controller;

use src\Model\PostosTipos as PostosTiposModel;

/**
 * Class PostosTipos
 * @package src\Controller
 */
class PostosTipos
{
    /**
     * @var PostosTiposModel
     */
    private $postosTiposModel;

    /**
     * PostosTipos constructor.
     */
    public function __construct()
    {
        $this->postosTiposModel = new PostosTiposModel();
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function listar()
    {
        try{
            $postosTipos = $this->postosTiposModel->listar();

            return $postosTipos;

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

            $this->postosTiposModel->setNome($_POST['nome']);

            $response = $this->postosTiposModel->salvar();

            return $response;

        }catch (\Exception $e){
            $msg = $e->getMessage();
            throw new \Exception($msg);
        }
    }
}