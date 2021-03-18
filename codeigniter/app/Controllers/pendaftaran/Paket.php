<?php namespace App\Controllers\pendaftaran;

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
        $query1 = "SELECT * FROM paket";

        $data['paket']=$db->query($query1)->getResult();
        return view('pendaftaran/paket',$data);
    }

    public function tambahdata(){
        $db = \Config\Database::connect();
        $session = session();
        $user_id=$session->get('id');

        echo view('pendaftaran/tambahdata_paket');
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
          'paket_hotel_makan'  => $this->request->getPost('paket_hotel_makan'),
          'paket_hotel_madinah'  => $this->request->getPost('paket_hotel_madinah'),
          'paket_pesawat'  => $this->request->getPost('paket_pesawat'),
          'paket_jenis'  => 'umrah',
      );
      $builder->insert($data);
      return redirect()->to(site_url('pendaftaran/paket'));

    }

    public function edit($paket_id){
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM paket WHERE id='$paket_id'";

        $data['paket']=$db->query($query1)->getResult();

        echo view('adminresto/edit_user_karyawan', $data);
    }

    public function update(){
        $paket_id=$this->request->getPost('paket_id');
        $db = \Config\Database::connect();
        $data = [
            'paket_nomer' => $this->request->getPost('paket_nomer'),
        ];
        $builder = $db->table('paket');
        $builder->where('paket_id', $paket_id);
        $builder->update($data);
        return redirect()->to(site_url('/adminresto/User_Karyawan'));
    }

    public function hapus($paket_id){
        $db = \Config\Database::connect();
        $builder = $db->table('paket');
        $builder->delete(['paket_id' => $paket_id]);

        return redirect()->to(site_url('pendaftaran/paket'));
    }
}
