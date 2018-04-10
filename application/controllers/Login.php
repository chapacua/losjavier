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
        $userSession = $this->session->userdata('usuarioId');
        if(empty($userSession)){
		  $this->load->view('login');
        } else{
            redirect('votacion');
        }
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
        var_dump($resultado) ;
        if ($resultado == true):
            redirect('votacion');
        else:
            redirect('login/error');
        endif;
    }

    public function error()
    {
        $var['ingreso'] = true;
        $this->load->view('login', $var);

    }
}
