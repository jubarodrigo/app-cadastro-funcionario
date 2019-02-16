<?php
/**
 * Created by PhpStorm.
 * User: juba
 * Date: 15/02/19
 * Time: 23:37
 */

namespace src\Model;

use src\Config\Conn as DB;

/**
 * Class Postos
 * @package src\Model
 */
class Postos
{
    /**
     * @var
     */
    private $setorId;
    /**
     * @var
     */
    private $tipoId;
    /**
     * @var \PDO|null
     */
    private $db;

    /**
     * Postos constructor.
     */
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * @return array
     */
    public function listar(){

        $sql = $this->db->query("SELECT * FROM postos p 
                                            JOIN postos_tipo pt on p.tipo_id = pt.id
                                            JOIN postos_setor ps on p.setor_id = ps.id ");
        $response = $sql->fetchAll(\PDO::FETCH_ASSOC);

        return $response;
    }

    /**
     * @return mixed
     */
    public function getSetorId()
    {
        return $this->setorId;
    }

    /**
     * @param mixed $setorId
     */
    public function setSetorId($setorId)
    {
        $this->setorId = $setorId;
    }

    /**
     * @return mixed
     */
    public function getTipoId()
    {
        return $this->tipoId;
    }

    /**
     * @param mixed $tipoId
     */
    public function setTipoId($tipoId)
    {
        $this->tipoId = $tipoId;
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