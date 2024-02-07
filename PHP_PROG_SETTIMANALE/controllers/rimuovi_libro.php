<?php
include_once '../../config/db.php';

$id = $_POST['id'];

$sql = "DELETE FROM libri WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Libro rimosso con successo";
} else {
  echo "Errore: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
