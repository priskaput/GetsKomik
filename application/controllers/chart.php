<?php
class chart extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('chart_model');
    }

    function index(){
        $data = $this->chart_model->get_data()->result();
        $kategori = $this->chart_model->get_type()->result();
        $tahun = $this->chart_model->get_tahun()->result();
        $final = [];
        for ($i=0; $i < count($tahun); $i++) {
        	$final[$i]['tahun'] = $tahun[$i]->tahun;

        	for ($j=0; $j < count($kategori); $j++) { 
        		$final[$i][$kategori[$j]->jenis_komik] = $this->chart_model->get_total_by_kategori(@$kategori[$j]->id_kategori, $tahun[$i]->tahun)->result()[0]->jumlah_komik;
        	}

        }

        $this->load->view('chart_view', [
        	'data' => json_encode($final)
        ]);
    }
}
