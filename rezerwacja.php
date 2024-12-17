<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "baza_4ti1"; 
        $conn = new mysqli($servername, $username, $password, $database);
    
        if ($conn->connect_error) {
            die("Błąd połączenia: " . $conn->connect_error);
        }

?>