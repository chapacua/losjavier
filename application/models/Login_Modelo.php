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
        $query = $this->db->get();
        if($query->num_rows()>0){
            foreach ($query->result() as $user) {
                # code...
                $datosSesion = array(
                    'usuarioId'  => $user->usuariosId,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($datosSesion);//Seteo de las variables de session
                return true; //Puede loguearse
            }
        }else
        {
            return false; //No puede loguearse
        }
    }
}