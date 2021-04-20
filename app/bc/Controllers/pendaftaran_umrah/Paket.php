<?php namespace App\Controllers\pendaftaran_umrah;

use CodeIgniter\Controller;

class paket extends Controller
{
    public function index()
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM paket WHERE paket_jenis='umrah'";

        $data['paket']=$db->query($query1)->getResult();
        return view('pendaftaran_umrah/paket',$data);
    }

    public function tambahdata(){
        $db = \Config\Database::connect();
        $session = session();
        $user_id=$session->get('id');

        echo view('pendaftaran_umrah/tambahdata_paket');
    }

    public function tambahdata_aksi()
    {
      $db = \Config\Database::connect();

      $timestamp1 = strtotime($this->request->getPost('paket_tanggal_berangkat'));
      $new_date1 = date('Y-m-d', $timestamp1);

      $timestamp2 = strtotime($this->request->getPost('paket_tanggal_pulang'));
      $new_date2 = date('Y-m-d', $timestamp2);

      $builder = $db->table('paket');
      $data = array(
          'paket_nomer'  => $this->request->getPost('paket_nomer'),
          'paket_nama'  => $this->request->getPost('paket_nama'),
          'paket_jumlah_hari'  => $this->request->getPost('paket_jumlah_hari'),
          'paket_tanggal_berangkat'  => $new_date1,
          'paket_tanggal_pulang'  => $new_date2,
          'paket_harga'  => $this->request->getPost('paket_harga'),
          'paket_hotel_makah'  => $this->request->getPost('paket_hotel_makah'),
          'paket_hotel_madinah'  => $this->request->getPost('paket_hotel_madinah'),
          'paket_pesawat'  => $this->request->getPost('paket_pesawat'),
          'paket_jenis'  => 'umrah',
      );
      $builder->insert($data);
      return redirect()->to(site_url('pendaftaran_umrah/paket'));

    }

    public function edit($paket_id){
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM paket WHERE paket_id='$paket_id'";

        $data['paket']=$db->query($query1)->getResult();

        echo view('pendaftaran_umrah/edit_paket', $data);
    }

    public function updatedata_aksi(){
        $paket_id=$this->request->getPost('paket_id');
        $db = \Config\Database::connect();

        $timestamp1 = strtotime($this->request->getPost('paket_tanggal_berangkat'));
        $new_date1 = date('Y-m-d', $timestamp1);

        $timestamp2 = strtotime($this->request->getPost('paket_tanggal_pulang'));
        $new_date2 = date('Y-m-d', $timestamp2);

        $data = array(
            'paket_nomer'  => $this->request->getPost('paket_nomer'),
            'paket_nama'  => $this->request->getPost('paket_nama'),
            'paket_jumlah_hari'  => $this->request->getPost('paket_jumlah_hari'),
            'paket_tanggal_berangkat'  => $new_date1,
            'paket_tanggal_pulang'  => $new_date2,
            'paket_harga'  => $this->request->getPost('paket_harga'),
            'paket_hotel_makah'  => $this->request->getPost('paket_hotel_makah'),
            'paket_hotel_madinah'  => $this->request->getPost('paket_hotel_madinah'),
            'paket_pesawat'  => $this->request->getPost('paket_pesawat'),
            'paket_jenis'  => 'umrah',
        );
        $builder = $db->table('paket');
        $builder->where('paket_id', $paket_id);
        $builder->update($data);
        return redirect()->to(site_url('/pendaftaran_umrah/paket'));
    }

    public function hapus($paket_id){
        $db = \Config\Database::connect();
        $builder = $db->table('paket');
        $builder->delete(['paket_id' => $paket_id]);

        return redirect()->to(site_url('pendaftaran_umrah/paket'));
    }
}
