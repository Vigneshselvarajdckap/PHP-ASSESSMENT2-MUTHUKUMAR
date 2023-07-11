<?php
// echo "hear";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="views/logoImages/MySQL-Logo.png">
    <link rel="stylesheet" href="models/style.css">
</head>
<body>
    <div>
    <form action="/inse" method="post">
        <select name="InDB">
            <option>SELECT DB</option>
            <?php foreach ($indbName as $values):?>
                <option><?php echo $values["Database"]?></option>
            <?php endforeach;?>
        </select>
        <button>Select</button>
        </form>
    </div>
</body>
</html>