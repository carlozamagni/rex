<?php

class Auth_model extends CI_Model {
	function __construct()
	{
		$this->load->database();
   }

   public function verify_user($email, $password)
   {
      echo "db access";

      $q = $this
            ->db
            ->where('email_address', $email)
            ->where('password', sha1($password))
            ->limit(1)
            ->get('users');

      if ( $q->num_rows > 0 ) {
         // person has account with us
         return $q->row();
      }
      return false;
   }
}