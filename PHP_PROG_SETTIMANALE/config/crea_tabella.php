<?php
include_once 'db.php';

// Crea tabella
$sql = "CREATE TABLE libri (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titolo VARCHAR(30) NOT NULL,
autore VARCHAR(30) NOT NULL,
anno_pubblicazione INT(4) NOT NULL,
genere VARCHAR(30) NOT NULL
)";

$result = $conn->query($sql);

if ($result === TRUE) {
  echo "Tabella libri creata con successo";
} else {
  echo "Errore nella creazione della tabella: " . $conn->error;
}

// Verifica se la tabella esiste
$sql = "SHOW TABLES LIKE 'libri'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "La tabella 'libri' esiste.";
} else {
  echo "La tabella 'libri' non esiste.";
}
?>
