<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BlogModel; 
use \Config\Services\pager;


class allBlogs_Controller extends Controller
{
    public function index()
    {

        $model = new BlogModel();

        $data = [
            'slug' => $model->orderBy('id','DESC')->paginate(6),
            'pager' => $model->pager
        ];

        echo view('templates/header', $data);
        echo view('pages/allBlogs');
        echo view('templates/footer');
    } 
}