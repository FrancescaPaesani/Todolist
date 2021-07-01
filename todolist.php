<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>La mia Todolist</title>
</head>
<body>
<body class="bg-danger text-warning">
  <header class="container">
    <nav class="navbar navbar-$danger bg-$danger navbar-expand-lg mb-3">
      <h1>TODOLIST "Ciò che è importante raramente è urgente e ciò che è urgente raramente è importante!"</h1>
      <div class="container-fluid">
        <a class="navbar-brand" href="#">I miei Todo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav">
            <?php if ( isset( $_SESSION['username'] ) ) : ?>
              <li class="nav-item">
                <span class="nav-link">Benvenuto <?php echo $_SESSION['username']; ?></span>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todolist">Tutti i Todo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/todolist/login.php">Inserisci Todo</a>
              </li>
              <li>
                <a class="nav-link" href="/todolist/modifica-todo.php">Modifica Todo</a>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todolist/login.php">Aggiungi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/todolist/modifica-todo.php">Modifica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/todolist/elimina-todo.php">Elimina</a>
              </li>
            <?php endif; ?>
  </main>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="container">
  </body>
</html>