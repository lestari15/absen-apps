<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('Query');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
       
    }


    public function flsh_msg($title, $type, $msg)
    {
        $color = '';

        switch ($type) {
            case 'ok':
                $color = 'alert-success alert-dismissible';
                break;
            case 'warning':
                $color = 'callout-warning';
                break;
            case 'danger':
                $color = 'alert-danger alert-dismissible';
                break;
            default:
                $color = 'callout-info';
                break;
        }

        $flash_message = array('title' => $title,
            'color' => $color,
            'msg' => $msg
        );
        $this->session->set_flashdata('message', $flash_message);
    }

    public function absen_karyawan(){
        
        $datas = $this->Query->getDataLeftJoin(
            'karyawan', 
            'absen_karyawan',
            'id', 
            'id_karyawan',
            // date("Y-m-d"),
            )->result();
        

        $arr = array_values(array_column($datas, null, 'nama'));
        $data['karyawan'] = $arr;
        $query = $this->input->get('data', TRUE);
        if($query == 'berhasil') {
            $this->flsh_msg('Berhasil', 'ok', 'Anda berhasil absen');
        }else if($query == 'gagal'){
            $this->flsh_msg('Gagal', 'danger', 'Anda gagal absen');
        }
		$this->load->view('absen_karyawan/data_karyawan', $data);
	} 

}
