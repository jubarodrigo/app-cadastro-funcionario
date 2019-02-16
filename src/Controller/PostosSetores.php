<?php
/**
 * Created by PhpStorm.
 * User: juba
 * Date: 15/02/19
 * Time: 23:49
 */

namespace src\Controller;

use src\Model\PostosSetores as PostosSetoresModel;

/**
 * Class PostosSetores
 * @package src\Controller
 */
class PostosSetores
{
    /**
     * @var PostosSetoresModel
     */
    private $postosSetoresModel;

    /**
     * PostosSetores constructor.
     */
    public function __construct()
    {
        $this->postosSetoresModel = new PostosSetoresModel();
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function listar()
    {
        try{
            $postosSetores = $this->postosSetoresModel->listar();

            return $postosSetores;

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

            $this->postosSetoresModel->setNome($_POST['nome']);

            $response = $this->postosSetoresModel->salvar();

            return $response;

        }catch (\Exception $e){
            $msg = $e->getMessage();
            throw new \Exception($msg);
        }
    }
}