<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="views/logoImages/MySQL-Logo.png">
    <link rel="stylesheet" href="models/style.css">
</head>
<body>
    <form action="/inCol" method="post">
    <select name="tables">
        <?php foreach ($tableName as $tn):?>
        <option><?php echo $tn["Tables_in_$dbnames"]?></option>
        <?php endforeach;?>
    </select>
    <button>Select</button>
    </form>
</body>
</html>