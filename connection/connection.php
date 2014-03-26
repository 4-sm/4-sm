<?php 
        $dsn = "mysql:host=localhost;dbname=4ws";
        $root = "root";
        $pass = "";
        
        $conn = new PDO($dsn, $root, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   