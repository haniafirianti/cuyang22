<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cuyang - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>

<body>

  <div class="container">
   

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('home')}}">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Progres</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ url('perpustakaan') }}">Progres 1</a>
          <a class="dropdown-item" href="#">Progres 2</a>
          <a class="dropdown-item" href="#">Progres 3</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('/home/about')}}">About</a>
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
    <table id="dataTables" class="table table-striped table-bordered" style="width:100%">
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

<script type="text/javascript">
    $(document).ready(function() {
      $('#dataTables').DataTable();
  } );

</script>
</body>

</html>