<?php
    $host = "cssrvlab01.utep.edu";
    $db = "amnavarro2_f22_db";
    $username = "amnavarro2"; 
    $password = "*utep2022!"; 
    $chrs = "utf8mb4"; 
    $atrr = "mysql:host = $host; dbname=$db; charset=$chrs";
    $opts = [ 
    PDO::ATTR_ERRMODE               =>     PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    =>     PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      =>     false, 
];

  ?>