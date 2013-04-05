<?php
class Student_model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function load_students()
    {
    	return 'student model called: all students'; //return "student domain object";
    }
    
    function load_student($id)
    {
    	return 'student model called: student detail ' . $id; //return "student domain object";
    }
}