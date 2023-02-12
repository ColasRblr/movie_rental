
<?php

require_once '../sql/config.php';

$id = $_POST['id'];
$name = $_POST['client_name'];
$date = $_POST['date'];
$location = $_POST['location'];
$locationDuration = json_encode($location);

$clients = $bdd->query('SELECT MAX(CODECLI) as ID FROM CLIENTS');
$clientMax = $clients->fetch();
$newCode = $clientMax['ID'] + 1;
echo $newCode;

$new_client = $bdd->prepare('INSERT INTO CLIENTS (NOMCLI, CODECLI) VALUES(?, ?)');
$new_client->execute(array($name, $newCode));

$new_location = $bdd->prepare('INSERT INTO LOCATIONS (CODECLI, CODEFILM, DATEDEBUT, DUREE) VALUES (?, ?, ?, ?)');
$new_location->execute(array($newCode, $id, $date, $locationDuration));
