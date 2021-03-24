<?php namespace App\Controllers\perlengkapan;

use CodeIgniter\Controller;

class perlengkapan extends Controller
{
    public function index()
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM perlengkapan";

        $data['perlengkapan']=$db->query($query1)->getResult();
        return view('perlengkapan/perlengkapan',$data);
    }

    public function tambahdata(){
        $db = \Config\Database::connect();
        $session = session();
        $user_id=$session->get('id');

        echo view('perlengkapan/tambahdata_perlengkapan');
    }

    public function tambahdata_aksi()
    {
      $db = \Config\Database::connect();

      $builder = $db->table('perlengkapan');
      $data = array(
          'perlengkapan_nama'  => $this->request->getPost('perlengkapan_nama'),
          'perlengkapan_stok'  => $this->request->getPost('perlengkapan_stok'),
          'perlengkapan_keterangan'  => $this->request->getPost('perlengkapan_keterangan'),
      );
      $builder->insert($data);
      return redirect()->to(site_url('perlengkapan/perlengkapan'));

    }

    public function edit($perlengkapan_id){
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM perlengkapan WHERE perlengkapan_id='$perlengkapan_id'";

        $data['perlengkapan']=$db->query($query1)->getResult();

        echo view('perlengkapan/edit_perlengkapan', $data);
    }

    public function updatedata_aksi(){
        $perlengkapan_id=$this->request->getPost('perlengkapan_id');
        $db = \Config\Database::connect();
        $data = array(
          'perlengkapan_nama'  => $this->request->getPost('perlengkapan_nama'),
          'perlengkapan_stok'  => $this->request->getPost('perlengkapan_stok'),
          'perlengkapan_keterangan'  => $this->request->getPost('perlengkapan_keterangan'),
        );
        $builder = $db->table('perlengkapan');
        $builder->where('perlengkapan_id', $perlengkapan_id);
        $builder->update($data);
        return redirect()->to(site_url('/perlengkapan/perlengkapan'));
    }

    public function hapus($perlengkapan_id){
        $db = \Config\Database::connect();
        $builder = $db->table('perlengkapan');
        $builder->delete(['perlengkapan_id' => $perlengkapan_id]);

        return redirect()->to(site_url('perlengkapan/perlengkapan'));
    }
}
