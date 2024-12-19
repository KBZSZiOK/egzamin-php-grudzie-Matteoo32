<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "baza_4tig1"; 
        $conn = new mysqli($servername, $username, $password, $database);
    
        if ($conn->connect_error) {
            die("Błąd połączenia: " . $conn->connect_error);
        }
        if (!empty($_POST['data']) && !empty($_POST['osoby']) && !empty($_POST['tel'])) {
            $data = $_POST['data'];
            $osoby = $_POST['osoby'];
            $tel = $_POST['tel'];
            $zap = "insert into rezerwacje(id, data_rez, liczba_osob, telefon) values (NULL, '$data', '$osoby', '$tel');";
            mysqli_query($conn, $zap);
            echo("Dodano rezerwację do bazy");
        }
        mysqli_close($conn);
?>