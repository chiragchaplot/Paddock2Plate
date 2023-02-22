<?php
// Include the database connection script
require_once('db_connection.php');

// Get the list of cow IDs and cow names from the cowDetails table
$query = "SELECT cowid, cowname FROM cowDetails";
$result = mysqli_query($conn, $query);

$cowDetails = array();
while ($row = mysqli_fetch_assoc($result)) {
    $cowDetails[] = $row;
}

// Get the list of cow IDs and cow names from the other table
$query = "SELECT cowid, cowname FROM otherTable";
$result = mysqli_query($conn, $query);

$otherTable = array();
while ($row = mysqli_fetch_assoc($result)) {
    $otherTable[] = $row;
}

// Check if each cow ID and cow name in the cowDetails table is present in the other table
foreach ($cowDetails as $cow) {
    $found = false;
    foreach ($otherTable as $otherCow) {
        if ($cow['cowid'] == $otherCow['cowid']) {
            $found = true;
            break;
        }
    }
    
    // If the cow is not found in the other table, add it
    if (!$found) {
        $query = "INSERT INTO otherTable (cowid, cowname) VALUES ('".$cow['cowid']."', '".$cow['cowname']."')";
        mysqli_query($conn, $query);
    }
}

// Get the full list of cow IDs and cow names from the other table
$query = "SELECT cowid, cowname FROM otherTable";
$result = mysqli_query($conn, $query);

$fullList = array();
while ($row = mysqli_fetch_assoc($result)) {
    $fullList[] = $row;
}

// Send the full list back to the sender with a 200 status message
http_response_code(200);
header('Content-Type: application/json');
echo json_encode($fullList);
?>
