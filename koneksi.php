<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=crudata","root","");
    // echo "wow";
} catch (PDOException $e) {
    echo $e->getMessage(); 
}
?>