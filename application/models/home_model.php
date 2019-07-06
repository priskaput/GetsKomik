<?php
/**
 * 
 */
	class home_model extends CI_Model
	{
		
		function get_komik($limit, $start)
		{
            $this->db->select(
				'barang.id_barang, 
				barang.nama_komik, 
				barang.jumlah_komik, 
				barang.tahun,
				barang.kategori_id'
				);
            $this->db->join('kategori', 'barang.kategori_id = kategori.id_kategori');
			$query = $this->db->get('barang',$limit,$start);
			return $query;
		}

		// ambil data keuangan di database
		public function getBarang(){
			$id = $this->session->userdata('id');
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->join('kategori', 'barang.kategori_id = kategori.id_kategori');
			$this->db->where('barang.kategori_id', $id);
			return $this->db->get()->result();
		}
	}
?>