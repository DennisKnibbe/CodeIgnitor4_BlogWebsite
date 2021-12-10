<?php 

namespace App\Models;

use CodeIgniter\Model;
 
class blogModel extends Model{
    
    protected $table = 'posts';
    protected $allowedFields = ['id','slug','title','tag','tag2', 'image', 'author', 'body']; 
    //used to protect our variables and restrict access to a few variables
     
    public function getPosts($id = null)
    {
        if(!$id){ //no slug then post all blogs
                    //We are going to assume that all new blogs posted will
                    //be the newest blog so we put newest first
            return $this->orderBy('date','DESC')->findAll();
        }

        return $this->asArray() //if slug then post 1st blog
                    ->where(['id' => $id])
                    ->findAll();
    }
 
}