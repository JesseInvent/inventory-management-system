<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Sale;

class SalesController extends BaseController {


    private $model;

    public function __construct()
    {
        helper(['app', 'form', 'factory']);
        $this->model = new Sale();
    }

    public function index () {

        $data = [
            "customers" => getCustomers(),
            "products" => getProducts(),
            "sales" => getAllSales(),
        ];
        return view('dashboard/sales', ["data" => $data]);
    }

    public function store () {
        
        $data = [
            "customer_id" => $this->request->getPost("customer"),
            "product_id" => $this->request->getPost("product"),
            "units_sold" => $this->request->getPost("units"),
            "price_per_unit" => $this->request->getPost("price"),
            "amount_spent" =>  $this->request->getPost("units") * $this->request->getPost("price"),
        ];

        return insert($this->model, $data);
    } 
    
      
    public function destroy ($id) {
        return deleteOne($this->model, $id);
    }
}