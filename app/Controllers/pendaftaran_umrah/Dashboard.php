<?php namespace App\Controllers\pendaftaran_umrah;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('username');
        return view('pendaftaran_umrah/dashboard');
    }
}
