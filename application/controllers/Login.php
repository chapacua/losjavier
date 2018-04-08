<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    /**
     * Carga la vista inicial
     */
	public function index()
	{
		$this->load->view('login');
	}

    /**
     * Recibe los datos del login y los procesa
     *
     * @param       POST->Codigo
     * @return      true/false
     */
	public function ingresar()
    {
        $this->load->model("Login_Modelo");//Llamo el modelo

        $codigo = $this->input->post("codigo");//Recibo la variable
        $resultado = $this->Login_Modelo->validarCodigo($codigo);//Valido si el código exisite y si ya fue usado

        if ($resultado <> false)//Si el código no ha sido usado y existe
        {
            $datosSesion = array(
                'usuarioId'  => $resultado->usuariosId,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($datosSesion);//Seteo de las variables de session
            redirect('votacion');

            echo "2";
        }
        elseif($resultado == false)//Si el código ya fue usado o no existe
        {
            echo "1";
            die();
        }
    }
}
