<?php namespace App\Controllers\pendaftaran;

use CodeIgniter\Controller;

class jamaah extends Controller
{
    public function index($paket_id=NULL)
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM paket";
        $query2 = "SELECT * FROM jamaah WHERE paket_id='$paket_id'";

        $data['paket']=$db->query($query1)->getResult();
        $data['jamaah']=$db->query($query2)->getResult();
        return view('pendaftaran/jamaah',$data);
    }

    public function tambahdata(){
        $db = \Config\Database::connect();
        $session = session();
        $user_id=$session->get('id');

        echo view('pendaftaran/tambahdata_jamaah');
    }

    public function tambahdata_aksi()
    {
      $db = \Config\Database::connect();

      $builder = $db->table('jamaah');
      $data = array(
          'jamaah_nomer'  => $this->request->getPost('jamaah_nomer'),
          'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
          'jamaah_jumlah_hari'  => $this->request->getPost('jamaah_jumlah_hari'),
          'jamaah_tanggal_berangkat'  => $this->request->getPost('jamaah_tanggal_berangkat'),
          'jamaah_tanggal_pulang'  => $this->request->getPost('jamaah_tanggal_pulang'),
          'jamaah_harga'  => $this->request->getPost('jamaah_harga'),
          'jamaah_hotel_makah'  => $this->request->getPost('jamaah_hotel_makah'),
          'jamaah_hotel_madinah'  => $this->request->getPost('jamaah_hotel_madinah'),
          'jamaah_pesawat'  => $this->request->getPost('jamaah_pesawat'),
          'jamaah_jenis'  => 'umrah',
      );
      $builder->insert($data);
      return redirect()->to(site_url('pendaftaran/jamaah'));

    }

    public function edit($jamaah_id){
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";

        $data['jamaah']=$db->query($query1)->getResult();

        echo view('pendaftaran/edit_jamaah', $data);
    }

    public function updatedata_aksi(){
        $jamaah_id=$this->request->getPost('jamaah_id');
        $db = \Config\Database::connect();
        $data = array(
            'jamaah_nomer'  => $this->request->getPost('jamaah_nomer'),
            'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
            'jamaah_jumlah_hari'  => $this->request->getPost('jamaah_jumlah_hari'),
            'jamaah_tanggal_berangkat'  => $this->request->getPost('jamaah_tanggal_berangkat'),
            'jamaah_tanggal_pulang'  => $this->request->getPost('jamaah_tanggal_pulang'),
            'jamaah_harga'  => $this->request->getPost('jamaah_harga'),
            'jamaah_hotel_makah'  => $this->request->getPost('jamaah_hotel_makah'),
            'jamaah_hotel_madinah'  => $this->request->getPost('jamaah_hotel_madinah'),
            'jamaah_pesawat'  => $this->request->getPost('jamaah_pesawat'),
            'jamaah_jenis'  => 'umrah',
        );
        $builder = $db->table('jamaah');
        $builder->where('jamaah_id', $jamaah_id);
        $builder->update($data);
        return redirect()->to(site_url('/pendaftaran/jamaah'));
    }

    public function hapus($jamaah_id){
        $db = \Config\Database::connect();
        $builder = $db->table('jamaah');
        $builder->delete(['jamaah_id' => $jamaah_id]);

        return redirect()->to(site_url('pendaftaran/jamaah'));
    }
}
