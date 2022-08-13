<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>SMA Ibrahimy 1 Sukorejo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>

    <form class="form-signin" method="POST" action="cek_login.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/brand/LOGO.png" alt="" width="190" height="190">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
  </div>

  <div class="mb-3">
    <input type="username" class="form-control" style="height:50px" id="username" name="username" placeholder="Masukkan usename Anda">
</div>
  <div class="mb-3">
    <input type="password" class="form-control" style="height:50px" id="password" name="password" placeholder="Masukkan password Anda">
</div>

  <div class="form-label-group">
    <select class="form-control" name="level">
      <option value="Guru">Guru</option>
      <option value="Siswa">Siswa</option>
      <option value="Administrator">Administrator</option>
      <option value="wk">wk</option> 
    </select>
   </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; SMA Ibrahimy 1 sukorejo <?= date('Y')?></p>
</form>
</body>
</html> 
