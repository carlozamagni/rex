<?php
class Student_model extends CI_Model {

    var $id = 0;
    var $nome = '';
    var $cognome = '';

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->database();
    }

    function save()
    {
        $data = array(
            'nome' => $this->nome ,
            'cognome' => $this->cognome
        );

        $this->db->insert('studenti', $data); 
    }
    
    function load_students()
    {
    	return 'student model called: returning all students';
    }
    
    function load_student($id)
    {
    	$q = $this
            ->db
            ->where('id', $id)
            ->limit(1)
            ->get('studenti');

        if ( $q->num_rows > 0 ) {
            return $q->row();  //return "domain object"
        }

        return false; //return null
    }
}