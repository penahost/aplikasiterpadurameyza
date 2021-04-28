<?php namespace App\Controllers\keuangan;

use CodeIgniter\Controller;

class Jurnal extends Controller
{
    public function index()
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM jurnal";

        $data['jurnal']=$db->query($query1)->getResult();
        return view('keuangan/jurnal',$data);
    }

    public function preview_laporan_jurnal()
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();

        $tahun=$this->request->getGet('tahun');

        $query1 = "SELECT * FROM jurnal WHERE YEAR(tgl_transaksi)='$tahun'";

        $data['jurnal']=$db->query($query1)->getResult();
        $data['tahun']=$tahun;
        return view('keuangan/preview_laporan_jurnal',$data);
    }

    public function download_laporan_jurnal($tahun)
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();

        // $tahun=$this->request->getGet('tahun');

        $query1 = "SELECT * FROM jurnal WHERE YEAR(tgl_transaksi)='$tahun'";

        $tahun_lalu=$tahun-1;
        $query2 = "SELECT SUM(debit)-SUM(kredit) as saldo_tahun_lalu FROM jurnal WHERE YEAR(tgl_transaksi)='$tahun_lalu'";

        $data['jurnal']=$db->query($query1)->getResult();
        $data['saldo_tahun_lalu']=$db->query($query2)->getRow();

        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=laporan_kas.xls");
        return view('keuangan/download_laporan_jurnal',$data);
    }

}
