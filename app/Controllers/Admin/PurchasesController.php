<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Purchase;

class PurchasesController extends BaseController {

    private $model;

    public function __construct()
    {
        helper(['app', 'factory', 'form']);
        $this->model = new Purchase();
    }

    public function index () {

        $data = [
            "products" => getProducts(),
            "suppliers" => getSuppliers(),
            "purchases" => getAllPurchases()
        ];

        return view('dashboard/purchases', ["data" => $data]);
    }

    public function store () {

        $data = [
            "supplier_id" => $this->request->getPost("supplier"),
            "product_id" => $this->request->getPost("product"),
            "units_bought" => $this->request->getPost("units"),
            "price_per_unit" => $this->request->getPost("price"),
            "amount_spent" =>  $this->request->getPost("units") * $this->request->getPost("price"),
        ];

        return insert($this->model, $data);
        
    } 
     
    public function destroy ($id) {
        return deleteOne($this->model, $id);
    }
}