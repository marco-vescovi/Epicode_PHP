<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestione_libreria";

// Crea connessione senza selezionare un database
$conn = new mysqli($servername, $username, $password);

// Controlla connessione
if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
}

// Crea database se non esiste
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
} else {
  echo "Errore nella creazione del database: " . $conn->error;
}

// Seleziona il database per le future query
$conn->select_db($dbname);
?>
