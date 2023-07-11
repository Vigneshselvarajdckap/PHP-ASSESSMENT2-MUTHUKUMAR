<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <title>Create Table</title>
    <link rel="icon" href="views/logoImages/MySQL-Logo.png">
    <link rel="stylesheet" href="models/style.css">
</head>
<body>
    <div class="logo">
    <img class="imgs" src="views/logoImages/MySQL-Logo.png">
    </div>
    <div class="main">
        <div class="dbShow">
            <h1><span>Create</span>Table</h1>
            <form action="/sTable" method="post">
        <!-- fetch all db names foreach loop method -->
                <select name="DBvalues" class="dbnae">
                        <option>Select DB</option>
                    <?php foreach ($values as $value):?>
                        <option><?php echo $value["Database"]?></option>
                    <?php endforeach;?>
                </select><br>
        <!-- Create table name input -->
                <input type="text" name="tableName" placeholder="Table Name" class="Tn"><br>

        <!-- Create Column name input -->
                <div class="column">
                    <input type="text" placeholder="Column Name" name="columnName[]">
                    <select name="Datatype[]"><option>int</option><option>varchar(255)</option><option>text</option></select><br>
                </div>
        <!-- addition column div -->
                <div class="addcolum">

                </div>
        <!-- click this Add Cloumn button Create input for columns input and datatype select tag
            i'll write jquery javascript code in show additionl Cloumn name input and datatype select tags in createTable.js-->
                    <button type="button" class="addColumn" onclick="add_column()">Add column</button>
        <!-- Click this save button table create and insert values store in the selective database -->            
                    <button class="btnSave">Save</button>
            </form>
        </div>
    </div>
    <a href="/"><button class="backbtn">Create Another DB</button></a>

    <script type="text/javascript">

    function add_column(){
        var count= 1;
        count++;
        $(".addcolum").append('<div class="my_box" id="box_loop_'+count+'"><div class="field_box"><input type="textbox" name="columnName[]" id="name" placeholder="Column Name"><select name="Datatype[]"><option>int</option><option>varchar(255)</option><option>text</option></select></div>');
    }
    </script>
</body>
</html>