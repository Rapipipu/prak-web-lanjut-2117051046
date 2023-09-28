<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
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


        $userModel= new UserModel();

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),   
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),   
        ];
            
        return view ('profile', $data);
    }

    public function create(){
        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C'
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D'
            ],
        ];
        
        $data = [
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()
        ];

        return view('create_user', $data);
    }
}
