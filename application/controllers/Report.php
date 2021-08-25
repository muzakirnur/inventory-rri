<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('M_admin');
    $this->load->model('M_laporan');
  }

  public function laporanPro2()
  {
    $data['ruangan'] = "Ruang Pro 2";
    $data['brgpro2'] = $this->M_admin->select('tb_pro2');
    $this->load->view('admin/cetaklaporan', $data);
  }

  public function laporanPro1()
  {
    $data['ruangan'] = "Ruang Pro 1";
    $data['brgpro2'] = $this->M_admin->select('tb_pro1');
    $this->load->view('admin/cetaklaporan', $data);
  }

  public function laporanRekaman()
  {

    $data['ruangan'] = "Ruang Rekaman";
    $data['brgpro2'] = $this->M_admin->select('tb_rekaman');
    $this->load->view('admin/cetaklaporan', $data);
  }

  public function laporanMP()
  {
    $data['ruangan'] = "Ruang Multimedia Purpose";
    $data['brgpro2'] = $this->M_admin->select('tb_mp');
    $this->load->view('admin/cetaklaporan', $data);
  }
}
