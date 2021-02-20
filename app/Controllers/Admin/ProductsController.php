<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Product;
use CodeIgniter\HTTP\Request;

class ProductsController extends BaseController {

    private $model;
    public function __construct()
    {
        helper(['app', 'form', 'factory']); 
        $this->model = new Product();
       
    }

    public function index () {

        return view('dashboard/products', ["products" => getProducts()]);
    }
    
    public function get ($id) {

        $product = getOne($this->model, $id);

        return view("product/details", ["product" => $product]);
    }

    public function checkout ($id) {

        $product = getOne($this->model, $id);

        return view("product/checkout", ["product" => $product]);
    }

    public function store () {

        $file = $this->request->getFile("image");

        $data = [];

        if ($file) {
          $image = uploadImage($file, "./assets/images/productImages/");
        }

        $data = [
            "name" => $this->request->getPost("productName"),
            "units_available" => $this->request->getPost("units"),
            "cost_per_unit" => $this->request->getPost("cost"),
            "description" => $this->request->getPost("description"),
            "image" => $image
        ];

        // dd($data);
        return insert($this->model, $data);

    } 
    
    public function destroy ($id) {

        return deleteOne($this->model, $id);
    }
}