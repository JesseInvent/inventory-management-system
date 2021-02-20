<?php

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Supplier;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Model;
use Config\Database;

function createLink (string $uri) {
    return base_url($uri);
}

function resizeProductImage(string $path) {

    // unlink($path);
    $image = Config\Services::image()
            ->WithFile($path)
            ->reorient()
            ->resize(1200, 800, false, '')
            ->save($path);
    return $path;
}

function uploadImage($file, $path) {

    $fileName = 'INVENTORY_IMG_'.$file->getRandomName();

    if (!file_exists($path)) {
        mkdir($path);
    }
        
    if($file->move($path, $fileName)) {
     resizeProductImage($path.''.$fileName);
       return $fileName;
    } //
}

function asset(string $link) {
    return base_url("assets")."/".$link;
}

function assetImage($image) {
    return base_url("assets/images/productImages")."/".$image;
}

// function dd (string $string) {
//     return die(var_dump($string));
// }

function redirectBackWithMsg(string $type, string $msg) :RedirectResponse
{
    if ($type === "success") {
        return redirect()->to($_SERVER['HTTP_REFERER'])->with("successMsg", $msg);
    } 
    
    else if($type === "error") {
        return redirect()->to($_SERVER['HTTP_REFERER'])->with("errorMsg", $msg);
    }
}


// Return Back to previous route with session message
function redirectWithMsg(string $route, string $type, string $msg) :RedirectResponse
{
    if ($type === "success") {
        return redirect()->to($route)->with("successMsg", $msg);
    } 
    
    else if($type === "error") {
        return redirect()->to($route)->with("errorMsg", $msg);
    }
}


function escapeAndCapitalize ($string) {
    return ucfirst(esc($string));
}

function createDeleteLink ($table, $id) {

    return base_url("/admin")."/".$table."/".$id."/delete";
}

function hashPassword (string $string) {

    return password_hash($string, PASSWORD_DEFAULT);
}

function comparePassword (string $password, string $hash) {
    return password_verify($password, $hash);
}

// DB 

function getCustomers () {
    $model = new Customer();
    return getAll($model);
}


function getSuppliers () {
    $model = new Supplier();
    return getAll($model);
}


function getProducts () {
    $model = new Product();
    return getAll($model);
}

function getAdmin ($username) {
    $model = new Admin();
    return $model->where(["username" =>  $username])->first();
}


function checkIfAdminAnExist() {
    $model = new Admin();
    $admin = $model->findAll();

    if (!$admin) {
        return false;
    } else {
        return true;
    }
}


function getProduct ($id) {
    $model = new Product();
    return getOne($model, $id);
}


function getSales() {
    $model = new Sale();
    return getAll($model);
}

function updateOne (Model $model, $id, array $data) {
   $model->update($id, $data);   
}

function confirmOrder ($id) {
    $model = new Order();
    return $model->update($id, ["confirmation_status" => "true"]);
}

function getPurchases () {
    $model = new Purchase();
    return getAll($model);
}

function getOrders () {
    $model = new Order();
    return getAll($model);
}


function deleteOne(Model $model, $id) {
    $model->delete($id);
    return redirectBackWithMsg("success", "Delete operation was successful");
}


function getAllPurchases() {
    $db = Database::connect();
    $builder = $db->table("purchases");
    $builder->join('products', 'products.id = purchases.product_id');
    $query = $builder->get();
    return $query->getResult();
}


function getAllSales() {
    $db = Database::connect();
    $builder = $db->table("sales");
    $builder->join('products', 'products.id = sales.product_id');
    $query = $builder->get();
    return $query->getResult();
}


function getCustomerDetails ($id, $field) {
    $model = new Customer();
    $supplier = getOne($model, $id);
    return $supplier[$field];
}


function getSupplierDetails ($id, $field) {
    $model = new Supplier();
    $supplier = getOne($model, $id);
    return $supplier[$field];
}