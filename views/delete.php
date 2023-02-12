<?php
require '../sql/config.php';

$id = $_GET['id'];

echo $id;

$bdd->query("DELETE FROM FILMS WHERE CODEFILM = $id");

header('location: ./read.php');
