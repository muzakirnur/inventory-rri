<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_user');
  }

  public function index()
  {
    $data['list_rekaman'] = $this->M_user->select('tb_mp');
    $data['list_pro1'] = $this->M_user->select('tb_mp');
    $data['list_pro2'] = $this->M_user->select('tb_mp');
    $data['list_mp'] = $this->M_user->select('tb_mp');
    $data['stokPro1'] = $this->M_user->sum('tb_pro1', 'jumlah');
    $data['stokPro2'] = $this->M_user->sum('tb_pro2', 'jumlah');
    $data['stokMP'] = $this->M_user->sum('tb_mp', 'jumlah');
    $data['stokRekaman'] = $this->M_user->sum('tb_rekaman', 'jumlah');
    if ($this->session->userdata('status') == 'login' && $this->session->userdata('role') == 0) {
      $this->load->view('user/templates/header.php');
      $this->load->view('user/index', $data);
      $this->load->view('user/templates/footer.php');
    } else {
      $this->load->view('login/login');
    }
  }

  public function token_generate()
  {
    return $tokens = md5(uniqid(rand(), true));
  }

  private function hash_password($password)
  {
    return password_hash($password, PASSWORD_DEFAULT);
  }

  public function setting()
  {
    $data['token_generate'] = $this->token_generate();
    $this->session->set_userdata($data);

    $this->load->view('user/templates/header.php');
    $this->load->view('user/setting', $data);
    $this->load->view('user/templates/footer.php');
  }

  public function proses_new_password()
  {
    $this->form_validation->set_rules('new_password', 'New Password', 'required');
    $this->form_validation->set_rules('confirm_new_password', 'Confirm New Password', 'required|matches[new_password]');

    if ($this->form_validation->run() == TRUE) {
      if ($this->session->userdata('token_generate') === $this->input->post('token')) {
        $username = $this->input->post('username');
        $new_password = $this->input->post('new_password');

        $data = array(
          'password' => $this->hash_password($new_password)
        );

        $where = array(
          'id' => $this->session->userdata('id')
        );

        $this->M_user->update_password('user', $where, $data);

        $this->session->set_flashdata('msg_berhasil', 'Password Telah Diganti');
        redirect(base_url('user/setting'));
      }
    } else {
      $this->load->view('user/setting');
    }
  }

  public function signout()
  {
    session_destroy();
    redirect(base_url());
  }

  ####################################
  // DATA BARANG MASUK
  ####################################

  public function tabel_barangmasuk()
  {
    $this->load->view('user/templates/header.php');
    $data['list_data'] = $this->M_user->select('tb_barang_masuk');
    $this->load->view('user/tabel/tabel_barangmasuk', $data);
    $this->load->view('user/templates/footer.php');
  }


  ####################################
  // DATA BARANG KELUAR
  ####################################

  public function tabel_barangkeluar()
  {
    $this->load->view('user/templates/header.php');
    $data['list_data'] = $this->M_user->select('tb_barang_keluar');
    $this->load->view('user/tabel/tabel_barangkeluar', $data);
    $this->load->view('user/templates/footer.php');
  }

  public function tabel_mp()
  {
    $this->load->view('user/templates/header.php');
    $data['list_mp'] = $this->M_user->select('tb_mp');
    $this->load->view('user/tabel/tabel_mp', $data);
    $this->load->view('user/templates/footer.php');
  }

  public function tabel_rekaman()
  {
    $this->load->view('user/templates/header.php');
    $data['list_rekaman'] = $this->M_user->select('tb_rekaman');
    $this->load->view('user/tabel/tabel_rekaman', $data);
    $this->load->view('user/templates/footer.php');
  }

  public function tabel_pro1()
  {
    $this->load->view('user/templates/header.php');
    $data['list_pro1'] = $this->M_user->select('tb_pro1');
    $this->load->view('user/tabel/tabel_pro1', $data);
    $this->load->view('user/templates/footer.php');
  }

  public function tabel_pro2()
  {
    $this->load->view('user/templates/header.php');
    $data['list_pro2'] = $this->M_user->select('tb_pro2');
    $this->load->view('user/tabel/tabel_pro2', $data);
    $this->load->view('user/templates/footer.php');
  }
}
