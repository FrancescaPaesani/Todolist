<?php
require __DIR__ . '/todolist.php';
?>

    <h1>Modifica Todo</h1>
    <form method="POST" action="modifica-todo.php" class="container">
      <div class="col">
        <label for="username" class="form-label">Modifica Username</label>
        <input type="text" name="username" id="username" class="form-control">
      </div>
      <div class="col">
        <label for="modifica data" class="form-label">Modifica Data</label>
        <input type="date" name="data" id="data" class="form-control">
      </div>
      <input type="submit" class="btn btn-primary" value="Modifica">
    </form>
  </main>
</body>
</html>
