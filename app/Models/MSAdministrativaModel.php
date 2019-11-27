<?php
class MSAdministrativaModel{
    private $db;
    private $msadministrativa;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->msadministrativa = array();
    }
    public function listar(){
        $consulta = $this->db->query("select * from usuarios;");
        while($registros = $consulta->fetch_assoc()){
            $this->msadministrativa[] = $registros;
        }
        return $this->msadministrativa;
    }
}

?>