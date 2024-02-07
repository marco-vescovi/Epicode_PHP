<!DOCTYPE html>
<html>
<head>
  <title>Modifica i dettagli del libro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    body {
      background-color: #121212;
      color: #fff;
      font-family: 'Courier New', Courier, monospace;
    }
    .navbar {
      background-color: #333;
    }
    .navbar-brand, .nav-link {
      color: #fff;
      transition: color 0.5s;
    }
    .nav-link:hover {
      color: #ddd;
    }
    h2 {
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <h2 class="animate__animated animate__fadeInDown">Modifica i dettagli del libro</h2>
  <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link animate__animated animate__pulse animate__infinite" aria-current="page" href="home.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated animate__pulse animate__infinite" href="aggiungi_libro.php"><i class="fas fa-plus"></i> Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated animate__pulse animate__infinite" href="modifica_libro.php"><i class="fas fa-edit"></i> Edit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated animate__pulse animate__infinite" href="rimuovi_libro.php"><i class="fas fa-trash"></i> Remove</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  ID Libro:<br>
  <input type="text" name="id">
  <br>
  Titolo:<br>
  <input type="text" name="titolo">
  <br>
  Autore:<br>
  <input type="text" name="autore">
  <br>
  Anno di pubblicazione:<br>
  <input type="text" name="anno_pubblicazione">
  <br>
  Genere:<br>
  <input type="text" name="genere">
  <br><br>
  <input type="submit" value="Modifica">
</form> 

<?php
include_once '../../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titolo = $_POST['titolo'];
    $autore = $_POST['autore'];
    $anno_pubblicazione = $_POST['anno_pubblicazione'];
    $genere = $_POST['genere'];

    // Prepare an SQL statement
    $stmt = $conn->prepare("UPDATE libri SET titolo=?, autore=?, anno_pubblicazione=?, genere=? WHERE id=?");
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sssii", $titolo, $autore, $anno_pubblicazione, $genere, $id);

    // Attempt to execute the prepared statement
    if($stmt->execute()){
      echo "Dettagli del libro modificati con successo";
    } else {
      echo "Errore: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
