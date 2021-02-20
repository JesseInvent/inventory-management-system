<?php namespace App\Models;

use CodeIgniter\Model;

class Purchase extends Model {

    protected $table = "purchases";
    protected $primaryKey = "id";

    protected $allowedFields = ["id", "supplier_id", "product_id", "units_bought", "price_per_unit", "amount_spent"];
    protected $useTimestamps = true;

    protected $createdField  = "created_at";
    protected $updatedField  = 'updated_at';
}