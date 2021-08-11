<?php

namespace App\Controllers;

use App\Models\Customer_model;
use CodeIgniter\Database\Query;


class History extends BaseController
{
     protected $mRequest;
     public function __construct()
     {
          $this->mRequest = service("request");
          $this->Customer_model = new Customer_model();
     }

     // Method yang berfungsi untuk menampilkan data berdasarkan dari id SPK
     public function index()
     {
          session();
          if (is_null(session()->get('login'))) {
               return redirect()->to(base_url('/home'));
          }
          $dataSpk = $this->Customer_model->findAll();
          $nameUser = session()->get('name');

          $data = [
               'title' => 'Data Service',
               'user' => $nameUser,
               'dataSpk' => $dataSpk
          ];
          return view('history/data_service', $data);
     }
     public function historySearch()
     {
          $dataSpk = $this->Customer_model->findAll();
          $nameUser = session()->get('name');
          $idSpk = $this->mRequest->getVar('id_spk');
          // dd($idSpk);
          $db      = \Config\Database::connect();
          $builder = $db->table('spk');
          $builder->select('*');
          $builder->join('req_order', 'req_order.id_spk= spk.id');
          $builder->like('id', $idSpk);
          $query = $builder->get()->getRowArray();
          // dd($query);
          $totalAkhir = $query['total'] + $query['akumulasi_total'];
          // dd($totalAkhir);

          //jika tidak request part ,maka jalankan baris dibawah  
          if (is_null($query)) {
               $dataSpkByid = $this->Customer_model->find($idSpk);
               // dd($dataSpkByid);

               $data = [
                    'title' => 'Data Service',
                    'user' => $nameUser,
                    'query' => $query,
                    'dataSpk' => $dataSpk,
                    'dataSpkByid' => $dataSpkByid,
                    'totalAkhir' => $totalAkhir
               ];
               return view('history/data_service_by_id',  $data);
          }
          $data = [
               'title' => 'Data Service',
               'user' => $nameUser,
               'query' => $query,
               'dataSpk' => $dataSpk,
               'totalAkhir' => $totalAkhir
          ];

          return view('history/data_service', $data);
     }
}
