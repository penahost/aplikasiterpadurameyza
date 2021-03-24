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

}
