<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title> @yield('title')</title>
</head>
<body>
    <h1>This is Template</h1>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="#">Logo</a>
      
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Join">Join Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news">news</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contant">Contant</a>
        </li>
      </ul>
    </nav>
    

    @yield('body')

</body>
</html>