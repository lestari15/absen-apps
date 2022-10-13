<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Query');
        $this->load->library('form_validation');
        $this->nama = $_SESSION['nama'];
        $this->username = $_SESSION['username'];
        $this->email = $_SESSION['email'];
        $this->level = $_SESSION['level'];

        #cek login
        if (isset($_SESSION['user_is_login']) and $_SESSION['user_is_login'] == true and $_SESSION['level'] == "admin") :
            $this->nama = $_SESSION['nama'];
            $this->username = $_SESSION['username'];
            $this->email = $_SESSION['email'];
            $this->level = $_SESSION['level'];
        else :
            $this->flsh_msg('Perhatian!', 'warning', 'anda harus login untuk mengakses halaman admin');
            redirect(base_url('login'));
        endif;
    }

    public function flsh_msg($title, $type, $msg)
    {
        $color = '';

        switch ($type) {
            case 'ok':
                $color = 'callout-success';
                break;
            case 'warning':
                $color = 'callout-warning';
                break;
            case 'danger':
                $color = 'callout-danger';
                break;
            default:
                $color = 'callout-info';
                break;
        }

        $flash_message = array(
            'title' => $title,
            'color' => $color,
            'msg' => $msg
        );
        $this->session->set_flashdata('message', $flash_message);
    }


    public function index()
    {
        //        
        $data['web'] = array(
            'page' => 'home.php'
        );
        
        $data['absenHariIni'] = $this->Query->getDataCountWhere('absen_karyawan',array(
            'tanggal_absen' => date("Y-m-d")
        ))->row();

        $data['totalAbsen'] = $this->Query->getDataCount('absen_karyawan')->row();

        $data['totalKaryawan'] = $this->Query->getDataCount('karyawan')->row();

        $dataabsen = $this->Query->getDataCountGroupBy('absen_karyawan', 'tanggal_absen')->result();
        $data['dataabsen'] = json_encode($dataabsen);
        // print_r($data['dataabsen']);

        $data['totalBelumAbsen'] = $data['totalKaryawan']->total - $data['absenHariIni']->total;
        $data['user'] = $this->userLogin();
        $this->load->view('Dashboard/template', $data);
    }

    public function rekapAbsen()
    {
        $data['web'] = array(
            'page' => 'absen_karyawan/rekap_absen.php'
        );
        $data['user'] = $this->userLogin();

        $query = $this->input->get();
        // echo $query['start_date'];
        if (count($query) > 0) {
            $data['rekapAbsen'] = $this->Query->getDataLeftJoinBetween(
                'karyawan',
                'absen_karyawan',
                'id',
                'id_karyawan',
                $query['start_date'],
                $query['end_date']
            )->result();
        } else {
            $data['rekapAbsen'] = $this->Query->getDataLeftJoinBetween(
                'karyawan',
                'absen_karyawan',
                'id',
                'id_karyawan',
                '',
                ''
            )->result();
        }


        $this->load->view('Dashboard/template', $data);
    }

    public function dataKaryawan()
    {
        $data['web'] = array(
            'page' => 'data_karyawan/data.php'
        );
        $data['user'] = $this->userLogin();
        $data['dataKaryawann'] = $this->Query->getAllData('karyawan')->result();

        $this->load->view('Dashboard/template', $data);
    }


    public function viewManageKaryawan()
    {
        $data['web'] = array(
            'page' => 'data_karyawan/manage_data.php'
        );
        $data['user'] = $this->userLogin();
        $data['edit'] = false;
        $this->load->view('Dashboard/template', $data);
    }

    public function viewManageeditKaryawan()
    {
        $data['web'] = array(
            'page' => 'data_karyawan/manage_data.php'
        );
        $idpaket = $this->uri->segment('3');
        $data['karyawan'] = $this->Query->getData(array('id' => $idpaket), 'karyawan')->row();
        $data['edit'] = true;
        $data['user'] = $this->userLogin();
        $this->load->view('Dashboard/template', $data);
    }

    public function inputKaryawan()
    {
        $nama = $this->input->post('nama_karyawan');
        $email = $this->input->post('email');
        $noTelp = $this->input->post('no_hp');

        $inputData = $this->Query->inputData(array(
            'nama' => $nama,
            'email' => $email,
            'no_telp' => $noTelp,
        ), 'karyawan');
        if ($inputData) :
            $this->flsh_msg('Berhasil', 'ok', 'Data berhasil ditambah');
            redirect(base_url('dashboard/dataKaryawan'));
        else :
            $this->flsh_msg('Gagal!', 'danger', 'Data gagal ditambah');
            redirect(base_url('dashboard/dataKaryawan'));
        endif;
    }

    public function editKaryawan()
    {
        $nama = $this->input->post('nama_karyawan');
        $email = $this->input->post('email');
        $noTelp = $this->input->post('no_hp');

        $inputData = $this->Query->updateData(
            array(
                'id' => $this->input->get('id', TRUE)
            ),
            array(
                'nama' => $nama,
                'email' => $email,
                'no_telp' => $noTelp,
            ),
            'karyawan'
        );
        if ($inputData) :
            $this->flsh_msg('Berhasil', 'ok', 'Data berhasil ditambah');
            redirect(base_url('dashboard/dataKaryawan'));
        else :
            $this->flsh_msg('Gagal!', 'danger', 'Data gagal ditambah');
            redirect(base_url('dashboard/dataKaryawan'));
        endif;
    }

    public function hapusKaryawan()
    {
        $id = $this->input->post('id');
        $hapusData = $this->Query->delData(array('id' => $id), 'karyawan');

        if ($hapusData) :
            $this->flsh_msg('Berhasil', 'ok', 'Data berhasil dihapus');
            redirect(base_url('dashboard/dataKaryawan'));
        else :
            $this->flsh_msg('Gagal!', 'danger', 'Data gagal dihapus');
            redirect(base_url('dashboard/dataKaryawan'));
        endif;
    }

    function exportEtpCsv()
    {
        $start= $this->input->post('start');
        $end=  $this->input->post('end');

        $data = $this->Query->getDataLeftJoinBetween(
            'karyawan',
            'absen_karyawan',
            'id',
            'id_karyawan',
            $start,
            $end
        )->result();

        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=\"Rekap Absensi tgl ".$start."Sampai".$end . ".csv\"");
        header("Pragma: no-cache");
        header("Expires: 0");

        $handle = fopen('php://output', 'w');
        fputcsv($handle, array("No", "Nama Karyawan", "Total Absen"));
        $cnt = 1;
        foreach ($data as $key) {
            $narray = array($cnt++, $key->nama, $key->total_absen);
            fputcsv($handle, $narray);
        }
        fclose($handle);
        exit;
    }


    public function userLogin()
    {
        return array(
            'name' => $this->nama,
            'username' => $this->username,
            'email' => $this->email,
            'level' => $this->level,
        );
    }
}
