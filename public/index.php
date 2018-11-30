<?php require_once("../includes/db_connection.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php require_once("addTown.php") ?>

<?php
// CORS ACCEPTANCE
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

// SUPPRESS WARNINGS
error_reporting(E_ERROR | E_PARSE);

?>


