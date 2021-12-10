<?php

namespace App\Controllers;

use App\Models\BlogModel;
 
class Blog extends BaseController
{

    function post($slug){

        $model = new blogModel();

        $data['post'] = $model->getPosts($slug);

       echo view('templates/header', $data);
       echo view('/blog/post');
       echo view('templates/footer');
    }

    function create(){
        helper('form'); //library from CodeIgniter
        //lets us use code validators and save method and url_title

        $model = new blogModel();

        if(!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required',
            'tag' => 'required',
            'tag2' => 'required',
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/png]',
                'max_size[image, 8000000]',
            ],
            'author' => 'required'
        ])){
            echo view('templates/header');
            echo view('blog/create');
            echo view('templates/footer');
        }
        else{

            if ($imagefile = $this->request->getFile('image')) {
                if ($imagefile->isValid() && ! $imagefile->hasMoved()) {
                    $newName = $imagefile->getRandomName();
                    $imagefile->move('app/images/', $newName);
                }   
            }

            $model->save(
                [
                    'title' => $this->request->getVar('title'),
                    'body' => $this->request->getVar('body'),
                    'tag' => $this->request->getVar('tag'),
                    'tag2' => $this->request->getVar('tag2'),
                    'image' => $newName,
                    'author' => $this->request->getVar('author'),
                    'slug' => $this->request->getVar('title') //URL Friendly format
                ]
            );
            $session = \Config\Services::session();
            $session->setFlashdata('success','New post was created!');
           
            return redirect()->to('/');
        }


    }
 
}