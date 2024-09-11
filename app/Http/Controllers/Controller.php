<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// index()

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

$sql = "SELECT * FROM `movies`";
$result= query(sql);

$data = [];
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 risultati";
}

function index($data) {
    foreach($data as $row) {
        echo "ID: " ,['id'],  " - Titolo: ", $row['title'], " - Titolo originale ", $row['original_title']," - Nazionalità " , $row['nationality']," - Anno di uscita", $row['date']," - Voto ", $row['vote'], "<br>";
    }
} 


// " - Titolo: ", $row['title'] , " - Titolo originale " , $row['original_title'] , " - Nazionalità " , $row['nationality'] , " - Anno di uscita" $row['date'], " - Voto ", $row['vote'], "<br>";