<?php
require("json.php");
$db = "notes"; 
// Db
$user = "root"; 
// User db
$password = ""; 
// Senha db

//Conexão con criada
$con = new PDO("mysql:host=localhost;dbname={$db}", $user, $password);