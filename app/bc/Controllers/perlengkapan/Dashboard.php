<?php namespace App\Controllers\perlengkapan;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('username');
        return view('perlengkapan/dashboard');
    }
}
