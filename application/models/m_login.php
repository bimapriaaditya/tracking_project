<?php 
 
class M_login extends CI_Model{	
	// Cek Username dan Password Admin
	function login_admin($username,$password)
	{		
		$query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password=MD5('$password')");
		return $query;
	}
	// cek Username Dan Password Pimpinan
	function login_pimpinan($username,$password){
		$query=$this->db->query("SELECT * FROM pimpinan WHERE username='$username' AND password=MD5('$password')");
		return $query;
	}
}

?>