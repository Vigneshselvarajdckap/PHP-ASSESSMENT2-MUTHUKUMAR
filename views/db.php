<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Database</title>
    <link rel="icon" href="views/logoImages/MySQL-Logo.png">
    <link rel="stylesheet" href="models/style.css">
</head>
<body>
    <div class="logo">
        <img class="imgs" src="views/logoImages/MySQL-Logo.png">
    </div>
    <div class="dbCreate">
    <!-- Click Add Database button show this div content -->
        <h1 class="createDB"><span>Create</span>Database</h1>
        <form action="/store" method="post">
            <input type="text" name="dbName" placeholder="DB Name">
            <button>Create</button>
        </form>

    </div>
    <!-- Click Add Database button toggle in dbname input box -->
        <button class="addDb">Add Database</button><br>
        <div class="showDatabase">
    <!-- Click Add Table button show select->database name and  create tablename and create column name  -->
            <form action="/show">
                <button class="showDbs">Add Table</button>
            </form>
        </div>
        
        <div class="insertData">
            <form action="/insert" method="post">
                <button class="insertBtn">Add Row</button>
            </form>
        </div>
    <script src="models/db.js"></script>
</body>
</html>