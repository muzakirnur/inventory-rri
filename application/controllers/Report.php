<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('M_admin');
    $this->load->model('M_laporan');
  }

  public function laporanPro2(){
    
      $data['brgpro2'] = $this->M_laporan->getlaporan('tb_pro2');
      $this->load->view('admin/cetaklaporan', $data);
  }

  public function laporanPro1(){
    
    $brgmp = $this->M_admin->select('tb_pro1');

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('Inventory Barang RRI Lhokseumawe');
    $pdf->SetTitle('Laporan Data Barang RRI Lhokseumawe');
    $pdf->SetSubject('Laporan data Barang');

    //header Data
    $pdf->SetHeaderData('RRI.png',30,'Inventory Barang RRI Lhokseumawe','Tabel Barang',array(203, 58, 44),array(0, 0, 0));
    $pdf->SetFooterData(array(255, 255, 255), array(255, 255, 255));

    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margin
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP + 10,PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM - 5);

    //SET Scaling ImagickPixel
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //FONT Subsetting
    $pdf->setFontSubsetting(true);

    $pdf->SetFont('helvetica','',14,'',true);

    $pdf->AddPage('L');

    $no = 0;

    $html=
      '<div>
        <h2 align="center">Laporan Barang Ruang Pro 1</h2>
        <p>Tanggal : '.$tgl= date('d-m-Y').'</p>


        <table border="1">
          <tr>
            <th style="width:40px" align="center">No</th>
            <th style="width:110px" align="center">ID Transaksi</th>
            <th style="width:110px" align="center">Tanggal</th>
            <th style="width:110px" align="center">Nama Barang</th>
            <th style="width:130px" align="center">Merk</th>
            <th style="width:140px" align="center">Tipe</th>
            <th style="width:140px" align="center">Tahun Pengadaan</th>
            <th style="width:80px" align="center">Jumlah</th>
            <th style="width:80px" align="center">Kondisi</th>
          </tr>';

          foreach($brgmp as $d)
          {
            $no++;
            $html .= '<tr>';
            $html .= '<td align="center">'.$no.'</td>';
            $html .= '<td align="center">'.$d->id_transaksi.'</td>';
            $html .= '<td align="center">'.$d->tanggal.'</td>';
            $html .= '<td align="center">'.$d->nama_barang.'</td>';
            $html .= '<td align="center">'.$d->merk_barang.'</td>';
            $html .= '<td align="center">'.$d->tipe_barang.'</td>';
            $html .= '<td align="center">'.$d->tahun_pengadaan.'</td>';
            $html .= '<td align="center">'.$d->jumlah.'</td>';
            $html .= '<td align="center">'.$d->kondisi_barang.'</td>';
            $html .= '</tr>';
          }
        $html .='
            </table>
            <br>
            <h5 align="right">Mengetahui</h5><br>
            <h5 align="right">Penanggung Jawab</h5>
          </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('LaporanPro1.pdf','I');
  }

  public function laporanRekaman(){
    
    $brgmp = $this->M_admin->select('tb_rekaman');

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('Inventory Barang RRI Lhokseumawe');
    $pdf->SetTitle('Laporan Data Barang RRI Lhokseumawe');
    $pdf->SetSubject('Laporan data Barang');

    //header Data
    $pdf->SetHeaderData('RRI.png',30,'Inventory Barang RRI Lhokseumawe','Tabel Barang',array(203, 58, 44),array(0, 0, 0));
    $pdf->SetFooterData(array(255, 255, 255), array(255, 255, 255));

    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margin
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP + 10,PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM - 5);

    //SET Scaling ImagickPixel
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //FONT Subsetting
    $pdf->setFontSubsetting(true);

    $pdf->SetFont('helvetica','',14,'',true);

    $pdf->AddPage('L');

    $no = 0;

    $html=
      '<div>
        <h2 align="center">Laporan Barang Ruang Rekaman</h2>
        <p>Tanggal : '.$tgl= date('d-m-Y').'</p>


        <table border="1">
          <tr>
            <th style="width:40px" align="center">No</th>
            <th style="width:110px" align="center">ID Transaksi</th>
            <th style="width:110px" align="center">Tanggal</th>
            <th style="width:110px" align="center">Nama Barang</th>
            <th style="width:130px" align="center">Merk</th>
            <th style="width:140px" align="center">Tipe</th>
            <th style="width:140px" align="center">Tahun Pengadaan</th>
            <th style="width:80px" align="center">Jumlah</th>
            <th style="width:80px" align="center">Kondisi</th>
          </tr>';

          foreach($brgmp as $d)
          {
            $no++;
            $html .= '<tr>';
            $html .= '<td align="center">'.$no.'</td>';
            $html .= '<td align="center">'.$d->id_transaksi.'</td>';
            $html .= '<td align="center">'.$d->tanggal.'</td>';
            $html .= '<td align="center">'.$d->nama_barang.'</td>';
            $html .= '<td align="center">'.$d->merk_barang.'</td>';
            $html .= '<td align="center">'.$d->tipe_barang.'</td>';
            $html .= '<td align="center">'.$d->tahun_pengadaan.'</td>';
            $html .= '<td align="center">'.$d->jumlah.'</td>';
            $html .= '<td align="center">'.$d->kondisi_barang.'</td>';
            $html .= '</tr>';
          }
        $html .='
            </table>
            <br>
            <h5 align="right">Mengetahui</h5><br>
            <h5 align="right">Penanggung Jawab</h5>
          </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('LaporanRekaman.pdf','I');
  }

  public function laporanMP(){
    
    $brgmp = $this->M_admin->select('tb_mp');

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('Inventory Barang RRI Lhokseumawe');
    $pdf->SetTitle('Laporan Data Barang RRI Lhokseumawe');
    $pdf->SetSubject('Laporan data Barang');

    //header Data
    $pdf->SetHeaderData('RRI.png',30,'Inventory Barang RRI Lhokseumawe','Tabel Barang',array(203, 58, 44),array(0, 0, 0));
    $pdf->SetFooterData(array(255, 255, 255), array(255, 255, 255));

    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margin
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP + 10,PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM - 5);

    //SET Scaling ImagickPixel
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //FONT Subsetting
    $pdf->setFontSubsetting(true);

    $pdf->SetFont('helvetica','',14,'',true);

    $pdf->AddPage('L');

    $no = 0;

    $html=
      '<div>
        <h2 align="center">Laporan Barang Ruang Multimedia Purpose</h2>
        <p>Tanggal : '.$tgl= date('d-m-Y').'</p>


        <table border="1">
          <tr>
            <th style="width:40px" align="center">No</th>
            <th style="width:110px" align="center">ID Transaksi</th>
            <th style="width:110px" align="center">Tanggal</th>
            <th style="width:110px" align="center">Nama Barang</th>
            <th style="width:130px" align="center">Merk</th>
            <th style="width:140px" align="center">Tipe</th>
            <th style="width:140px" align="center">Tahun Pengadaan</th>
            <th style="width:80px" align="center">Jumlah</th>
            <th style="width:80px" align="center">Kondisi</th>
          </tr>';

          foreach($brgmp as $d)
          {
            $no++;
            $html .= '<tr>';
            $html .= '<td align="center">'.$no.'</td>';
            $html .= '<td align="center">'.$d->id_transaksi.'</td>';
            $html .= '<td align="center">'.$d->tanggal.'</td>';
            $html .= '<td align="center">'.$d->nama_barang.'</td>';
            $html .= '<td align="center">'.$d->merk_barang.'</td>';
            $html .= '<td align="center">'.$d->tipe_barang.'</td>';
            $html .= '<td align="center">'.$d->tahun_pengadaan.'</td>';
            $html .= '<td align="center">'.$d->jumlah.'</td>';
            $html .= '<td align="center">'.$d->kondisi_barang.'</td>';
            $html .= '</tr>';
          }
        $html .='
            </table>
            <br>
            <h5 align="right">Mengetahui</h5><br>
            <h5 align="right">Penanggung Jawab</h5>
          </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('LaporanMP.pdf','I');
  }

  public function barangKeluar()
  {
    $id = $this->uri->segment(3);
    $tgl1 = $this->uri->segment(4);
    $tgl2 = $this->uri->segment(5);
    $tgl3 = $this->uri->segment(6);
    $ls   = array('id_transaksi' => $id ,'tanggal_keluar' => $tgl1.'/'.$tgl2.'/'.$tgl3);
    $data = $this->M_admin->get_data('tb_barang_keluar',$ls);

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // document informasi
    $pdf->SetCreator('Web Aplikasi Gudang');
    $pdf->SetTitle('Laporan Data Barang Keluar');
    $pdf->SetSubject('Barang Keluar');

    //header Data
    $pdf->SetHeaderData('unsada.jpg',30,'Laporan Data','Barang Keluar',array(203, 58, 44),array(0, 0, 0));
    $pdf->SetFooterData(array(255, 255, 255), array(255, 255, 255));


    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margin
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP + 10,PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM - 5);

    //SET Scaling ImagickPixel
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    //FONT Subsetting
    $pdf->setFontSubsetting(true);

    $pdf->SetFont('helvetica','',14,'',true);

    $pdf->AddPage('L');

    $html=
      '<div>
        <h1 align="center">Invoice Bukti Pengeluaran Barang</h1><br>
        <p>No Id Transaksi  : '.$id.'</p>
        <p>Ditunjukan Untuk :</p>
        <p>Tanggal          : '.$tgl1.'/'.$tgl2.'/'.$tgl3.'</p>
        <p>Po.Customer      :</p>


        <table border="1">
          <tr>
            <th style="width:40px" align="center">No</th>
            <th style="width:110px" align="center">ID Transaksi</th>
            <th style="width:110px" align="center">Tanggal Masuk</th>
            <th style="width:110px" align="center">Tanggal Keluar</th>
            <th style="width:130px" align="center">Lokasi</th>
            <th style="width:140px" align="center">Kode Barang</th>
            <th style="width:140px" align="center">Nama Barang</th>
            <th style="width:80px" align="center">Satuan</th>
            <th style="width:80px" align="center">Jumlah</th>
          </tr>';


          $no = 1;
          foreach($data as $d){
            $html .= '<tr>';
            $html .= '<td align="center">'.$no.'</td>';
            $html .= '<td align="center">'.$d->id_transaksi.'</td>';
            $html .= '<td align="center">'.$d->tanggal_masuk.'</td>';
            $html .= '<td align="center">'.$d->tanggal_keluar.'</td>';
            $html .= '<td align="center">'.$d->lokasi.'</td>';
            $html .= '<td align="center">'.$d->kode_barang.'</td>';
            $html .= '<td align="center">'.$d->nama_barang.'</td>';
            $html .= '<td align="center">'.$d->satuan.'</td>';
            $html .= '<td align="center">'.$d->jumlah.'</td>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td align="center" colspan="8"><b>Jumlah</b></td>';
            $html .= '<td align="center">'.$d->jumlah.'</td>';
            $html .= '</tr>';
            $no++;
          }


        $html .='
            </table><br>
            <h6>Mengetahui</h6><br><br><br>
            <h6>Admin</h6>
          </div>';

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

    $pdf->Output('invoice_barang_keluar.pdf','I');

  }
}
?>
