<?php require_once("../includes/db_connection.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php require_once("../includes/headers.php") ?>

<?php
$data = json_decode(file_get_contents('php://input'),true);

insertTown($connection,$data);

