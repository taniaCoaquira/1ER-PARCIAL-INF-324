<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {

	public function index()
	{
                $this->load->model('Persona_model');
                $data['personas'] = $this->Persona_model->get_personas();
                $this->load->view('index.php',$data);
		
	}

        public function store()
	{   
                $this->load->model('Persona_model');
                $ci= $this->Persona_model->insert_persona($_POST);
                $this->load->helper('url');
                //espacificar dominio
                redirect("http://localhost:8081/code/index.php/persona/index");

	}

        public function create()
	{   
                $this->load->view('alta.php');
	}

         public function edit($id)
	{
                $this->load->model('Persona_model');
                $data['persona'] = $this->Persona_model->get_persona_by_id($id);
                $this->load->view('cambio.php',$data);
	}


        public function update($id)
	{
                $this->load->model('Persona_model');
                $ci= $this->Persona_model->update_persona($_POST,$id);
                echo $ci;
                $this->load->helper('url');
                redirect("http://localhost:8081/code/index.php/persona/index");
        
	}

        public function destroy($id )
	{
                $this->load->model('Persona_model');
                $resultado = $this->Persona_model->get_persona_by_id($id);
                if(count($resultado) > 0)
                {
                    $this->Persona_model->destroy_persona($id);
                    $this->index();
                }
                $this->load->helper('url');
                redirect("http://localhost:8081/code/index.php/persona/index");
	}
}
