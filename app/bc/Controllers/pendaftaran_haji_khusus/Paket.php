<?php namespace App\Controllers\pendaftaran_haji_khusus;

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
        $query1 = "SELECT * FROM paket WHERE paket_jenis='haji khusus'";

        $data['paket']=$db->query($query1)->getResult();
        return view('pendaftaran_haji_khusus/paket',$data);
    }

    public function tambahdata(){
        $db = \Config\Database::connect();
        $session = session();
        $user_id=$session->get('id');

        echo view('pendaftaran_haji_khusus/tambahdata_paket');
    }

    public function tambahdata_aksi()
    {
      $db = \Config\Database::connect();

      $builder = $db->table('paket');
      $data = array(
          'paket_nomer'  => $this->request->getPost('paket_nomer'),
          'paket_nama'  => $this->request->getPost('paket_nama'),
          'paket_jumlah_hari'  => $this->request->getPost('paket_jumlah_hari'),
          'paket_tanggal_berangkat'  => $this->request->getPost('paket_tanggal_berangkat'),
          'paket_tanggal_pulang'  => $this->request->getPost('paket_tanggal_pulang'),
          'paket_harga'  => $this->request->getPost('paket_harga'),
          'paket_hotel_makah'  => $this->request->getPost('paket_hotel_makah'),
          'paket_hotel_madinah'  => $this->request->getPost('paket_hotel_madinah'),
          'paket_pesawat'  => $this->request->getPost('paket_pesawat'),
          'paket_jenis'  => 'haji khusus',
      );
      $builder->insert($data);
      return redirect()->to(site_url('pendaftaran_haji_khusus/paket'));

    }

    public function edit($paket_id){
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM paket WHERE paket_id='$paket_id'";

        $data['paket']=$db->query($query1)->getResult();

        echo view('pendaftaran_haji_khusus/edit_paket', $data);
    }

    public function updatedata_aksi(){
        $paket_id=$this->request->getPost('paket_id');
        $db = \Config\Database::connect();
        $data = array(
            'paket_nomer'  => $this->request->getPost('paket_nomer'),
            'paket_nama'  => $this->request->getPost('paket_nama'),
            'paket_jumlah_hari'  => $this->request->getPost('paket_jumlah_hari'),
            'paket_tanggal_berangkat'  => $this->request->getPost('paket_tanggal_berangkat'),
            'paket_tanggal_pulang'  => $this->request->getPost('paket_tanggal_pulang'),
            'paket_harga'  => $this->request->getPost('paket_harga'),
            'paket_hotel_makah'  => $this->request->getPost('paket_hotel_makah'),
            'paket_hotel_madinah'  => $this->request->getPost('paket_hotel_madinah'),
            'paket_pesawat'  => $this->request->getPost('paket_pesawat'),
            'paket_jenis'  => 'haji khusus',
        );
        $builder = $db->table('paket');
        $builder->where('paket_id', $paket_id);
        $builder->update($data);
        return redirect()->to(site_url('/pendaftaran_haji_khusus/paket'));
    }

    public function hapus($paket_id){
        $db = \Config\Database::connect();
        $builder = $db->table('paket');
        $builder->delete(['paket_id' => $paket_id]);

        return redirect()->to(site_url('pendaftaran_haji_khusus/paket'));
    }
}
