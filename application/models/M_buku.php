<?php 
	/**
	 * 
	 */
	class M_buku extends CI_Model
	{
		
		function save_buku($nama,$penulis,$stock,$harga,$foto){
			$hasil = $this->db->query("INSERT INTO databuku(buku_nama,buku_penulis,buku_stock,buku_harga,buku_foto) VALUES ('$nama','$penulis','$stock','$harga','$foto')");
			return $hasil;
		}
	}
?>