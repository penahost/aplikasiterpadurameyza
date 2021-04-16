<?php namespace App\Controllers\pendaftaran_haji_khusus;

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
        $query1 = "SELECT * FROM paket WHERE paket_jenis='haji khusus'";
        $query2 = "SELECT * FROM jamaah join paket on jamaah.paket_id=paket.paket_id WHERE jamaah.paket_id='$paket_id' AND paket.paket_jenis='haji khusus'";

        $data['paket']=$db->query($query1)->getResult();
        $data['jamaah']=$db->query($query2)->getResult();
        $data['paket_id']=$paket_id;
        return view('pendaftaran_haji_khusus/jamaah',$data);
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
        echo view('pendaftaran_haji_khusus/tambahdata_jamaah',$data);
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
                $foto1->move(ROOTPATH . '/uploads/jamaah/');
                $data = [
                    'jamaah_foto' => $foto1->getName()
                ];
              }



              $foto2 = $this->request->getFile('file_ktp');
              if ($foto2->isValid() && ! $foto2->hasMoved()){
              $foto2->move(ROOTPATH . '/uploads/jamaah/');
              $data = [
                  'jamaah_foto_ktp' => $foto2->getName()
              ];
              }



              $foto3 = $this->request->getFile('file_kk');
              if ($foto3->isValid() && ! $foto3->hasMoved()){
              $foto3->move(ROOTPATH . '/uploads/jamaah/');
              $data = [
                  'jamaah_foto_kk' => $foto3->getName()
              ];
              }

              $foto4 = $this->request->getFile('file_bpih');
              if ($foto4->isValid() && ! $foto4->hasMoved()){
              $foto4->move(ROOTPATH . '/uploads/jamaah/');
              $data = [
                  'jamaah_foto_kk' => $foto4->getName()
              ];
              }

              $foto5 = $this->request->getFile('file_spph');
              if ($foto5->isValid() && ! $foto5->hasMoved()){
              $foto5->move(ROOTPATH . '/uploads/jamaah/');
              $data = [
                  'jamaah_foto_kk' => $foto5->getName()
              ];
              }



              $jamaah_tempat_lahir=$this->request->getPost('jamaah_tempat_lahir');
              $jamaah_tanggal_lahir=$this->request->getPost('jamaah_tanggal_lahir');
              $jamaah_ttl=$jamaah_tempat_lahir.", ".$jamaah_tanggal_lahir;

              echo $this->request->getPost('jamaah_dateofissue');
              $timestamp1 = strtotime($this->request->getPost('jamaah_dateofissue'));
              $new_date1 = date('Y-m-d', $timestamp1);

              $timestamp2 = strtotime($this->request->getPost('jamaah_dateofexpire'));
              $new_date2 = date('Y-m-d', $timestamp2);

              echo $this->request->getPost('jamaah_dateofexpire');

              $timestamp3 = strtotime($this->request->getPost('jamaah_tgl_berangkat'));
              $new_date3 = date('Y-m-d', $timestamp3);

              echo $this->request->getPost('jamaah_tgl_berangkat');

              echo $this->request->getPost('jamaah_nama');

              $data = array(
                  'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                  'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                  'jamaah_dateofissue'  => $new_date1,
                  'jamaah_dateofexpire'  => $new_date2,
                  'jamaah_jenis_identitas'  => $this->request->getPost('jamaah_jenis_identitas'),
                  'jamaah_ttl'  => $jamaah_ttl,
                  'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                  'jamaah_kewarganegaraan'  => $this->request->getPost('jamaah_kewarganegaraan'),
                  'jamaah_pekerjaan'  => $this->request->getPost('jamaah_pekerjaan'),
                  'jamaah_haji'  => $this->request->getPost('jamaah_haji'),
                  'jamaah_jk' => $this->request->getPost('jamaah_jk'),
                  'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                  'jamaah_desa_kel'  => $this->request->getPost('jamaah_desa_kel'),
                  'jamaah_kecamatan'  => $this->request->getPost('jamaah_kecamatan'),
                  'jamaah_kota_kab'  => $this->request->getPost('jamaah_kota_kab'),
                  'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                  'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                  'jamaah_tgl_berangkat'  => $new_date3,
                  'jamaah_foto' => $foto1->getName(),
                  'jamaah_foto_ktp' => $foto2->getName(),
                  'jamaah_foto_kk' => $foto3->getName(),
                  'jamaah_foto_bpih' => $foto4->getName(),
                  'jamaah_foto_spph' => $foto3->getName(),
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

      return redirect()->to(site_url('/pendaftaran_haji_khusus/jamaah/index/'.$paket_id))->with('success', 'Upload successfully');
    }



    public function edit($jamaah_id){

          $db = \Config\Database::connect();
          $data['session'] = session();
          // echo "Welcome back, ".$session->get('username');
          $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";


          $query2 = "SELECT * FROM perlengkapan";
          $query3 = "SELECT * FROM perlengkapan_jamaah join perlengkapan on perlengkapan_jamaah.perlengkapan_id=perlengkapan.perlengkapan_id WHERE jamaah_id='$jamaah_id'";





          $query2 = "SELECT * FROM perlengkapan";
          $perlengkapan=$db->query($query2)->getResult();
          foreach($perlengkapan as $row1){
              $perlengkapan_id=$row1->perlengkapan_id;

              $query2 = "SELECT COUNT(perlengkapan_id) as banyak_data FROM perlengkapan_jamaah WHERE perlengkapan_id='$perlengkapan_id' AND jamaah_id='$jamaah_id'";
              $cek_data=$db->query($query2)->getRow();
              $hasil_cek_data=$cek_data->banyak_data;

              if($hasil_cek_data==0){
                $builder = $db->table('perlengkapan_jamaah');
                $data = array(
                    'jamaah_id'  => $jamaah_id,
                    'perlengkapan_id'  => $row1->perlengkapan_id,
                    'perlengkapan_jamaah_status'  => 'uncek',
                );
                $builder->insert($data);
              }
          }

          $data['jamaah']=$db->query($query1)->getResult();
          $data['perlengkapan']=$db->query($query2)->getResult();
          $data['perlengkapan_jamaah']=$db->query($query3)->getResult();
          echo view('pendaftaran_haji_khusus/edit_jamaah', $data);

    }

    public function updatedata_aksi(){
        helper(['form', 'url']);
        $db = \Config\Database::connect();

        $jamaah_id=$this->request->getPost('jamaah_id');
        $data=array();

        $jamaah_tempat_lahir=$this->request->getPost('jamaah_tempat_lahir');
        $jamaah_tanggal_lahir=$this->request->getPost('jamaah_tanggal_lahir');
        $jamaah_ttl=$jamaah_tempat_lahir.", ".$jamaah_tanggal_lahir;

        $timestamp1 = strtotime($this->request->getPost('jamaah_dateofissue'));
        $new_date1 = date('Y-m-d', $timestamp1);

        $timestamp2 = strtotime($this->request->getPost('jamaah_dateofexpire'));
        $new_date2 = date('Y-m-d', $timestamp2);

        $timestamp3 = strtotime($this->request->getPost('jamaah_tgl_berangkat'));
        $new_date3 = date('Y-m-d', $timestamp3);


            $validated = $this->validate([
              'file' => [
                  'uploaded[file]',
                  'mime_in[file,image/jpg,image/jpeg,image/png]',
                  'max_size[file,10240000]',
              ]
            ]);


                $foto1 = $this->request->getFile('file_foto');
                if ($foto1->isValid() && ! $foto1->hasMoved()){
                  $foto1->move(ROOTPATH . '/uploads/jamaah/');

                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_dateofissue'  => $new_date1,
                      'jamaah_dateofexpire'  => $new_date2,
                      'jamaah_jenis_identitas'  => $this->request->getPost('jamaah_jenis_identitas'),
                      'jamaah_ttl'  => $jamaah_ttl,
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_kewarganegaraan'  => $this->request->getPost('jamaah_kewarganegaraan'),
                      'jamaah_pekerjaan'  => $this->request->getPost('jamaah_pekerjaan'),
                      'jamaah_haji'  => $this->request->getPost('jamaah_haji'),
                      'jamaah_jk' => $this->request->getPost('jamaah_jk'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_desa_kel'  => $this->request->getPost('jamaah_desa_kel'),
                      'jamaah_kecamatan'  => $this->request->getPost('jamaah_kecamatan'),
                      'jamaah_kota_kab'  => $this->request->getPost('jamaah_kota_kab'),
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
                $foto2->move(ROOTPATH . '/uploads/jamaah/');
                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_dateofissue'  => $new_date1,
                      'jamaah_dateofexpire'  => $new_date2,
                      'jamaah_jenis_identitas'  => $this->request->getPost('jamaah_jenis_identitas'),
                      'jamaah_ttl'  => $jamaah_ttl,
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_kewarganegaraan'  => $this->request->getPost('jamaah_kewarganegaraan'),
                      'jamaah_pekerjaan'  => $this->request->getPost('jamaah_pekerjaan'),
                      'jamaah_haji'  => $this->request->getPost('jamaah_haji'),
                      'jamaah_jk' => $this->request->getPost('jamaah_jk'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_desa_kel'  => $this->request->getPost('jamaah_desa_kel'),
                      'jamaah_kecamatan'  => $this->request->getPost('jamaah_kecamatan'),
                      'jamaah_kota_kab'  => $this->request->getPost('jamaah_kota_kab'),
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
                $foto3->move(ROOTPATH . '/uploads/jamaah/');
                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_dateofissue'  => $new_date1,
                      'jamaah_dateofexpire'  => $new_date2,
                      'jamaah_jenis_identitas'  => $this->request->getPost('jamaah_jenis_identitas'),
                      'jamaah_ttl'  => $jamaah_ttl,
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_kewarganegaraan'  => $this->request->getPost('jamaah_kewarganegaraan'),
                      'jamaah_pekerjaan'  => $this->request->getPost('jamaah_pekerjaan'),
                      'jamaah_haji'  => $this->request->getPost('jamaah_haji'),
                      'jamaah_jk' => $this->request->getPost('jamaah_jk'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_desa_kel'  => $this->request->getPost('jamaah_desa_kel'),
                      'jamaah_kecamatan'  => $this->request->getPost('jamaah_kecamatan'),
                      'jamaah_kota_kab'  => $this->request->getPost('jamaah_kota_kab'),
                      'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                      'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                      'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
                      'jamaah_foto_kk' => $foto3->getName()
                  );
                  $builder = $db->table('jamaah');
                  $builder->where('jamaah_id', $jamaah_id);
                  $builder->update($data);
                }

                $foto4 = $this->request->getFile('file_bpih');
                if ($foto4->isValid() && ! $foto4->hasMoved()){
                $foto4->move(ROOTPATH . '/uploads/jamaah/');
                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_dateofissue'  => $new_date1,
                      'jamaah_dateofexpire'  => $new_date2,
                      'jamaah_jenis_identitas'  => $this->request->getPost('jamaah_jenis_identitas'),
                      'jamaah_ttl'  => $jamaah_ttl,
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_kewarganegaraan'  => $this->request->getPost('jamaah_kewarganegaraan'),
                      'jamaah_pekerjaan'  => $this->request->getPost('jamaah_pekerjaan'),
                      'jamaah_haji'  => $this->request->getPost('jamaah_haji'),
                      'jamaah_jk' => $this->request->getPost('jamaah_jk'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_desa_kel'  => $this->request->getPost('jamaah_desa_kel'),
                      'jamaah_kecamatan'  => $this->request->getPost('jamaah_kecamatan'),
                      'jamaah_kota_kab'  => $this->request->getPost('jamaah_kota_kab'),
                      'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                      'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                      'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
                      'jamaah_foto_bpih' => $foto4->getName()
                  );
                  $builder = $db->table('jamaah');
                  $builder->where('jamaah_id', $jamaah_id);
                  $builder->update($data);
                }

                $foto5 = $this->request->getFile('file_spph');
                if ($foto5->isValid() && ! $foto5->hasMoved()){
                $foto5->move(ROOTPATH . '/uploads/jamaah/');
                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_dateofissue'  => $new_date1,
                      'jamaah_dateofexpire'  => $new_date2,
                      'jamaah_jenis_identitas'  => $this->request->getPost('jamaah_jenis_identitas'),
                      'jamaah_ttl'  => $jamaah_ttl,
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_kewarganegaraan'  => $this->request->getPost('jamaah_kewarganegaraan'),
                      'jamaah_pekerjaan'  => $this->request->getPost('jamaah_pekerjaan'),
                      'jamaah_haji'  => $this->request->getPost('jamaah_haji'),
                      'jamaah_jk' => $this->request->getPost('jamaah_jk'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_desa_kel'  => $this->request->getPost('jamaah_desa_kel'),
                      'jamaah_kecamatan'  => $this->request->getPost('jamaah_kecamatan'),
                      'jamaah_kota_kab'  => $this->request->getPost('jamaah_kota_kab'),
                      'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                      'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                      'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
                      'jamaah_foto_spph' => $foto5->getName()
                  );
                  $builder = $db->table('jamaah');
                  $builder->where('jamaah_id', $jamaah_id);
                  $builder->update($data);
                }

                if (!$foto1->isValid() && !$foto2->isValid() && !$foto3->isValid() && !$foto4->isValid() && !$foto5->isValid()){
                  $data = array(
                      'jamaah_nama'  => $this->request->getPost('jamaah_nama'),
                      'jamaah_no_passport'  => $this->request->getPost('jamaah_no_passport'),
                      'jamaah_dateofissue'  => $new_date1,
                      'jamaah_dateofexpire'  => $new_date2,
                      'jamaah_jenis_identitas'  => $this->request->getPost('jamaah_jenis_identitas'),
                      'jamaah_ttl'  => $jamaah_ttl,
                      'jamaah_usia'  => $this->request->getPost('jamaah_usia'),
                      'jamaah_kewarganegaraan'  => $this->request->getPost('jamaah_kewarganegaraan'),
                      'jamaah_pekerjaan'  => $this->request->getPost('jamaah_pekerjaan'),
                      'jamaah_haji'  => $this->request->getPost('jamaah_haji'),
                      'jamaah_jk' => $this->request->getPost('jamaah_jk'),
                      'jamaah_alamat'  => $this->request->getPost('jamaah_alamat'),
                      'jamaah_desa_kel'  => $this->request->getPost('jamaah_desa_kel'),
                      'jamaah_kecamatan'  => $this->request->getPost('jamaah_kecamatan'),
                      'jamaah_kota_kab'  => $this->request->getPost('jamaah_kota_kab'),
                      'jamaah_no_hp'  => $this->request->getPost('jamaah_no_hp'),
                      'jamaah_ket_pembayaran'  => $this->request->getPost('jamaah_ket_pembayaran'),
                      'jamaah_tgl_berangkat'  => $this->request->getPost('jamaah_tgl_berangkat'),
                  );
                  $builder = $db->table('jamaah');
                  $builder->where('jamaah_id', $jamaah_id);
                  $builder->update($data);
                }
      return redirect()->to(site_url('/pendaftaran_haji_khusus/jamaah/edit/'.$jamaah_id))->with('success', 'Upload successfully');
    }

    public function hapus($jamaah_id,$paket_id){
        $db = \Config\Database::connect();
        $builder = $db->table('jamaah');
        $builder->delete(['jamaah_id' => $jamaah_id]);

        $builder = $db->table('perlengkapan_jamaah');
        $builder->delete(['jamaah_id' => $jamaah_id]);

        return redirect()->to(site_url('pendaftaran_haji_khusus/jamaah/index/'.$paket_id));
    }
    public function preview_surat_pernyataan($jamaah_id)
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
        $data_jamaah=$db->query($query1)->getRow();

        $data['row']=array(
            'jamaah_id'  => $data_jamaah->jamaah_id,
            'jamaah_nama'  => $data_jamaah->jamaah_nama,
            'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
            'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
            'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
            );

        return view('pendaftaran_haji_khusus/preview_surat_pernyataan',$data);
    }

    public function download_surat_pernyataan($jamaah_id)
    {
      $db = \Config\Database::connect();
      $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
      $data_jamaah=$db->query($query1)->getRow();

      $data['row']=array(
          'jamaah_id'  => $data_jamaah->jamaah_id,
          'jamaah_nama'  => $data_jamaah->jamaah_nama,
          'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
          'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
          'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
          );

      header('Content-type: application/vnd.ms-word');
      header("Content-disposition: attachment; filename=example.doc");
      return view('pendaftaran_haji_khusus/preview_surat_pernyataan',$data);
    }

    public function tgl_indo($tanggal){
    	$bulan = array (
    		1 =>   'Januari',
    		'Februari',
    		'Maret',
    		'April',
    		'Mei',
    		'Juni',
    		'Juli',
    		'Agustus',
    		'September',
    		'Oktober',
    		'November',
    		'Desember'
    	);
    	$pecahkan = explode('-', $tanggal);
    	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    public function tgl_berangkat($tanggal){
    	$bulan = array (
    		1 =>   'Januari',
    		'Februari',
    		'Maret',
    		'April',
    		'Mei',
    		'Juni',
    		'Juli',
    		'Agustus',
    		'September',
    		'Oktober',
    		'November',
    		'Desember'
    	);
    	$pecahkan = explode('-', $tanggal);
    	return $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    public function preview_surat_pernyataan2($jamaah_id)
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
        $data_jamaah=$db->query($query1)->getRow();

        $data['row']=array(
            'jamaah_id'  => $data_jamaah->jamaah_id,
            'jamaah_nama'  => $data_jamaah->jamaah_nama,
            'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
            'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
            'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
            'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
            'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
            );

        return view('pendaftaran_haji_khusus/preview_surat_pernyataan2',$data);
    }

    public function download_surat_pernyataan2($jamaah_id)
    {
      $db = \Config\Database::connect();
      $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
      $data_jamaah=$db->query($query1)->getRow();

      $data['row']=array(
          'jamaah_id'  => $data_jamaah->jamaah_id,
          'jamaah_nama'  => $data_jamaah->jamaah_nama,
          'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
          'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
          'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
          'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
          'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
          );

      header('Content-type: application/vnd.ms-word');
      header("Content-disposition: attachment; filename=example.doc");
      return view('pendaftaran_haji_khusus/preview_surat_pernyataan2',$data);
    }

    public function preview_surat_jaminan($jamaah_id)
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
        $data_jamaah=$db->query($query1)->getRow();

        $data['row']=array(
            'jamaah_id'  => $data_jamaah->jamaah_id,
            'jamaah_nama'  => $data_jamaah->jamaah_nama,
            'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
            'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
            'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
            'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
            'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
            );

        return view('pendaftaran_haji_khusus/preview_surat_jaminan',$data);
    }

    public function download_surat_jaminan($jamaah_id)
    {
      $db = \Config\Database::connect();
      $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
      $data_jamaah=$db->query($query1)->getRow();

      $data['row']=array(
          'jamaah_id'  => $data_jamaah->jamaah_id,
          'jamaah_nama'  => $data_jamaah->jamaah_nama,
          'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
          'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
          'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
          'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
          'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
          );

      header('Content-type: application/vnd.ms-word');
      header("Content-disposition: attachment; filename=example.doc");
      return view('pendaftaran_haji_khusus/preview_surat_jaminan',$data);
    }

    public function preview_surat_rekom_kemenag($jamaah_id)
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
        $data_jamaah=$db->query($query1)->getRow();

        $data['row']=array(
            'jamaah_id'  => $data_jamaah->jamaah_id,
            'jamaah_nama'  => $data_jamaah->jamaah_nama,
            'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
            'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
            'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
            'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
            'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
            );

        return view('pendaftaran_haji_khusus/preview_surat_rekom_kemenag',$data);
    }

    public function download_surat_rekom_kemenag($jamaah_id)
    {
      $db = \Config\Database::connect();
      $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
      $data_jamaah=$db->query($query1)->getRow();

      $data['row']=array(
          'jamaah_id'  => $data_jamaah->jamaah_id,
          'jamaah_nama'  => $data_jamaah->jamaah_nama,
          'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
          'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
          'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
          'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
          'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
          );

      header('Content-type: application/vnd.ms-word');
      header("Content-disposition: attachment; filename=example.doc");
      return view('pendaftaran_haji_khusus/preview_surat_rekom_kemenag',$data);
    }

    public function preview_surat_rekom_rameyza($jamaah_id)
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
        $data_jamaah=$db->query($query1)->getRow();

        $data['row']=array(
            'jamaah_id'  => $data_jamaah->jamaah_id,
            'jamaah_nama'  => $data_jamaah->jamaah_nama,
            'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
            'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
            'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
            'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
            'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
            'jamaah_berangkat'  => $this->tgl_berangkat(date('Y-m-d')),
            );

        return view('pendaftaran_haji_khusus/preview_surat_rekom_rameyza',$data);
    }

    public function download_surat_rekom_rameyza($jamaah_id)
    {
      $db = \Config\Database::connect();
      $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
      $data_jamaah=$db->query($query1)->getRow();

      $data['row']=array(
          'jamaah_id'  => $data_jamaah->jamaah_id,
          'jamaah_nama'  => $data_jamaah->jamaah_nama,
          'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
          'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
          'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
          'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
          'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
          'jamaah_berangkat'  => $this->tgl_berangkat(date('Y-m-d')),
          );

      header('Content-type: application/vnd.ms-word');
      header("Content-disposition: attachment; filename=example.doc");
      return view('pendaftaran_haji_khusus/preview_surat_rekom_rameyza',$data);
    }

    public function download_report_manifest($paket_id)
    {
      $db = \Config\Database::connect();
      $query1 = "SELECT * FROM jamaah WHERE paket_id='$paket_id'";
      $data['jamaah']=$db->query($query1)->getResult();

      // $data['row']=array(
      //     'jamaah_id'  => $data_jamaah->jamaah_id,
      //     'jamaah_nama'  => $data_jamaah->jamaah_nama,
      //     'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
      //     'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
      //     'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
      //     'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
      //     'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
      //     'jamaah_berangkat'  => $this->tgl_berangkat(date('Y-m-d')),
      //     );

      header("Content-type: application/vnd-ms-excel");
      header("Content-Disposition: attachment; filename=hasil.xls");
      return view('pendaftaran_haji_khusus/preview_report_manifest',$data);
    }

    public function cetak_data_jamaah($jamaah_id)
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah
        JOIN paket ON paket.paket_id=jamaah.paket_id
        WHERE jamaah_id='$jamaah_id'";
        $data_jamaah=$db->query($query1)->getResult();

        $query2 = "SELECT * FROM perlengkapan_jamaah
        JOIN perlengkapan ON perlengkapan.perlengkapan_id=perlengkapan_jamaah.perlengkapan_id
        WHERE jamaah_id='$jamaah_id'";
        $data_perlengkapan=$db->query($query2)->getResult();

        $data['cetakdatajamaah']=$data_jamaah;
        $data['dataperlengkapan']=$data_perlengkapan;

        return view('pendaftaran_umrah/cetak_data_jamaah',$data);
    }

    public function preview_bukti_pendaftaran($jamaah_id)
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
        $data_jamaah=$db->query($query1)->getRow();

        $data['row']=array(
            'jamaah_id'  => $data_jamaah->jamaah_id,
            'jamaah_nama'  => $data_jamaah->jamaah_nama,
            'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
            'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
            'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
            'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
            'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
            'jamaah_berangkat'  => $this->tgl_berangkat(date('Y-m-d')),
            );

        return view('pendaftaran_haji_khusus/preview_bukti_pendaftaran',$data);
    }

    public function download_bukti_pendaftaran($jamaah_id)
    {
        $session = session();
        $db = \Config\Database::connect();
        $query1 = "SELECT * FROM jamaah WHERE jamaah_id='$jamaah_id'";
        $data_jamaah=$db->query($query1)->getRow();

        $data['row']=array(
            'jamaah_id'  => $data_jamaah->jamaah_id,
            'jamaah_nama'  => $data_jamaah->jamaah_nama,
            'jamaah_ttl'  => $data_jamaah->jamaah_ttl,
            'jamaah_alamat'  => $data_jamaah->jamaah_alamat,
            'jamaah_pekerjaan'  => $data_jamaah->jamaah_pekerjaan,
            'jamaah_no_hp'  => $data_jamaah->jamaah_no_hp,
            'jamaah_tgl_ttd'  => $this->tgl_indo(date('Y-m-d')),
            'jamaah_berangkat'  => $this->tgl_berangkat(date('Y-m-d')),
            );

        header('Content-type: application/vnd.ms-word');
        header("Content-disposition: attachment; filename=example.doc");
        return view('pendaftaran_haji_khusus/preview_bukti_pendaftaran',$data);
    }
}
