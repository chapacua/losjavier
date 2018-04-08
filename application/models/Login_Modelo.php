<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Modelo extends CI_Model {

    /**
     * Verifica que el código exista
     *
     * @param       $Codigo
     * @return      array
     */
    public function validarCodigo($codigo)
    {
        $this->db->select('*');
        $this->db->from('Usuarios');
        $this->db->where('codigo', $codigo);
        $this->db->where('fechaInicio', null);
        $query = $this->db->get();

        if (!empty($query->result())) {
            return $query->result()[0]; //Puede loguearse
        }else
        {
            return false; //No puede loguearse
        }
    }
}