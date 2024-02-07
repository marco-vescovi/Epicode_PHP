<?php
include_once '../../config/db.php';

$id = $_POST['id'];
$titolo = $_POST['titolo'];
$autore = $_POST['autore'];
$anno_pubblicazione = $_POST['anno_pubblicazione'];
$genere = $_POST['genere'];

$sql = "UPDATE libri SET titolo='$titolo', autore='$autore', anno_pubblicazione='$anno_pubblicazione', genere='$genere' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Dettagli del libro modificati con successo";
} else {
  echo "Errore: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
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

