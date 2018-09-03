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
	public function index()
	{
	    if ($this->session->userdata('logged_in') == FALSE):
            redirect('/');
	    else:
        $this->load->model('Votacion_Modelo');
        $user_id = $this->session->userdata('usuarioId');
        $categoria_Actual = $this->Votacion_Modelo->obtener_categoria_actual_por_id($user_id);
            if ($categoria_Actual == false):
                $variables['categoria'] = 'puntualidad';
                $variables['titulo'] = 'Miss Puntualidad';
                $variables['descripcion'] = '¿Quíen es esa persona que siempre llega a tiempo a las clases, tanto al inicio de la jornada como luego de los descansos?.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'puntualidad'):
                $variables['categoria'] = 'puntualidadInv';
                $variables['titulo'] = 'Miss inputal';
                $variables['descripcion'] = '¿Quien es ese/a que siempre llega tarde a todos lados, que entrega los trabajos tarde y que llegaría tarde hasta su propio velorio?.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'puntualidadInv'):
                $variables['categoria'] = 'mejorEstudiante';
                $variables['titulo'] = 'Miss Juicio';
                $variables['descripcion'] = 'Esa persona que en su conjunto de disciplina/resultados/esfuerzo podrías considerar el mejor estudiante.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'mejorEstudiante'):
                $variables['categoria'] = 'mudoInv';
                $variables['titulo'] = 'Miss incallable';
                $variables['descripcion'] = '¿Quien es la persona que nunca para de hablar, que siempre tiene algo para decir y que no conoce la palabra silencio?.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'mudoInv'):
                $variables['categoria'] = 'mejorEstudianteInv';
                $variables['titulo'] = 'Miss vago';
                $variables['descripcion'] = 'Dale tu voto al que no hace nada, que vive y se mueve por inercia, ese que hace parecer a Don Ramón un gran trabajador.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'mejorEstudianteInv'):
                $variables['categoria'] = 'disculpas';
                $variables['titulo'] = 'Miss Disculpas';
                $variables['descripcion'] = 'El que siempre tiene una excusa para todo, que ya ha 7 veces la misma tía, mantiene en el "médico" y se le ha muerto el perro 8 veces.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'disculpas'):
                $variables['categoria'] = 'gigolo';
                $variables['titulo'] = 'Miss Gigoló';
                $variables['descripcion'] = 'Este voto va para ese/a que quiere con tod@s, que le hace a todo lo que se mueva y respire.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'gigolo'):
                $variables['categoria'] = 'uniforme';
                $variables['titulo'] = 'Miss uniforme';
                $variables['descripcion'] = 'El voto acá es para ese ser casi mítico que siempre porta su uniforme correctamente y en los dias que son.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'uniforme'):
                $variables['categoria'] = 'mudo';
                $variables['titulo'] = 'Miss mudo/a';
                $variables['descripcion'] = '¿Quién es esa persona que luego de 1 año de estudiar practicamente no le conoces la voz, su presencia solo se confirma durante el llamado a lista y luego se desvanece cual ninja en la oscuridad.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'mudo'):
                $variables['categoria'] = 'uniformeInv';
                $variables['titulo'] = 'Miss Sinuniforme';
                $variables['descripcion'] = 'Indentifica a esa persona que aún no sabemos si estudia en el SENA o está de visita porque nunca o rara vez le has visto el uniforme puesto.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'uniformeInv'):
                $variables['categoria'] = 'elevado';
                $variables['titulo'] = 'Miss en las nubes';
                $variables['descripcion'] = 'Vota por el o la que siempre está distraido/a, que nunca pone antención y que no sabe ni donde está parado/a';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'elevado'):
                $variables['categoria'] = 'elevadoInv';
                $variables['titulo'] = 'Miss Concentración';
                $variables['descripcion'] = 'Vota por esa persona que no importa si el mundo se está cayendo a su alrededor, siempre está concentrado/a y presto a esuchcar al profesor o profesora.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'elevadoInv'):
                $variables['categoria'] = 'asistencia';
                $variables['titulo'] = 'Miss Asistencia';
                $variables['descripcion'] = 'Vota por esa persona que cuando se levanta a orinar le tienden la cama y por eso nunca ha faltado a clase, su presencia en formación es una constante y el día que falte posiblemente el mundo termine o nazca el anticristo.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'asistencia'):
                $variables['categoria'] = 'asistenciaInv';
                $variables['titulo'] = 'Miss Fantasma';
                $variables['descripcion'] = '¿Quien es ese o esa que tiene pico y placa para el SENA todos los días que constantemente falta a clase y que verle en el ambiente es casi considerado un acontencimiento historico.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'asistenciaInv'):
                $variables['categoria'] = 'veneno';
                $variables['titulo'] = 'Miss Veneno';
                $variables['descripcion'] = '¿Quien es esa persona que está enrazada con cascabel y cobra, cuyas palabras siempre salen adobadas con una dosis letal de veneno?.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'veneno'):
                $variables['categoria'] = 'alegon';
                $variables['titulo'] = 'Miss Alegon/a';
                $variables['descripcion'] = 'Votemos por ese individuo o individua que siempre refuta todo, que nunca queda conforme con ninguna respuesta, que siempre tiene un argumento extra y a quien dificilmente le ganarías una discución.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'alegon'):
                $variables['categoria'] = 'calma';
                $variables['titulo'] = 'Miss calma';
                $variables['descripcion'] = 'Idenfitica a esa persona para quien todo es paz y amor, que nunca se enoja, que siempre está calmada, que casi parece que no tuviera sentimiento alguno.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'calma'):
                $variables['categoria'] = 'simpatia';
                $variables['titulo'] = 'Miss Simpatia';
                $variables['descripcion'] = 'Vota por esa persona que normalmente le cae bien a la gente, no crea conflictos, se lleva bien con todos y siempre actúa con gentileza buscando que los demás se sientan bien en su compañía.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'simpatia'):
                $variables['categoria'] = 'imprudente';
                $variables['titulo'] = 'Miss imprudente';
                $variables['descripcion'] = 'Aquí la tendrás dificil, vota por esa persona que siempre dice lo que no debe cuando no debe, que siempre tiene un comentario fuera de tono, disonante o que no aplica y que por el cual has sentido "pena ajena".';
                $this->load->view('tarjeton', $variables);
                
            elseif ($categoria_Actual == 'imprudente'):
                $variables['categoria'] = 'nea';
                $variables['titulo'] = 'Miss Nea';
                $variables['descripcion'] = 'como todos en cualquier círculo social, nos encontramos ese personaje que inspira el aroma de una rosa, y por rosa, me refiero a la vendedora de rosas. Ese personaje que nos hace cruzar la calle al escucharle hablar. Digamos liendra, guiso o nea.';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'nea'):
                $variables['categoria'] = 'guapo';
                $variables['titulo'] = 'Miss guapo';
                $variables['descripcion'] = 'Solo HOMBRES, vota por el que consideres es el tipo más bien parecido del ambiente, cuyo físico rivaliza con los dioses y que podría conquistar a cualquier mujer con solo mirarla".';
                $this->load->view('tarjeton', $variables);

            elseif ($categoria_Actual == 'guapo'):
                $this->session->sess_destroy();
                // null the session (just in case):
                $this->session->set_userdata(array('usuarioId' => '', 'logged_in' => FALSE));
                $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
                $this->output->set_header("Pragma: no-cache");
                $this->load->view('fin');
            endif;
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
        redirect('votacion');
    }
}
