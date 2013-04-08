<?php
class Teachers_model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function load_teachers()
    {
    	return 'teachers model called: returning teachers list';
    }
    
    function load_teacher($id)
    {
    	$q = $this
            ->db
            ->where('id', $id)
            ->limit(1)
            ->get('docenti');

		if ( $q->num_rows > 0 ) {
        	return $q->row();  //return "domain object"
      	}

    	return false; // return null
    }
}