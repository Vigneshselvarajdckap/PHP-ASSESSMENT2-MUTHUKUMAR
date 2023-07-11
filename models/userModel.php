<?php

require "connection.php";

class UserModel extends Database
{
    // dynamicaly createing Database  
    public function dbcreate($data) 
    {
        $servername = "localhost";
        $username = "root";
        $password = "welcome";
        $dbname = $data['dbName'];

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        // Create database
        $sql = "CREATE DATABASE $dbname";
        if ($conn->query($sql) === TRUE) {
          echo "Database created successfully";
        } else {
          echo "Error creating database: " . $conn->error;
        }
        
        $conn->close();

            header("location:/");
    }

    public function showDatabase()
    {
        // show all db names in select button
        $sqlQuery = "SHOW DATABASES";
        $values = $this->db->query($sqlQuery);
        $allvalues = $values->fetchAll();

        return $allvalues;
    }

    public function dbTable($dbName,$tableName,$columnName,$datatype)
    {
        // create table functionality Connection
        try
        {
            $dbOne = new PDO
            (
                "mysql:host=127.0.0.1;dbname=$dbName",
                'root',
                'welcome'
            );
        }
        catch(PDOException $e)
        {
            die("connection failed");
        }

        $statement = $dbOne->prepare("CREATE TABLE $tableName(id int auto_increment,primary key (id));");
        $statement->execute();
        for ($i=0; $i <count($columnName); $i++) { 
            $dbOne->query(" USE $dbName; ALTER TABLE $tableName ADD COLUMN $columnName[$i] $datatype[$i]");
        }
    }

    public function DatasInsert()
    {
        // echo "here";
        $sqlQuerys = "SHOW DATABASES";
        $valuess = $this->db->query($sqlQuerys);
        $allvaluess = $valuess->fetchAll();
        return $allvaluess;
    }

    public function stab($Name)
    {
        $sqlQuerysTab = "SHOW TABLES FROM $Name";
        $valuessTab = $this->db->query($sqlQuerysTab);
        $allvaluessTab = $valuessTab->fetchAll();

        return $allvaluessTab;
    }

    public function ShowColmun($name)
    {
        $ses = $_SESSION['DB'];

        $dbOne = new PDO
            (
                "mysql:host=127.0.0.1;dbname=".$ses,
                'root',
                'welcome'
            );
        // var_dump(($ses))
        $sqlQuerysCol = "SHOW COLUMNS FROM $name";
        // var_dump($sqlQuerysCol);
        $valuessCol = $dbOne->query($sqlQuerysCol);
        $allvaluessCol = $valuessCol->fetchAll();
        // return $allvaluessCol;
        $_SESSION['value'] = $allvaluessCol;
        require "views/insertShowColumn.php";


    }
}

