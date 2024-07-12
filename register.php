<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Common CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="login-container">
    <h2>Register</h2>
    <form action="./add.php" method="post">
      <div class="form-group">
        <label for="form3Example1c">Name</label>
        <input type="text" id="form3Example1c" class="form-control" name="name" required>
      </div>
      <div class="form-group">
        <label for="form3Example3c">Email</label>
        <input type="email" id="form3Example3c" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label for="form3Example4c">Password</label>
        <input type="password" id="form3Example4c" class="form-control" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <p>Already have an account? <a href="./">Login here</a></p>
  </div>

  <!-- JavaScript libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
