<?php

namespace App\Controllers;

use App\Models\Customer_model;

class History extends BaseController
{
     protected $mRequest;
     public function __construct()
     {
          $this->mRequest = service("request");
          $this->Customer_model = new Customer_model();
     }
     public function index()
     {
          session();
          if (is_null(session()->get('login'))) {
               return redirect()->to(base_url('/home'));
          }
          $dataSpk = $this->Customer_model->findAll();
          // dd($dataSpk);
          $nameUser = session()->get('name');

          $data = [
               'title' => 'Data Service',
               'user' => $nameUser,
               // 'query' => $query,
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
          if (is_null($query)) {
               $dataSpkByid = $this->Customer_model->find($idSpk);
               // dd($dataSpkByid);

               $data = [
                    'title' => 'Data Service',
                    'user' => $nameUser,
                    'query' => $query,
                    'dataSpk' => $dataSpk,
                    'dataSpkByid' => $dataSpkByid
               ];
               return view('history/data_service_by_id',  $data);
          }
          $data = [
               'title' => 'Data Service',
               'user' => $nameUser,
               'query' => $query,
               'dataSpk' => $dataSpk,
               // 'dataSpkByid' => $dataSpkByid
          ];
          // $data = [
          //      'query' => $query,
          //      'created_at' => $query['created_at'],
          //      'plat_number' => $query['plat_number'],
          //      'type_kendaraan' => $query['type_kendaraan'],
          //      'cust_name' => $query['cust_name'],
          //      'cust_address' => $query['cust_address'],
          //      'ser_advisor' => $query['ser_advisor'],
          //      'mekanik' => $query['mekanik'],
          //      'desc1' => $query['desc1'],
          //      'desc2' => $query['desc2'],
          //      'part1' => $query['part1'],
          //      'part2' => $query['part2'],
          //      'part3' => $query['part3'],
          //      'akunulasi_total' => $query['akumulasi_total'],
          // ];
          // dd($data);
          // session()->set($data['query']);
          return view('history/data_service', $data);
     }
}

// value="<?= $query['created_at']; 