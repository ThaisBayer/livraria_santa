<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<?php
  echo "<script>console.log('index.php line 12');</script>";
  if(isset($_POST['login'])){
    echo "<script>console.log('index.php line 13');</script>";
    header('location: controller/newSession.php?email='.$_POST['email'].'&senha='.$_POST['senha']);
  }
  ?>
<body>
<form method="post">
  <div class="mb-3">
  <div class="p-3 mb-2 bg-secondary text-white">Página de login</div>
    <label for="InputEmail1" class="form-label">Email:</label>
    <input type="email" class="form-control border border-dark-subtle" id="InputEmail1" aria-describedby="emailHelp" name="email" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha:</label>
    <input type="password" class="form-control border border-dark-subtle" id="exampleInputPassword1" name="senha" required>
  </div>
  <button type="submit" class="btn btn-dark" name="login">Login</button>
  <button type="submit" class="btn btn-dark" name="usuario">Novo usuário</button>
</form>
</body>
</html>