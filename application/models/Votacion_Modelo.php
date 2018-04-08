<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Votacion_Modelo extends CI_Model {

    /**
     * Guarda el voto y la categoría de un usuario
     *
     * @param       $categoria, $voto
     * @return      true/false
     */
    public function guardar_sql($datos)
    {
        $this->db->set('fecha', 'CURDATE()', false);
        $this->db->set('usuariosId', $this->session->userdata('usuarioId'));

        $this->db->insert('Respuestas', $datos);
    }

    /**
     * Entrega la categoría en la cual va el usuario
     *
     * @param       $id
     * @return      Número
     */
    public function obtener_categoria_por_id($id)
    {
        $this->db->select('*');
        $this->db->from('Respuestas');
        $this->db->where('usuariosId', $id);
        $query = $this->db->get();

        if (!empty($query->result())) {
            return $query->result()[0]; //Categoría en la cual va el usuario
        }else {
            return 0; //No ha empezado el proceso
        }
    }
}