<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Votacion extends CI_Controller {

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
	public function index($categoria = '')
	{

        if ($categoria != ''):

            if ($categoria == 'puntualidad'):
                $this->load->view('puntualidadInv');

            elseif ($categoria == 'puntualidadInv'):
                $this->load->view('mejorEstudiante');

            elseif ($categoria == 'mejorEstudiante'):
                $this->load->view('mudoInv');

            elseif ($categoria == 'mudoInv'):
                $this->load->view('mejorEstudianteInv');

            elseif ($categoria == 'mejorEstudianteInv'):
                $this->load->view('disculpas');

            elseif ($categoria == 'disculpas'):
                $this->load->view('gigolo');

            elseif ($categoria == 'gigolo'):
                $this->load->view('uniforme');

            elseif ($categoria == 'uniforme'):
                $this->load->view('mudo');

            elseif ($categoria == 'mudo'):
                $this->load->view('uniformeInv');

            elseif ($categoria == 'uniformeInv'):
                $this->load->view('elevado');

            elseif ($categoria == 'elevado'):
                $this->load->view('elevadoInv');

            elseif ($categoria == 'elevadoInv'):
                $this->load->view('asistencia');

            elseif ($categoria == 'asistencia'):
                $this->load->view('asistenciaInv');

            elseif ($categoria == 'asistenciaInv'):
                $this->load->view('veneno');

            elseif ($categoria == 'veneno'):
                $this->load->view('alegon');

            elseif ($categoria == 'alegon'):
                $this->load->view('calma');

            elseif ($categoria == 'calma'):
                $this->load->view('imprudente');

            elseif ($categoria == 'imprudente'):
                $this->load->view('social');

            elseif ($categoria == 'social'):
                $this->load->view('socialInv');
            endif;
        else:
        $this->load->model('Votacion_Modelo');
        $this->load->view('puntualidad');
        endif;
    }

	public function guardar()
    {
        $datos =  array
        (
            'categoria' => $this->input->post('categoria'),
            'voto' => $this->input->post('participante')
        );
        $this->load->model('Votacion_Modelo');
        $this->Votacion_Modelo->guardar_sql($datos);
        redirect('Votacion/index/'.$datos['categoria'].'');
    }
}
