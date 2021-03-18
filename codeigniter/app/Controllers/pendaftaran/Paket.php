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
          'paket_tanggal_berangkat'  => $this->request->getPost('paket_tanggal_berangkat'),
          'paket_tanggal_pulang'  => $this->request->getPost('paket_tanggal_pulang'),
          'paket_tanggal_biaya'  => $this->request->getPost('paket_tanggal_biaya'),
          'paket_hotel_makan'  => $this->request->getPost('paket_hotel_makan'),
          'paket_hotel_madinah'  => $this->request->getPost('paket_hotel_madinah'),
          'paket_pesawat'  => $this->request->getPost('paket_pesawat'),
      );
      $builder->insert($data);
      return redirect()->to(site_url('pendaftaran/paket'));

    }

    public function hapus($id){
        $db = \Config\Database::connect();
        $builder = $db->table('paket');
        $builder->delete(['id' => $id]);

        return redirect()->to(site_url('pendaftaran/paket'));
    }
}
