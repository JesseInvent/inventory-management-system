<?php namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model {

    protected $table = "customers";
    protected $primaryKey = "id";

    protected $allowedFields = ["id", "name", "email", "mobile_number", "contact_number", "address"];
    protected $useTimestamps = true;

    protected $createdField  = "created_at";
    protected $updatedField  = 'updated_at';
}