@extends('layouts.master')

@section('content')

npm run watch

    <center><h2>CUYANGE TEAM</h2></center>
    <!-- <a class="btn btn-success btn-sm" href="{{ url('users') }}">Tambah Member</a> -->
     <table id="dataTables" class="table table-striped" style="width:100%">
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

    <video width="300" height="300">
      <source src="{{ url('media/test.mp4')}}" type="video/mp4">
         <source src="video/test.ogg" type="video/ogg">
        Tidak mendukung
    </video>

    <audio>
      <source src="{{ url('media/1.wav') }}" type="audio/wav">
        TAK MENDUKUNG
    </audio>

    <h1>ANJING</h1>

                    <!--   <div class="col-md-6 col-xl-4">

                            <div class="card">
                                <div class="card-body">
                                    <div class="py-4">
                                        <h6 class="mb-20">A success message!</h6>
                                        <button type="button" class="btn btn-info btn-xs" id="sa-success">Click me</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
    
@endsection