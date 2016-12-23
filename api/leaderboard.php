<?php
include '../scripts/dbconnect.php';

$GetTopQuery = $Connect -> query("SELECT * FROM leaderboard ORDER BY score DESC");

$Top = array();
while ($array = mysqli_fetch_row($GetTopQuery)) {
    $Top[] = $array;
}
echo json_encode($Top);
//json_encode()
?>