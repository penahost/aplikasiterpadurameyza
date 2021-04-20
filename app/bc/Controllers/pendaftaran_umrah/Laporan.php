<?php namespace App\Controllers\pendaftaran_umrah;

use CodeIgniter\Controller;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\Writer\PowerPoint2007;
use PhpOffice\PhpPresentation\Style\Alignment;
class Laporan extends Controller
{
    public function jamaah()
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah join paket on paket.paket_id=jamaah.paket_id";
        $data['jamaah']=$db->query($query1)->getResult();
        return view('pendaftaran_umrah/laporan_jamaah',$data);
    }
    public function download_report_manifest()
    {
      $db = \Config\Database::connect();
      $query1 = "SELECT * FROM jamaah";
      $data['jamaah']=$db->query($query1)->getResult();

      // $data['row']=array(
      //     'jamaah_id'  => $data_jamaah->jamaah_id,
      //     'jamaah_nama'  => $data_jamaah->jamaah_nama,
      //     'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
      //     'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
      //     'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
      //     'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
      //     'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
      //     'jamaah_berangkat'  => $this->tgl_berangkat(date('Y-m-d')),
      //     );

      header("Content-type: application/vnd-ms-excel");
      header("Content-Disposition: attachment; filename=hasil.xls");
      return view('pendaftaran_umrah/preview_report_manifest',$data);
    }

    public function tgl_indo($tanggal){
    	$bulan = array (
    		1 =>   'Januari',
    		'Februari',
    		'Maret',
    		'April',
    		'Mei',
    		'Juni',
    		'Juli',
    		'Agustus',
    		'September',
    		'Oktober',
    		'November',
    		'Desember'
    	);
    	$pecahkan = explode('-', $tanggal);
    	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    public function tgl_berangkat($tanggal){
    	$bulan = array (
    		1 =>   'Januari',
    		'Februari',
    		'Maret',
    		'April',
    		'Mei',
    		'Juni',
    		'Juli',
    		'Agustus',
    		'September',
    		'Oktober',
    		'November',
    		'Desember'
    	);
    	$pecahkan = explode('-', $tanggal);
    	return $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    public function hapus($jamaah_id){
        $db = \Config\Database::connect();
        $builder = $db->table('jamaah');
        $builder->delete(['jamaah_id' => $jamaah_id]);

        $builder = $db->table('perlengkapan_jamaah');
        $builder->delete(['jamaah_id' => $jamaah_id]);

        return redirect()->to(site_url('pendaftaran_umrah/laporan/jamaah/'));
    }
}
