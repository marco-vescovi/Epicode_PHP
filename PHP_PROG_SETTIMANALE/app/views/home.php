<?php
include_once '../../config/db.php';

$sql = "SELECT id, titolo, autore, anno_pubblicazione, genere FROM libri";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Gestione Libreria</title>
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
    .book {
      display: inline-block;
      width: 100px;
      height: 150px;
      margin: 50px;
      background-color: #444;
      transition: transform 0.5s;
    }
    .book:hover {
      transform: translateY(-20px);
    }
    .book-info {
  display: none;
  position: absolute;
  width: 200px;
  padding: 10px;
  background-color: #333;
  color: #fff;
  border-radius: 5px;
  margin-top: 20px;
  z-index: 1000; /* Questo farà sì che la card del dettaglio appaia sopra le altre card */
  transform: translateX(-50%);
  left: 50%;
}

  </style>
</head>
<body>

  <h2 class="animate__animated animate__fadeInDown">Elenco dei libri</h2>
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
  <?php
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div class='book animate__animated animate__fadeInUp'>
              <div class='book-info'>
                <p>Titolo: " . $row["titolo"]. "</p>
                <p>Autore: " . $row["autore"]. "</p>
                <p>Anno di pubblicazione: " . $row["anno_pubblicazione"]. "</p>
                <p>Genere: " . $row["genere"]. "</p>
              </div>
            </div>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    $('.book').on('mouseover', function() {
      $(this).find('.book-info').show();
    }).on('mouseout', function() {
      $(this).find('.book-info').hide();
    });
  </script>
</body>
</html>
