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
        <a class="nav-link active" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('logout') }}">Logout</a>
      </li>

    </ul>


    <p></p>
    <center><h2><b>About Team Cuyang</b></h2></center>
    <p></p>

    <img src="{{url('img/cuyang.jpeg')}}" class="rounded" alt="Cinque Terre" height="10%" width="49%">
    <img src="{{url('img/cuyang.jpeg')}}" class="rounded" alt="Cinque Terre" height="10%" width="49%">

    <p></p>

    <h2><b>Our Bio</b></h2>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>NO</th>
          <th>FUll NAME</th>
          <th>GENDER</th>
          <th>DATE OF BIRTH</th>
          <th>ADDRESS</th>
          <th>RELIGION</th>
          <th>SOSMED ACCOUNT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Ahmad Suherman</td>
          <td>Laki-laki</td>
          <td>Bandung, 05 Mei 2003</td>
          <td>Cangkudu</td>
          <td>Islam</td>
          <td>ig: ahmad.suherman18</td>
        </tr>
          
        </tr>
          <td>2</td>
          <td>Candra</td>
          <td>Laki-laki</td>
          <td>Bandung, 01 Mei 2003</td>
          <td>Citeureup</td>
          <td>Islam</td>
          <td>ig: candra_543</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Dede Suminar</td>
          <td>Perempuan</td>
          <td>Bandung, 22 Maret 2003</td>
          <td>Bojong Kunci</td>
          <td>Islam</td>
          <td>ig: dedesuminar03</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Hania Firianti</td>
          <td>Perempuan</td>
          <td>Bandung, 16 Juni 2003</td>
          <td>Cupu</td>
          <td>Islam</td>
          <td>ig: haniafirianti16</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Santi Sintiawati</td>
          <td>Perempuan</td>
          <td>Bandung, 27 Mei 2003</td>
          <td>Bojong Tanjung</td>
          <td>Islam</td>
          <td>ig: santisintia01</td>
        </tr>
        </tbody>
        </table>

        <p><h2><b>Contact Us</b></h2></p>
           <h6><b>Whatsapp No : </b>089876543210</h6>
           <h6><b>E-mail      : </b>cuyang@gmail.com</h6>
           <h6><b>Instagram   : </b>cuyangetim12345</h6>
           <h6><b>Facebook    : </b>CuyangTeam</h6>

        <p><h2><b>Purpose This Project</b></h2></p>
            <h6>Project ini dibuat untuk kami belajar dan menjadi history kami</h6>




      </tbody>
    </table>


</body>

</html>