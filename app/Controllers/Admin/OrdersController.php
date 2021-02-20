<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Order;

class OrdersController extends BaseController {

    private $model;

    public function __construct()
    {
        $this->model = new Order();
        helper(['app', "factory"]);
    }

    public function index () {
        $orders = getOrders();
        return view('dashboard/orders', ["orders" => $orders]);
    }

    public function store () {
        
        $rules = [
            "name" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Please provide your name"
                ]
            ],

            "email" => [
                "rules" => "required|valid_email",
                "errors" => [
                    "required" => "Please provide a valid email",
                    "valid_email" => "Please provide a valid email address"
                ]
            ],

            "location" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Please provide your current location"
                ]
            ],

            "units" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Please provide units of product needed"
                ]
            ]

        ];


        if ($this->validate($rules)) {
            # code...
            $data = [
                "product_id" => $this->request->getPost("product_id"),
                "units" => $this->request->getPost("units"),
                "customer_name" => $this->request->getPost("name"),
                "customer_email" => $this->request->getPost("email"),
                "customer_address" => $this->request->getPost("location")
            ]; 

            $msg = "Your order has successfully been sent, we will contact you. <br> <a href='/'>Home</a>";
            
            $this->model->save($data);

            //send email

            //
            return redirect()->back()->with("successMessage", $msg);

        } else {

            $errors = array_values($this->validator->getErrors());
            return redirect()->back()->with("errorMessage", implode(", ", $errors))->withInput();
            
            // return redirectBackWithMsg("errorMessage", implode(",", $errors));

        }

        // dd($this->request->getPost());
    } 

    public function confirm ($id) {

        $data = [
            "confirmation_status" => true
        ];

        confirmOrder($id);

        return redirect()->back();
    }
    
       
    public function destroy ($id) {

        return deleteOne($this->model, $id);
    }
}