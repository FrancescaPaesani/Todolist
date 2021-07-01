<?php
require __DIR__ . '/todolist.php';
?>

<h1>Elimina Todo</h1>
    <form method="POST" action="todolist.php" class="container">
      <div class="col">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control">
      </div>
      <div class="col">
        <label for="data" class="form-label">Data Todo</label>
        <input type="date" name="data" id="data" class="form-control">
      </div>
      <input type="submit" class="btn btn-primary" value="Elimina questo todo">
      <input type="submit" class="btn btn-primary" value="Elimina tutti i todo">
    </form>
  </main>
</body>
</html>
