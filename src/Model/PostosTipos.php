<?php
/**
 * Created by PhpStorm.
 * User: juba
 * Date: 15/02/19
 * Time: 23:38
 */

namespace src\Model;

use src\Config\Conn as DB;

/**
 * Class PostosTipos
 * @package src\Model
 */
class PostosTipos
{
    /**
     * @var
     */
    private $nome;

    /**
     * @var \PDO|null
     */
    private $db;

    /**
     * PostosTipos constructor.
     */
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * @return array
     */
    public function listar(){

        $sql = $this->db->query("SELECT * FROM postos_tipo");
        $response = $sql->fetchAll(\PDO::FETCH_ASSOC);

        return $response;
    }

    /**
     * @return bool
     */
    public function salvar(){
        $sql = "INSERT INTO postos_tipo (nome) values (:nome)";

        $response = $this->db->prepare($sql);
        $response->bindParam(':nome',$this->nome);

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
     * @return \PDO|null
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param \PDO|null $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }


}