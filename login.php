<?php
require __DIR__ . '/todolist.php';
?>

<h1>Inserisci Nuovo Todo</h1>
    <form method="POST" action="todolist.php" class="container">
      <div class="col">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control">
      </div>
      <div class="col">
        <label for="data" class="form-label">Data Todo</label>
        <input type="date" name="data" id="data" class="form-control">
      </div>
      <input type="submit" class="btn btn-primary" value="Aggiungi">
    </form>
  </main>
</body>
</html>
