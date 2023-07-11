<?php
    $value = $_SESSION['value'];
    // var_dump(($value[1]["Field"]));
    $arr = [];

    foreach ($value as $key => $res) {
        array_push($arr,$res["Field"]);
    }
    $_SESSION['colms'] = $arr;
?>

<html lang="en">
<head>
    <link rel="icon" href="views/logoImages/MySQL-Logo.png">
    <link rel="stylesheet" href="models/style.css">
</head>
<body>
<h1 class="createRow"><span>Add</span>Row</h1>
    <div class="inpuss">
    <form action="/data" method="post">
<!-- <?php var_dump( $_SESSION['colms']);?> -->
    <div class="inp">
        <?php foreach ($_SESSION['colms'] as $values):?>
            <div class="inp1">
            <input type="text" placeholder="<?php echo $values;?>" >   
            </div>
         <?php endforeach;?>
    </div>
    <button class="dataAdd">Add</button>
    </form>
    </div>
    <a href="/"><button class="colbtns">Create Another DB</button></a>
</body>
</html>