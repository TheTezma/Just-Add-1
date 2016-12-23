<?php
include '../scripts/dbconnect.php';

$Highscore = $_GET['highscore'];

$NewHighscore = $Connect -> query("INSERT INTO leaderboard (score) VALUES ($Highscore)");

echo $Highscore;

?>