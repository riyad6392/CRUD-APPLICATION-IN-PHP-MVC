<?php

require_once 'CrudModel.php';

class CrudController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function getAllEmployees() {

        return $this->model->getAllEmployees();
    }

    public function getAllEmploy($id) {
        
        return $this->model->getAllEmploy($id);
    }

    public function updateEmployee($id, $name, $email, $designation, $address) {
        return $this->model->updateEmployee($id, $name, $email, $designation, $address);
    }

     public function createEmployee($name, $email, $designation, $address,$id,$salary,$status) {
        return $this->model->createEmployee($name, $email, $designation, $address,$id,$salary,$status);
    }


    public function deleteEmployee($id) {
        return $this->model->deleteEmployee($id);
    }
}

?>