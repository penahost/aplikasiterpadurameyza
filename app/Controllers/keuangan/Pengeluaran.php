<?php namespace App\Controllers\keuangan;

use CodeIgniter\Controller;

class Pengeluaran extends Controller
{
    public function index()
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM pengeluaran";

        $data['pengeluaran']=$db->query($query1)->getResult();
        return view('keuangan/pengeluaran',$data);
    }

    public function tambahdata(){
        $db = \Config\Database::connect();
        $session = session();
        $user_id=$session->get('id');

        echo view('keuangan/tambahdata_pengeluaran');
    }

    function RandUnik($panjang) {
       $unik=NULL;
       $pstring = "0123456789";
       $plen = strlen($pstring);
          for ($i = 1; $i <= $panjang; $i++) {
              $start = rand(0,$plen);
              $unik.= substr($pstring, $start, 1);
          }

        return $unik;
    }

    public function tambahdata_aksi()
    {
      $db = \Config\Database::connect();
      $id_transaksi=$this->RandUnik(10);
      $builder = $db->table('pengeluaran');
      $data = array(
          'id_transaksi'  => $id_transaksi,
          'pengeluaran_keterangan'  => $this->request->getPost('pengeluaran_keterangan'),
          'pengeluaran_nominal'  => $this->request->getPost('pengeluaran_nominal'),
          'pengeluaran_tanggal'  => $this->request->getPost('pengeluaran_tanggal'),
      );
      $builder->insert($data);

      $builder = $db->table('kas');
      $data = array(
          'id_transaksi'  => $id_transaksi,
          'keterangan'  => $this->request->getPost('pengeluaran_keterangan'),
          'nominal'  => $this->request->getPost('pengeluaran_nominal'),
          'tgl_transaksi'  => $this->request->getPost('pengeluaran_tanggal'),
          'tipe_kas'  => 'keluar',
      );
      $builder->insert($data);

      $builder = $db->table('jurnal');
      $data = array(
          'id_transaksi'  => $id_transaksi,
          'keterangan'  => $this->request->getPost('pengeluaran_keterangan'),
          'tgl_transaksi'  => $this->request->getPost('pengeluaran_tanggal'),
          'kredit'  => $this->request->getPost('pengeluaran_nominal'),
      );
      $builder->insert($data);
      return redirect()->to(site_url('keuangan/pengeluaran/'));

    }


    public function edit($pengeluaran_id){
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM pengeluaran WHERE pengeluaran_id='$pengeluaran_id'";

        $data['pengeluaran']=$db->query($query1)->getResult();

        echo view('keuangan/edit_pengeluaran', $data);
    }

    public function updatedata_aksi(){
        $pengeluaran_id=$this->request->getPost('pengeluaran_id');
        $db = \Config\Database::connect();

        echo $id_transaksi=$this->request->getPost('id_transaksi');

        $data = array(
            'pengeluaran_keterangan'  => $this->request->getPost('pengeluaran_keterangan'),
            'pengeluaran_nominal'  => $this->request->getPost('pengeluaran_nominal'),
            'pengeluaran_tanggal'  => $this->request->getPost('pengeluaran_tanggal'),
        );
        $builder = $db->table('pengeluaran');
        $builder->where('id_transaksi', $id_transaksi);
        $builder->update($data);


        $data = array(
            'keterangan'  => $this->request->getPost('pengeluaran_keterangan'),
            'nominal'  => $this->request->getPost('pengeluaran_nominal'),
            'tgl_transaksi'  => $this->request->getPost('pengeluaran_tanggal'),
            'tipe_kas'  => 'keluar',
        );
        $builder = $db->table('kas');
        $builder->where('id_transaksi', $id_transaksi);
        $builder->update($data);


        $data = array(
            'keterangan'  => $this->request->getPost('pengeluaran_keterangan'),
            'tgl_transaksi'  => $this->request->getPost('pengeluaran_tanggal'),
            'kredit'  => $this->request->getPost('pengeluaran_nominal'),
        );
        $builder = $db->table('jurnal');
        $builder->where('id_transaksi', $id_transaksi);
        $builder->update($data);


        return redirect()->to(site_url('keuangan/pengeluaran/'));
    }


    public function hapus($pengeluaran_id,$id_transaksi){
        $db = \Config\Database::connect();
        $builder = $db->table('pengeluaran');
        $builder->delete(['id_transaksi' => $id_transaksi]);

        $builder = $db->table('kas');
        $builder->delete(['id_transaksi' => $id_transaksi]);

        $builder = $db->table('jurnal');
        $builder->delete(['id_transaksi' => $id_transaksi]);

      return redirect()->to(site_url('keuangan/pengeluaran/'));
    }

}
