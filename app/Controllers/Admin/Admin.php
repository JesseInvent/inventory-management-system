<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Auth;
use App\Models\Admin as ModelsAdmin;

class Admin extends BaseController {

    private $model;

    public function __construct()
    {
        $this->model = new ModelsAdmin();
        helper(['app', 'factory']);
    }

    public function index () {

        return view('dashboard/index');
    }

    public function store () {
      
        // dd($this->request->getPost())
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        if ($username && $password) {
            $data = [
                "username" => $username,
                "password" => hashPassword($password),
            ];

            insert($this->model, $data);

            return Auth::attempt($username, $password);

        } else {

            return redirect()->back();

        }        
    } 

    public function login () {
        
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");
        return Auth::attempt($username, $password);

    }
    
    public function destroy () {
        return Auth::logout();
    }
}