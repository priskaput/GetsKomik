<?php
class chart_model extends CI_Model{
    function get_data(){
    	$this->db->select('kategori.jenis_komik, sum(barang.jumlah_komik) as total, barang.tahun');
    	$this->db->group_by('barang.tahun');
        $this->db->join('kategori', 'barang.kategori_id = kategori.id_kategori');
        $result=$this->db->get('barang');
        return $result;
    }

    function get_kategori_komik(){
    	$this->db->select('*');
    	return $this->db->get('barang');
    }

    function get_type(){
    	$this->db->select('*');
    	return $this->db->get('kategori');
    }

    function get_total_by_kategori($param, $param_tahun){
    	$this->db->select('jumlah_komik');
    	$this->db->group_by('kategori_id');
    	$this->db->where('kategori_id', $param);
    	$this->db->where('tahun', $param_tahun);
    	return $this->db->get('barang');
    }

    function get_tahun(){
    	$this->db->select('tahun');
    	$this->db->group_by('tahun');
    	return $this->db->get('barang');
    }
}
?>