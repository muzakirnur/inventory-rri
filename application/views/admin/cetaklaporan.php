<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cetaklaporan extends CI_Controller {

  function index(){

            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Daftar Produk');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $no=0;
            $html='<h3>Daftar Produk</h3>
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

            foreach($brgpro2 as $d)
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
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('laporanPro2.pdf', 'I');
        }
      }