<?php namespace App\Controllers\perlengkapan;

use CodeIgniter\Controller;

class Perlengkapan_jamaah extends Controller
{
    public function index($jamaah_id=NULL)
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');
        $query1 = "SELECT * FROM jamaah";

        $query2 = "SELECT * FROM perlengkapan_jamaah join perlengkapan on perlengkapan.perlengkapan_id=perlengkapan_jamaah.perlengkapan_id
        WHERE perlengkapan_jamaah.jamaah_id='$jamaah_id' AND perlengkapan_jamaah_status='cek'";

        $data['jamaah']=$db->query($query1)->getResult();
        $data['perlengkapan_jamaah']=$db->query($query2)->getResult();
        return view('perlengkapan/perlengkapan_jamaah',$data);
    }

    public function preview_data_perlengkapan($perlengkapan_id=NULL)
    {
        $session = session();
        //echo "Welcome back, ".$session->get('username');
        $db = \Config\Database::connect();
        $data['session'] = session();
        // echo "Welcome back, ".$session->get('username');

        $query1 = "SELECT * FROM perlengkapan_jamaah join perlengkapan on perlengkapan.perlengkapan_id=perlengkapan_jamaah.perlengkapan_id
        WHERE perlengkapan_jamaah.perlengkapan_id='$perlengkapan_id'";

        $data=$db->query($query1)->getResult();

        echo json_encode($data);
    }

    // public function edit($perlengkapan_jamaah_id){
    //     $db = \Config\Database::connect();
    //     $data['session'] = session();
    //     // echo "Welcome back, ".$session->get('username');
    //     $query1 = "SELECT * FROM perlengkapan_jamaah WHERE perlengkapan_jamaah_id='$perlengkapan_jamaah_id'";
    //
    //     $data['perlengkapan_jamaah']=$db->query($query1)->getResult();
    //
    //     echo view('perlengkapan/edit_perlengkapan_jamaah', $data);
    // }

    public function updatedata_ambil_aksi(){
        $perlengkapan_jamaah_id=$this->request->getPost('perlengkapan_jamaah_id');
        $jamaah_id=$this->request->getPost('jamaah_id');
        $perlengkapan_id=$this->request->getPost('perlengkapan_id');
        $jumlah_diambil=$this->request->getPost('perlengkapan_jamaah_jumlah_diambil');
        $db = \Config\Database::connect();

        $query1 = "SELECT perlengkapan_jamaah_jumlah_diambil FROM perlengkapan_jamaah WHERE perlengkapan_jamaah_id='$perlengkapan_jamaah_id'";
        $cek_diambil=$db->query($query1)->getRow();
        $hasil_diambil=$cek_diambil->perlengkapan_jamaah_jumlah_diambil;
        $update_perlengkapan_jamaah=$hasil_diambil+$jumlah_diambil;


        //update perlengkapan_jamaah
        $data = array(
            'perlengkapan_jamaah_jumlah_diambil'  => $update_perlengkapan_jamaah,
            'perlengkapan_jamaah_tgl_diambil'  => $this->request->getPost('perlengkapan_jamaah_tgl_diambil'),
        );
        $builder = $db->table('perlengkapan_jamaah');
        $builder->where('perlengkapan_jamaah_id', $perlengkapan_jamaah_id);
        $builder->update($data);


        $query1 = "SELECT perlengkapan_stok FROM perlengkapan WHERE perlengkapan_id='$perlengkapan_id'";
        $cek_stok=$db->query($query1)->getRow();
        $update_perlengkapan=$cek_stok->perlengkapan_stok-$jumlah_diambil;
        $data = array(
            'perlengkapan_stok'  => $update_perlengkapan,
        );
        $builder = $db->table('perlengkapan');
        $builder->where('perlengkapan_id', $perlengkapan_id);
        $builder->update($data);

        return redirect()->to(site_url('/perlengkapan/perlengkapan_jamaah/index/'.$jamaah_id));
    }


    public function updatedata_kembali_aksi(){
        $perlengkapan_jamaah_id=$this->request->getPost('perlengkapan_jamaah_id');
        $jamaah_id=$this->request->getPost('jamaah_id');
        $perlengkapan_id=$this->request->getPost('perlengkapan_id');
        $jumlah_kembali=$this->request->getPost('perlengkapan_jamaah_jumlah_kembali');
        $db = \Config\Database::connect();

        $query1 = "SELECT perlengkapan_jamaah_jumlah_kembali FROM perlengkapan_jamaah WHERE perlengkapan_jamaah_id='$perlengkapan_jamaah_id'";
        $cek_kembali=$db->query($query1)->getRow();
        $hasil_kembali=$cek_kembali->perlengkapan_jamaah_jumlah_kembali;
        $update_perlengkapan_jamaah=$hasil_kembali+$jumlah_kembali;


        //update perlengkapan_jamaah
        $data = array(
            'perlengkapan_jamaah_jumlah_kembali'  => $update_perlengkapan_jamaah,
            'perlengkapan_jamaah_tgl_kembali'  => $this->request->getPost('perlengkapan_jamaah_tgl_kembali'),
        );
        $builder = $db->table('perlengkapan_jamaah');
        $builder->where('perlengkapan_jamaah_id', $perlengkapan_jamaah_id);
        $builder->update($data);


        $query1 = "SELECT perlengkapan_stok FROM perlengkapan WHERE perlengkapan_id='$perlengkapan_id'";
        $cek_stok=$db->query($query1)->getRow();
        $update_perlengkapan=$cek_stok->perlengkapan_stok+$jumlah_kembali;
        $data = array(
            'perlengkapan_stok'  => $update_perlengkapan,
        );
        $builder = $db->table('perlengkapan');
        $builder->where('perlengkapan_id', $perlengkapan_id);
        $builder->update($data);


        return redirect()->to(site_url('/perlengkapan/perlengkapan_jamaah/index/'.$jamaah_id));
    }


}
