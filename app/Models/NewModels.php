<?php

namespace App\Models;

use CodeIgniter\Model;

class NewModels extends Model
{
    protected $table = 'news';
    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function getById($id=false){
        if ($id===false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    protected $allowedFields = ['title', 'slug', 'body'];
}
