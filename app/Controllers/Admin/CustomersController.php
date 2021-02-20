<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Customer;

class CustomersController extends BaseController {

    private $model; 
    public function __construct()
    {
        helper(['app', 'factory' ,'form']);
        $this->model = new Customer();
    }

    public function index () {

        return view('dashboard/customers', ["customers" => getCustomers()]);
    }

    public function store () {
        
        $data = [
            "name" => $this->request->getPost("name"),
            "email" => $this->request->getPost("email"),
            "mobile_number" => $this->request->getPost("mobile_number"),
            "contact_number" => $this->request->getPost("contact_number"),
            "address" => $this->request->getPost("address"),
        ];

        return insert($this->model, $data);
    } 

    public function getCustomers () {
        return getAll($this->model);
    }
    
    public function destroy ($id) {

        return deleteOne($this->model, $id);
    }
}