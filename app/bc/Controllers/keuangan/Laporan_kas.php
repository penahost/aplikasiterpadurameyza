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

        $bulan=$this->request->getPost('bulan');
        $tahun=$this->request->getPost('tahun');
        $query1 = "SELECT * FROM kas WHERE MONTH(tgl_transaksi) AND YEAR(tgl_transaksi)";

        $data['laporan_kas']=$db->query($query1)->getResult();
        return view('keuangan/laporan_kas_mingguan',$data);
    }
    public function bulan()
    {
        $session = session();
        $db = \Config\Database::connect();
        $data['session'] = session();
        $tahun=$this->request->getPost('tahun');
        $query1 = "SELECT * FROM kas WHERE YEAR(tgl_transaksi)";

        $data['laporan_kas']=$db->query($query1)->getResult();
        return view('keuangan/laporan_kas_bulanan',$data);
    }
    public function tahun()
    {
        $session = session();
        $db = \Config\Database::connect();
        $data['session'] = session();
        $query1 = "SELECT * FROM kas";

        $data['laporan_kas']=$db->query($query1)->getResult();
        return view('keuangan/laporan_kas_tahunan',$data);
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
