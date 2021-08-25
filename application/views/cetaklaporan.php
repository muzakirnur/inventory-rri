<?php

$brgmp = $this->M_admin->select('tb_pro2');

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
    <h2 align="center">Laporan Barang Ruang Pro 2</h2><br>


    <table border="1">
      <tr>
        <th style="width:40px" align="center" bgcolor="#2C9ECC">No</th>
        <th style="width:110px" align="center" bgcolor="#2C9ECC">ID Transaksi</th>
        <th style="width:110px" align="center" bgcolor="#2C9ECC">Tanggal</th>
        <th style="width:110px" align="center" bgcolor="#2C9ECC">Nama Barang</th>
        <th style="width:130px" align="center" bgcolor="#2C9ECC">Merk</th>
        <th style="width:140px" align="center" bgcolor="#2C9ECC">Tipe</th>
        <th style="width:140px" align="center" bgcolor="#2C9ECC">Tahun Pengadaan</th>
        <th style="width:80px" align="center" bgcolor="#2C9ECC">Jumlah</th>
        <th style="width:80px" align="center" bgcolor="#2C9ECC">Kondisi</th>
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
        <h5 align="right">Lhokseumawe, '.$tgl=date('d-m-Y').'</h5>
        <h5 align="right">Mengetahui</h5><br>
        <h5 align="right">Penanggung Jawab</h5>
      </div>';

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);

$pdf->Output('LaporanPro2.pdf','I');

?>