<?php

namespace App\Controllers;

use App\Models\Mekanik_model;
use App\Models\Parts_model;

class Master extends BaseController
{

     protected $mRequest;
     public function __construct()
     {
          // instansiasi data 
          $this->mRequest = service("request");

          // instansiasi data dari Folder Model
          $this->Mekanik_model = new Mekanik_model();
          $this->Parts_model = new Parts_model();
     }

     public function index()
     {
          session();
          // Get data dari Part_Model folder Model
          // $dataAllPart =  $this->Parts_model->findAll();

          // Menggunakn kondisi berdasarkan halaman berapa dia tampil
          $currentPage = $this->mRequest->getVar('page_dataAllPart') ? $this->mRequest->getVar('page_dataAllPart') : 1;
          // Memanggil session dari fungsi setelah Login
          $nameUser = session()->get('name');
          $data = [
               'title' => 'Stock Parts',
               'user' => $nameUser,
               // 'dataAllPart' => $dataAllPart,

               // Fungsi paginate sama dengan get data atau findAll 
               'dataAllPart' =>  $this->Parts_model->paginate(4, 'dataAllPart'),

               // Memanggil fungsi dari Mekanik_model dan sudah otomatis ada didalam nya  
               'pager' => $this->Parts_model->pager,

               // Menampilakn nomor urut berdasarkan halaman
               'currentPage'  => $currentPage

          ];

          return view('master/stock_parts', $data);
     }
     public function addParts()
     {
          // $email = $this->mRequest->getVar();
          // dd($email);
          $data = [
               'kd_part' => $this->mRequest->getVar('kd_part'),
               'name_part' => $this->mRequest->getVar('name_part'),
               'hr_part' => $this->mRequest->getVar('hr_part'),
               't_part' => $this->mRequest->getVar('t_part')
          ];
          // dd($data);
          $this->Parts_model->insert($data);
          session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
          return redirect()->to(base_url('/master'));
     }

     public function mekanik()
     {
          session();
          // $dataAllMekanik =  $this->Mekanik_model->findAll();
          // dd($dataAllMekanik);

          // Menggunakn kondisi berdasarkan halaman berapa dia tampil
          $currentPage = $this->mRequest->getVar('page_dataAllMekanik') ? $this->mRequest->getVar('page_dataAllMekanik') : 1;
          $nameUser = session()->get('name');
          $data = [
               'title' => 'List Mekanik',
               'user' => $nameUser,
               // 'dataAllMekanik' => $dataAllMekanik,
               // Fungsi paginate sama dengan get data atau findAll 
               'dataAllMekanik' =>  $this->Mekanik_model->paginate(4, 'dataAllMekanik'),

               // Memanggil fungsi dari Mekanik_model dan sudah otomatis ada didalam nya  
               'pager' => $this->Mekanik_model->pager,

               // Menampilakn nomor urut berdasarkan halaman
               'currentPage'  => $currentPage
          ];
          session()->set($data);
          return view('master/list_mekanik', $data);
     }
     public function addMekanik()
     {
          // $email = $this->mRequest->getVar();
          // dd($email);
          $data = [
               'id_mekanik' => $this->mRequest->getVar('id_mekanik'),
               'name_mekanik' => $this->mRequest->getVar('name_mekanik'),
               'divisi' => $this->mRequest->getVar('divisi')
          ];
          // dd($data);
          $this->Mekanik_model->insert($data);
          session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
          return redirect()->to(base_url('/master/mekanik'));
     }
     public function deleteMekanik($id)
     {
          $this->Mekanik_model->delete($id);
          session()->setFlashdata('pesan', 'Data berhasil dihapus');
          return redirect()->to(base_url('master/mekanik'));
     }
     public function material()
     {
          $nameUser = session()->get('name');
          $data = [
               'title' => 'Stock kMaterial',
               'user' => $nameUser
          ];

          return view('master/stock_material', $data);
     }
}
