<?php

require_once 'models/userModel.php';

class UserController {

    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function view()
    {
        require "views/db.php";
    }

    public function create() 
    {
        $this->userModel->dbcreate($_POST);
    }
    public function dbShow()
    {
       $values = $this->userModel->showDatabase();
       require "views/show.php";
    }

    public function StoreTable($alldata)
    {
        $dbName = $alldata['DBvalues'];
        $tableName = $alldata["tableName"];
        $columnName = $alldata["columnName"];
        $datatype = $alldata["Datatype"];
        $this->userModel->dbTable($dbName,$tableName,$columnName,$datatype);
        header('location:/');
    }
    public function DataInsert()
    {
        $indbName = $this->userModel->DatasInsert();
        require "views/insert.php";
    }

    public function showTab($data)
    {
        $dbnames = $data['InDB'];
        $_SESSION['DB']=$dbnames;
        $tableName = $this->userModel->stab($dbnames);
        require "views/insertShowTable.php";
    }

    public function showColmun($col)
    {
        // var_dump($_SESSION['DB']);
        $table = $col['tables'];
        $colm = $this->userModel->ShowColmun($table);    
        // var_dump($colm);
        // var_dump($table);
    }
}