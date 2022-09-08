<?php

include '../../includes/database.php';

$results = $discs;

$genre = $_GET['genre'] ?? '';


if($genre){
    $results = [];
    foreach($discs as $disc){
        if($disc['genre'] === $genre) $results[] = $disc;
    }
}
 
header('Content-Type: application/json');
echo json_encode($results); 