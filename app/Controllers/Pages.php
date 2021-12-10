<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BlogModel; 

class Pages extends Controller
{
    public function index()
    {
        $model = new BlogModel();
        $data['news'] = $model->getPosts();

        echo view('templates/header', $data);
        echo view('pages/home');
        echo view('templates/footer');
    }

    function showMe($page = 'home'){
        echo view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
    }
 
}