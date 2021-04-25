<?php namespace App\Controllers\keuangan;

use CodeIgniter\Controller;

class Laporan_kas extends Controller
{
    public function index()
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM kas";

        $data['laporan_kas']=$db->query($query1)->getResult();
        return view('keuangan/laporan_kas',$data);
    }

    public function minggu()
    {
        $session = session();
        $db = \Config\Database::connect();
        $data['session'] = session();

        $mode=$this->request->getGet('mode');
        $bulan=$this->request->getGet('bulan');
        $tahun=$this->request->getGet('tahun');
        $query1 = "SELECT * FROM kas WHERE MONTH(tgl_transaksi)='$bulan' AND YEAR(tgl_transaksi)='$tahun'";

        $data['laporan_kas']=$db->query($query1)->getResult();
        $data['mode']=$mode;
        $data['bulan']=$bulan;
        $data['tahun']=$tahun;
        return view('keuangan/laporan_kas_mingguan',$data);
    }

    public function download_minggu()
    {
        $session = session();
        $db = \Config\Database::connect();
        $data['session'] = session();


        $bulan=$this->request->getGet('bulan');
        $tahun=$this->request->getGet('tahun');
        $query1 = "SELECT * FROM kas WHERE MONTH(tgl_transaksi) AND YEAR(tgl_transaksi)";

        $data['laporan_kas']=$db->query($query1)->getResult();

        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=laporan_kas.xls");
        return view('keuangan/download_laporan_kas_mingguan',$data);
    }

    public function bulan()
    {
        $session = session();
        $db = \Config\Database::connect();
        $data['session'] = session();

        $mode=$this->request->getGet('mode');
        $tahun=$this->request->getGet('tahun');
        $query1 = "SELECT * FROM kas WHERE YEAR(tgl_transaksi)";

        $data['laporan_kas']=$db->query($query1)->getResult();
        $data['mode']=$mode;
        $data['tahun']=$tahun;
        return view('keuangan/laporan_kas_bulanan',$data);
    }

    public function download_bulan()
    {
        $session = session();
        $db = \Config\Database::connect();
        $data['session'] = session();

        $mode=$this->request->getGet('mode');
        $tahun=$this->request->getGet('tahun');
        $query1 = "SELECT * FROM kas WHERE YEAR(tgl_transaksi)";

        $data['laporan_kas']=$db->query($query1)->getResult();

        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=laporan_kas.xls");
        return view('keuangan/download_laporan_kas_bulanan',$data);
    }


    public function tahun()
    {
        $session = session();
        $db = \Config\Database::connect();
        $data['session'] = session();
        $query1 = "SELECT * FROM kas";

        $mode=$this->request->getGet('mode');

        $data['laporan_kas']=$db->query($query1)->getResult();
        $data['mode']=$mode;
        return view('keuangan/laporan_kas_tahunan',$data);
    }

    public function download_tahun()
    {
        $session = session();
        $db = \Config\Database::connect();
        $data['session'] = session();
        $query1 = "SELECT * FROM kas";

        $mode=$this->request->getGet('mode');

        $data['laporan_kas']=$db->query($query1)->getResult();

        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=laporan_kas.xls");
        return view('keuangan/download_laporan_kas_tahunan',$data);
    }


    public function detail()
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM kas";

        $data['laporan_kas']=$db->query($query1)->getResult();
        return view('keuangan/laporan_kas',$data);
    }

}
