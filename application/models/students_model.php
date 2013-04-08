<?php
class Student_model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
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