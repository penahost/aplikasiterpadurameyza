<?php namespace App\Controllers\pendaftaran_umrah;

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
        $query1 = "SELECT * FROM paket WHERE paket_jenis='umrah'";
        $query2 = "SELECT * FROM jamaah join paket on jamaah.paket_id=paket.paket_id WHERE jamaah.paket_id='$paket_id' AND paket.paket_jenis='umrah'";

        $data['paket']=$db->query($query1)->getResult();
        $data['jamaah']=$db->query($query2)->getResult();
        $data['paket_id']=$paket_id;
        return view('pendaftaran_umrah/jamaah',$data);
    }

    public function preview_data_jamaah($jamaah_id=NULL)
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');

        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";

        $data=$db->query($query1)->getResult();

        echo json_encode($data);
    }

    public function preview_data_perlengkapan($jamaah_id=NULL)
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');

        $query1 = "SELECT * FROM perlengkapan_jamaah join perlengkapan on perlengkapan.perlengkapan_id=perlengkapan_jamaah.perlengkapan_id WHERE jamaah_id='$jamaah_id' AND perlengkapan_jamaah.perlengkapan_jamaah_status='cek'";

        $data=$db->query($query1)->getResult();

        echo json_encode($data);
    }

    public function tambahdata($paket_id=NULL){
      if (!$this->validate([]))
      {
        $db = \Config\Database::connect();
        $session = session();
        $user_id=$session->get('id');

        $query1 = "SELECT * FROM perlengkapan";

        $data['perlengkapan']=$db->query($query1)->getResult();

        $data['validation'] = $this->validator;
        $data['paket_id']=$paket_id;
        echo view('pendaftaran_umrah/tambahdata_jamaah',$data);
      }
    }

    public function tambahdata_aksii()
    {
      helper(['form', 'url']);
      $db = \Config\Database::connect();

      $paket_id=$this->request->getPost('paket_id');

      $builder = $db->table('jamaah');
      $data=array();

          $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file,10240000]',
            ]
          ]);


              $foto1 = $this->request->getFile('file_foto');
              if ($foto1->isValid() && ! $foto1->hasMoved()){
                $foto1->move(ROOTPATH . '../uploads/jamaah/');
                $data = [
                    'jamaah_foto' => $foto1->getName()
                ];
              }



              $foto2 = $this->request->getFile('file_ktp');
              if ($foto2->isValid() && ! $foto2->hasMoved()){
              $foto2->move(ROOTPATH . '../uploads/jamaah/');
              $data = [
                  'jamaah_foto_ktp' => $foto2->getName()
              ];
              }



              $foto3 = $this->request->getFile('file_kk');
              if ($foto3->isValid() && ! $foto3->hasMoved()){
              $foto3->move(ROOTPATH . '../uploads/jamaah/');
              $data = [
                  'jamaah_foto_kk' => $foto3->getName()
              ];
              }



      $data = array(
          'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
          'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
          'jamaah_ttl'  => $this->request->getPost('jamaah_ttl'),
          'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
          'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
          'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
          'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
          'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
          'jamaah_foto' => $foto1->getName(),
          'jamaah_foto_ktp' => $foto2->getName(),
          'jamaah_foto_kk' => $foto3->getName(),
          'paket_id'  => $this->request->getPost('paket_id'),
      );
      $builder->insert($data);

      $last_jamaah_id=$db->insertID();
      // $perlengkapan = implode(",", $_POST['perlengkapan']);



      $query1 = "SELECT * FROM perlengkapan";
      $perlengkapan=$db->query($query1)->getResult();
      foreach($perlengkapan as $row1){
          $builder = $db->table('perlengkapan_jamaah');
          $data = array(
              'jamaah_id'  => $last_jamaah_id,
              'perlengkapan_id'  => $row1->perlengkapan_id,
              'perlengkapan_jamaah_status'  => 'uncek',
          );
          $builder->insert($data);
      }

      if(isset($_POST['perlengkapan'])){
      $jumlah = count($_POST['perlengkapan']); //menghitung jumlah value yang di centang
      for($i=0; $i<$jumlah; $i++){
                 // echo $_POST['perlengkapan'][$i]."-";
                 // echo $_POST['perlengkapan'][$i]."-";
                 $perlengkapan_id=$_POST['perlengkapan'][$i];

                 $data = array(
                     'perlengkapan_jamaah_status'  => 'cek',
                 );
                 $builder = $db->table('perlengkapan_jamaah');
                 $builder->where(['jamaah_id' => $last_jamaah_id,'perlengkapan_id' => $perlengkapan_id]);
                 $builder->update($data);
      }
    }


      return redirect()->to(site_url('/pendaftaran_umrah/jamaah/index/'.$paket_id))->with('success', 'Upload successfully');
    }



    public function edit($jamaah_id){
        if (!$this->validate([]))
        {
          $db = \Config\Database::connect();
          $data['session'] = session();
          // echo "Welcome back, ".$session->get('username');
          $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";


          $query2 = "SELECT * FROM perlengkapan";
          $query3 = "SELECT * FROM perlengkapan_jamaah join perlengkapan on perlengkapan_jamaah.perlengkapan_id=perlengkapan.perlengkapan_id WHERE jamaah_id='$jamaah_id'";



          $data['validation'] = $this->validator;
          $data['jamaah']=$db->query($query1)->getResult();
          $data['perlengkapan']=$db->query($query2)->getResult();
          $data['perlengkapan_jamaah']=$db->query($query3)->getResult();

          echo view('pendaftaran_umrah/edit_jamaah', $data);
        }
    }

    public function updatedata_aksi(){
        helper(['form', 'url']);
        $db = \Config\Database::connect();

        $jamaah_id=$this->request->getPost('jamaah_id');
        $data=array();

            $validated = $this->validate([
              'file' => [
                  'uploaded[file]',
                  'mime_in[file,image/jpg,image/jpeg,image/png]',
                  'max_size[file,10240000]',
              ]
            ]);


                $foto1 = $this->request->getFile('file_foto');
                if ($foto1->isValid() && ! $foto1->hasMoved()){
                  $foto1->move(ROOTPATH . '../uploads/jamaah/');

                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_ttl'  => $this->request->getPost('jamaah_ttl'),
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                      'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                      'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
                      'jamaah_foto' => $foto1->getName(),
                  );
                  $builder = $db->table('jamaah');
                  $builder->where('jamaah_id', $jamaah_id);
                  $builder->update($data);
                }



                $foto2 = $this->request->getFile('file_ktp');
                if ($foto2->isValid() && ! $foto2->hasMoved()){
                $foto2->move(ROOTPATH . '../uploads/jamaah/');
                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_ttl'  => $this->request->getPost('jamaah_ttl'),
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                      'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                      'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
                      'jamaah_foto_ktp' => $foto2->getName(),
                  );
                  $builder = $db->table('jamaah');
                  $builder->where('jamaah_id', $jamaah_id);
                  $builder->update($data);
                }

                $foto3 = $this->request->getFile('file_kk');
                if ($foto3->isValid() && ! $foto3->hasMoved()){
                $foto3->move(ROOTPATH . '../uploads/jamaah/');
                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_ttl'  => $this->request->getPost('jamaah_ttl'),
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                      'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                      'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
                      'jamaah_foto_kk' => $foto3->getName()
                  );
                  $builder = $db->table('jamaah');
                  $builder->where('jamaah_id', $jamaah_id);
                  $builder->update($data);
                }

                if (!$foto1->isValid() && !$foto2->isValid() && !$foto3->isValid()){
                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_ttl'  => $this->request->getPost('jamaah_ttl'),
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                      'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                      'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
                  );
                  $builder = $db->table('jamaah');
                  $builder->where('jamaah_id', $jamaah_id);
                  $builder->update($data);
                }


        $data = array(
            'perlengkapan_jamaah_status'  => 'uncek',
        );
        $builder = $db->table('perlengkapan_jamaah');
        $builder->where(['jamaah_id' => $jamaah_id]);
        $builder->update($data);

        if(isset($_POST['perlengkapan'])){
        $jumlah = count($_POST['perlengkapan']); //menghitung jumlah value yang di centang
        for($i=0; $i<$jumlah; $i++){
                   // echo $_POST['perlengkapan'][$i]."-";
                   $perlengkapan_id=$_POST['perlengkapan'][$i];

                   $data = array(
                       'perlengkapan_jamaah_status'  => 'cek',
                   );
                   $builder = $db->table('perlengkapan_jamaah');
                   $builder->where(['jamaah_id' => $jamaah_id,'perlengkapan_id' => $perlengkapan_id]);
                   $builder->update($data);
        }
      }


      return redirect()->to(site_url('/pendaftaran_umrah/jamaah/edit/'.$jamaah_id))->with('success', 'Upload successfully');
    }

    public function hapus($jamaah_id,$paket_id){
        $db = \Config\Database::connect();
        $builder = $db->table('jamaah');
        $builder->delete(['jamaah_id' => $jamaah_id]);

        $builder = $db->table('perlengkapan_jamaah');
        $builder->delete(['jamaah_id' => $jamaah_id]);

        return redirect()->to(site_url('pendaftaran_umrah/jamaah/index/'.$paket_id));
    }
}
