<?php
require_once 'pdo.php';
require_once 'helper.php';

$request = $_POST;

$product = [
    'name' => $request['name'],
    'id' => $request['name']
];

update($product);
redirectHome();
?>