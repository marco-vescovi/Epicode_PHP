<!DOCTYPE html>
<html>
<head>
  <title>Rimuovi un libro</title>
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

  <h2 class="animate__animated animate__fadeInDown">Rimuovi un libro</h2>
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
<form action="" method="post">
  ID Libro:<br>
  <input type="text" name="id">
  <br><br>
  <input type="submit" value="Rimuovi">
</form> 

<?php
include_once '../../config/db.php';

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM libri WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
      echo "Libro rimosso con successo";
    } else {
      echo "Errore: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID non fornito. Si prega di fornire un ID.";
}

$conn->close();
?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
