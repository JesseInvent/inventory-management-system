<?php namespace App\Models;

use CodeIgniter\Model;

class Order extends Model {

    protected $table = "orders";
    protected $primaryKey = "id";

    protected $allowedFields = ["id", "product_id", "units", "customer_name", "customer_email", "customer_address", "paid_status", "confirmation_status"];
    protected $useTimestamps = true;

    protected $createdField  = "created_at";
    protected $updatedField  = 'updated_at';
}