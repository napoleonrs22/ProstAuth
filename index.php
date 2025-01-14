<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация и Вход</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container d-flex flex-column align-items-center justify-content-center vh-100">
    <div class="card shadow p-4 mb-4" style="width: 100%; max-width: 400px;">
      <h2 class="text-center mb-3">Регистрация</h2>
      <form action="register.php" method="post" class="mb-4">
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Логин" name="login" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Пароль" name="pass" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Повторите пароль" name="repeatpass" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>
      </form>
    </div>

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
      <h2 class="text-center mb-3">Вход</h2>
      <form action="login.php" method="post">
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Логин" name="login" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Пароль" name="pass" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Войти</button>
      </form>
    </div>
  </div>
</body>
</html>
