<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>

  <div class="container">
    <div class="alert alert-success">
      <strong>Success!</strong> Anda Berhasil Login
    </div>


    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/home">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Progres</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Progres 1</a>
          <a class="dropdown-item" href="#">Progres 2</a>
          <a class="dropdown-item" href="#">Progres 3</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/home/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('logout') }}">Logout</a>
      </li>

    </ul>



    <h2>Team Cuyang</h2>
    <p></p>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>NO</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Ahmad</td>
          <td>Suherman</td>
          <td>suherman@gmail.com.com</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Candra</td>
          <td>Aja</td>
          <td>candra@gmail.com</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Dede</td>
          <td>Suminar</td>
          <td>Desum@example.com</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Hania</td>
          <td>Firianti</td>
          <td>hania@example.com</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Santi</td>
          <td>Sintiawati</td>
          <td>santuy2003@example.com</td>
        </tr>


      </tbody>
    </table>
    <div class="container">
      <ul class="pagination justify-content-center" style="margin:20px 0">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </div>

  </div>

  <div class="container">
    <h2>Cuyang Photos</h2>
    <p>22 Oktober 2018</p>
    <img src="img/cuyang.jpeg" class="rounded" alt="Cinque Terre" height="10%" width="16%">
    <img src="img/cuyang.jpeg" class="rounded" alt="Cinque Terre" height="10%" width="16%">
    <img src="img/cuyang.jpeg" class="rounded" alt="Cinque Terre" height="10%" width="16%">
    <img src="img/cuyang.jpeg" class="rounded" alt="Cinque Terre" height="10%" width="16%">
    <img src="img/cuyang.jpeg" class="rounded" alt="Cinque Terre" height="10%" width="16%">
    <img src="img/cuyang.jpeg" class="rounded" alt="Cinque Terre" height="10%" width="16%">


  </div>

</body>

</html>