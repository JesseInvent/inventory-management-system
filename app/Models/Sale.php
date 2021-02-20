<?php namespace App\Models;

use CodeIgniter\Model;

class Sale extends Model {

    protected $table = "sales";
    protected $primaryKey = "id";

    protected $allowedFields = ["id", "customer_id", "product_id", "units_sold", "price_per_unit", "amount_spent"];
    protected $useTimestamps = true;

    protected $createdField  = "created_at";
    protected $updatedField  = 'updated_at';
}