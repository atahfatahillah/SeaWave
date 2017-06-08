<!DOCTYPE html>
<html>
<head>
  <title>SeaWave</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">SeaWave</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a>Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>

  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>