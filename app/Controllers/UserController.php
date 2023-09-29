<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\KelasModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{

    public $kelasModel;
    public $userModel;

    public function __construct()
    {
        $this->kelasModel = new KelasModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data =[
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
        // key        value
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        return view('profile', $data);
    }

    public function store()
    {

        // Validasi input
        if(!$this->validate([

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'npm' => [
                'rules' => 'required|is_unique[user.npm]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);

        }


        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),   
        ]);

        return redirect()->to(base_url('/user'));

        // $data = [
        //     'nama' => $this->request->getVar('nama'),
        //     'kelas' => $this->request->getVar('kelas'),
        //     'npm' => $this->request->getVar('npm'),   
        // ];
            
        // return view ('profile', $data);
    }

    public function create(){

        $kelas = $this->kelasModel->getKelas();
        
        $data = [
            'kelas' => $kelas,
            'validation' => \Config\Services::validation(),
            'title' => 'Create_User'
        ];

        return view('create_user', $data);
    }
}
