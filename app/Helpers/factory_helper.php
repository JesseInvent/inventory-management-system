<?php

use App\Models\Customer;
use CodeIgniter\Model;

function insert (Model $model, array $data) {

  $model->save($data);
  return redirectBackWithMsg("success", "Insert Operation successful");
}

function getAll(Model $model) {
  return $model->findAll();
}

function getOne(Model $model, $id) {
  return $model->find($id);
}

// function deleteOne(Model $model, $id) {
//   $model->delete($id);
// }