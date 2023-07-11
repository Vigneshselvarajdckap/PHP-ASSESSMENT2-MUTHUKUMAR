<?php

require "router.php";
session_start();
$router = new routers();

$router->get("/","view");
$router->post("/store","create");
$router->get("/show?","dbShow");
$router->post("/sTable","storeTable");
$router->post("/insert","dataInsert");
$router->post("/inse","tabName");
$router->post("/inCol","insertColumn");



$router->check($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);