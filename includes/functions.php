<?php require_once("../includes/headers.php") ?>

<?php
function insertTown($connection, $data) {
    $name = mysqli_real_escape_string($connection,$data['townName']);
    $state = mysqli_real_escape_string($connection,$data['townState']);
    $timezone = mysqli_real_escape_string($connection,$data['timezoneOffset']);
    $lat = mysqli_real_escape_string($connection,$data['latitude']);
    $lng = mysqli_real_escape_string($connection,$data['longitude']);

    $query  = "INSERT INTO towns (";
    $query .= " name, state, timezone, lat, lng";
    $query .= ") VALUES (";
    $query .= " '{$name}','{$state}'," . $timezone . "," . $lat . "," . $lng;
    $query .= ")";

    $result = mysqli_query($connection, $query);
    handleQueryResult($result);
}

function getRandomTown($connection) {
    $town  = array();
    $query = "SELECT * FROM towns ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($connection, $query);
//    handleQueryResult($result);
    if ($result->num_rows > 0) {
        // output data of each row
        while($column = $result->fetch_assoc()) {
            $town['townName'] = $column['name'];
            $town['townState'] = $column['state'];
            $town['timezoneOffset'] = $column['timezone'];
            $town['latitude'] = $column['lat'];
            $town['longitude'] = $column['lng'];
        }
        echo json_encode($town);
    } else {
        echo "No Results";
    }
}


function getTowns($connection) {
    $town = array();
    $towns  = array();
    $query = "SELECT * FROM towns";

    $result = mysqli_query($connection, $query);
//    handleQueryResult($result);
    if ($result->num_rows > 0) {
        // output data of each row
        while($column = $result->fetch_assoc()) {
            $town['townName'] = $column['name'];
            $town['townState'] = $column['state'];
            $town['timezoneOffset'] = $column['timezone'];
            $town['latitude'] = $column['lat'];
            $town['longitude'] = $column['lng'];

            array_push($towns,$town);
            $town = array();
        }
        echo json_encode($towns);
    } else {
        echo "No Results";
    }
}


function handleQueryResult($result) {
    if($result){
        // Success
        echo 'Success';

    } else {
        // Failure
        echo 'Failure: ';
    }
}