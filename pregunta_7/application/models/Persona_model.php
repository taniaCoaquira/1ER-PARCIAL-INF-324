<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Persona_model extends CI_Model {

    public $ci;
    public $nombre_completo;
    public $fecha_nacimiento;
    public $departamento;

    public function __construct(){
        parent::__construct();
    } 
    public function get_persona_by_id($id){
        $this->load->database();
        $query=$this->db->query("select * from persona where ci=$id");
        return $query->result();
    }
    
    
    public function get_personas()
    {
        $this->load->database();
        $query=$this->db->query("select * from persona");
        return $query->result();
    }

    public function insert_persona($persona)
    {
        $this->load->database();
        $this->db->insert('Persona',$persona);
        return $this->db->insert_id();
    }

    public function update_persona($persona,$id)
    {
        $this->load->database();
        $this->db->where('ci',$id);
        return $this->db->update('Persona',$persona);
    }
    public function destroy_persona($id){

        $this->load->database();
        $query=$this->db->query("delete from persona where ci =$id");
       
    }

}