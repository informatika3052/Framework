<?php


namespace App\Controllers;




header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");


class Home extends BaseController
{
	protected $mRequest;
	public function __construct()
	{
		$this->mRequest = service("request");
	}
	public function index()
	{
		session();
		$data = [

			'title' => 'D Garage',
			'validation' =>  \Config\Services::validation(),
		];
		return view('login/login', $data);
	}

	public function validateLogin()
	{
		if (!$this->validate([
			'email' => [
				'rules' => 'required|valid_email',
				'errors' => [
					'required' => 'The {field}  field is required',
					'valid_email' => 'Your Email is not valid'
				]
			],
			'password' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'The password is required',
				]
			]
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to(base_url('home'))->withInput()->with('validation', $validation);
		}

		// $this->_checkLogin();
		$db      = \Config\Database::connect();
		$builder = $db->table('user');
		$email =  $this->mRequest->getVar('email');
		$password = $this->mRequest->getVar('password');
		$query = $builder->getWhere(['email' => $email])->getRowArray();
		// dd($query['is_active']);
		// jika ada user nya 
		if ($query) {
			// cek password 
			if ($password == $query['password']) {
				$data = [
					'email' => $query['email'],
					'name' => $query['name']
				];
				session()->set($data);
				return redirect()->to(base_url('master'));
			} else {
				session()->setFlashdata('pesan', 'Wrong password!');
				return redirect()->to(base_url('home'))->withInput();
			}
		} else {
			session()->setFlashdata('pesan', 'Email is not registred !');
			return redirect()->to(base_url('home'))->withInput();
		}
	}
	public function logout()
	{
		session()->remove('email');
		session()->setFlashdata('pesan', 'You has been logout');
		return redirect()->to(base_url('home'));
	}
}
