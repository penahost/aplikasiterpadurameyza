<?php namespace App\Controllers\keuangan;

use CodeIgniter\Controller;

class Pembayaran extends Controller
{
    public function index($jamaah_id=NULL)
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM jamaah join paket on jamaah.paket_id=paket.paket_id";
        $query2 = "SELECT * FROM pembayaran join jamaah on pembayaran.jamaah_id=jamaah.jamaah_id WHERE pembayaran.jamaah_id='$jamaah_id'";


        $data['jamaah']=$db->query($query1)->getResult();
        $data['pembayaran']=$db->query($query2)->getResult();
        $data['jamaah_id']=$jamaah_id;
        return view('keuangan/pembayaran',$data);
    }

    public function tambahdata($jamaah_id=NULL){
        $db = \Config\Database::connect();
        $session = session();
        $user_id=$session->get('id');
        $data['jamaah_id']=$jamaah_id;
        echo view('keuangan/tambahdata_pembayaran',$data);
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
      $builder = $db->table('pembayaran');
      $data = array(
          'id_transaksi'  => $id_transaksi,
          'jamaah_id'  => $this->request->getPost('jamaah_id'),
          'pembayaran_jumlah'  => $this->request->getPost('pembayaran_jumlah'),
          'pembayaran_tanggal'  => $this->request->getPost('pembayaran_tanggal'),
          'pembayaran_keterangan'  => $this->request->getPost('pembayaran_keterangan'),
      );
      $builder->insert($data);

      echo $jamaah_id=$this->request->getPost('jamaah_id');
      $query = $db->query("SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'");
      $row   = $query->getRow();
      echo $jamaah_nama=$row->jamaah_nama;

      $builder = $db->table('kas');
      $data = array(
          'id_transaksi'  => $id_transaksi,
          'keterangan'  => 'pembayaran '.$this->request->getPost('pembayaran_keterangan').' '.$jamaah_nama,
          'nominal'  => $this->request->getPost('pembayaran_jumlah'),
          'tgl_transaksi'  => $this->request->getPost('pembayaran_tanggal'),
          'tipe_kas'  => 'masuk',
      );
      $builder->insert($data);

      $builder = $db->table('jurnal');
      $data = array(
          'id_transaksi'  => $id_transaksi,
          'keterangan'  => 'pembayaran '.$this->request->getPost('pembayaran_keterangan').' '.$jamaah_nama,
          'tgl_transaksi'  => $this->request->getPost('pembayaran_tanggal'),
          'debit'  => $this->request->getPost('pembayaran_jumlah'),
      );
      $builder->insert($data);
      return redirect()->to(site_url('keuangan/pembayaran/index/'.$jamaah_id));

    }

    public function edit($pembayaran_id){
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM pembayaran WHERE pembayaran_id='$pembayaran_id'";

        $data['pembayaran']=$db->query($query1)->getResult();

        echo view('keuangan/edit_pembayaran', $data);
    }

    public function updatedata_aksi(){
        $pembayaran_id=$this->request->getPost('pembayaran_id');
        $db = \Config\Database::connect();

        echo $id_transaksi=$this->request->getPost('id_transaksi');
        echo $jamaah_id=$this->request->getPost('jamaah_id');


        $data = array(
          'pembayaran_jumlah'  => $this->request->getPost('pembayaran_jumlah'),
          'pembayaran_tanggal'  => $this->request->getPost('pembayaran_tanggal'),
          'pembayaran_keterangan'  => $this->request->getPost('pembayaran_keterangan'),
        );
        $builder = $db->table('pembayaran');
        $builder->where('id_transaksi', $id_transaksi);
        $builder->update($data);



        $query = $db->query("SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'");
        $row   = $query->getRow();
        echo $jamaah_nama=$row->jamaah_nama;

        $data = array(
            'keterangan'  => 'pembayaran '.$this->request->getPost('pembayaran_keterangan').' '.$jamaah_nama,
            'nominal'  => $this->request->getPost('pembayaran_jumlah'),
            'tgl_transaksi'  => $this->request->getPost('pembayaran_tanggal'),
            'tipe_kas'  => 'masuk',
        );
        $builder = $db->table('kas');
        $builder->where('id_transaksi', $id_transaksi);
        $builder->update($data);


        $data = array(
            'keterangan'  => 'pembayaran '.$this->request->getPost('pembayaran_keterangan').' '.$jamaah_nama,
            'tgl_transaksi'  => $this->request->getPost('pembayaran_tanggal'),
            'debit'  => $this->request->getPost('pembayaran_jumlah'),
        );
        $builder = $db->table('jurnal');
        $builder->where('id_transaksi', $id_transaksi);
        $builder->update($data);


        return redirect()->to(site_url('keuangan/pembayaran/index/'.$jamaah_id));
    }

    public function hapus($pembayaran_id,$jamaah_id,$id_transaksi){
        $db = \Config\Database::connect();
        $builder = $db->table('pembayaran');
        $builder->delete(['pembayaran_id' => $pembayaran_id]);

        $builder = $db->table('kas');
        $builder->delete(['id_transaksi' => $id_transaksi]);

        $builder = $db->table('jurnal');
        $builder->delete(['id_transaksi' => $id_transaksi]);

      return redirect()->to(site_url('keuangan/pembayaran/index/'.$jamaah_id));
    }
}
