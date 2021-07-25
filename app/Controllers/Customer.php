<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

use App\Models\Customer_model;
use App\Models\Parts_model;
use App\Models\Request_order;

class Customer extends BaseController
{
     protected $mRequest;
     public function __construct()
     {
          $this->mRequest = service("request");
          $this->Customer_model = new Customer_model();
          $this->Parts_model = new Parts_model();
          $this->Request_order = new Request_order();
     }
     public function index()
     {
          $myTime = new Time('now', 'Asia/Jakarta', 'en_US');
          // $dataSpk = $this->Customer_model->findAll();


          // Menggunakn kondisi berdasarkan halaman berapa dia tampil
          $currentPage = $this->mRequest->getVar('page_dataSpk') ? $this->mRequest->getVar('page_dataSpk') : 1;
          $nameUser = session()->get('name');
          $data = [
               'title' => 'Customer SPK',
               'user' => $nameUser,
               'time' => $myTime,
               // 'dataSpk' => $dataSpk,


               // Fungsi paginate sama dengan get data atau findAll 
               'dataSpk' =>  $this->Customer_model->paginate(4, 'dataSpk'),

               // Memanggil fungsi dari Mekanik_model dan sudah otomatis ada didalam nya  
               'pager' => $this->Customer_model->pager,

               // Menampilakn nomor urut berdasarkan halaman
               'currentPage'  => $currentPage
          ];
          return view('customer/cust_spk', $data);
     }

     public function spk()
     {
          session();
          // $dataAllNameMekanik = $this->Customer_model->findAll();
          $nameUser = session()->get('name');
          $nameMekanik = session()->get('dataAllMekanik');
          // dd($nameMekanik);
          $data = [
               'title' => 'Create Spk',
               'user' => $nameUser,
               'nameMekanik' => $nameMekanik,
          ];
          return view('customer/create_spk', $data);
     }
     public function createSpk()
     {
          // $email = $this->mRequest->getVar();
          // dd($email);
          $data = [
               'plat_number' => $this->mRequest->getVar('plat_number'),
               'cust_name' => $this->mRequest->getVar('cust_name'),
               'cust_address' => $this->mRequest->getVar('cust_address'),
               'mekanik' => $this->mRequest->getVar('mekanik'),
               'type_kendaraan' => $this->mRequest->getVar('type_kendaraan'),
               'ser_advisor' => $this->mRequest->getVar('ser_advisor'),
               'desc1' => $this->mRequest->getVar('desc1'),
               'price1' => $this->mRequest->getVar('price1'),
               'desc2' => $this->mRequest->getVar('desc2'),
               'price2' => $this->mRequest->getVar('price2'),
               'total' =>  $this->mRequest->getVar('total'),
               'created_at' =>  $this->mRequest->getVar('created_at'),
          ];
          // dd($data);
          $this->Customer_model->insert($data);
          // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
          return redirect()->to(base_url('/customer/spk'));
     }

     public function request()
     {
          $nameUser = session()->get('name');
          $dataAllPart =  $this->Parts_model->findAll();
          $dataSpk = $this->Customer_model->findAll();
          $data = [
               'title' => 'Request Order',
               'user' => $nameUser,
               'dataAllPart' => $dataAllPart,
               'dataSpk' => $dataSpk
          ];
          return view('customer/req_order', $data);
     }
     public function addRequestOrder()
     {

          // $email = $this->mRequest->getVar();
          // dd($email);
          $data = [
               'id_spk' => $this->mRequest->getVar('id_spk'),
               'nopol' => $this->mRequest->getVar('nopol'),
               'part1' => $this->mRequest->getVar('part1'),
               'qty1' => $this->mRequest->getVar('qty1'),
               'perPcs1' => $this->mRequest->getVar('perPcs1'),
               'total1' => $this->mRequest->getVar('total1'),
               'part2' => $this->mRequest->getVar('part2'),
               'qty2' => $this->mRequest->getVar('qty2'),
               'perPcs2' => $this->mRequest->getVar('perPcs2'),
               'total2' => $this->mRequest->getVar('total2'),
               'part3' => $this->mRequest->getVar('part3'),
               'qty3' => $this->mRequest->getVar('qty3'),
               'perPcs3' => $this->mRequest->getVar('perPcs3'),
               'total3' =>  $this->mRequest->getVar('total3'),
               'akumulasi_total' =>  $this->mRequest->getVar('akumulasi_total'),
               'tgl_req_order' =>  $this->mRequest->getVar('tgl_req_order'),
          ];
          // dd($data);
          $this->Request_order->insert($data);
          session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
          return redirect()->to(base_url('/customer/request'));
     }
     // public function getUbah()
     // {
     //      $json = file_get_contents('php://input');
     //      $data = json_decode($json);
     //      // echo $data;
     //      echo json_encode($this->Parts_model->find($data));
     //      die();
     //      // echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($data));
     // }
}
