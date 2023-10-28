<?php

namespace App\Models;

class PostModel extends Model 
{

    protected $table ='post';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $retunType        = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['category', 'autor', 'title', 'content', 'status', 'profile'];

    protected $UseTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createField = 'create_at';
    protected $updateField = 'update_at';
    protected $delectedField = 'delected_at';
}