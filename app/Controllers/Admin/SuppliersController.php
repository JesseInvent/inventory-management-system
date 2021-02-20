<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Supplier;

class SuppliersController extends BaseController {

    private $model;

    public function __construct()
    {
        helper(['app', 'form', 'factory']); 
        $this->model =  new Supplier();

    }

    public function index () {
        return view('dashboard/suppliers', ['suppliers' => getSuppliers()]);
    }

    public function store () {

        $data = [
            "name" => $this->request->getPost("productName"),
            "email" => $this->request->getPost("email"),
            "mobile_number" => $this->request->getPost("mobile_number"),
            "contact_number" => $this->request->getPost("contact_number"),
            "address" => $this->request->getPost("address"),
        ];

        return insert($this->model, $data);

    } 
    
      
    public function destroy ($id) {

        return deleteOne($this->model, $id);
    }
}