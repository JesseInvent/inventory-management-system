<?php namespace App\Models;

use CodeIgniter\Model;

class Product extends Model {

    protected $table = "products";
    protected $primaryKey = "id";

    protected $allowedFields = ["id", "name", "image", "price", "units_available", "cost_per_unit", "description"];
    protected $useTimestamps = true;

    protected $createdField  = "created_at";
    protected $updatedField  = 'updated_at';
}