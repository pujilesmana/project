<?php
	/**''
	 * 
	 */
	class M_user extends CI_Model
	{
		function cekuser($username,$password){
	        $hasil=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' ");
	        return $hasil;
		}

		function save_user($nama,$username,$password,$level){
			$hasil = $this->db->query("INSERT INTO user(user_nama,username,password,user_level) VALUES ('$nama','$username','$password','$level')");
			return $hasil;
		}
	}
?>