@extends('layouts.master')

@section('content')

<div class="main-content">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <center><h2><b>About Team Cuyang</b></h2></center>

                        <img src="{{url('img/cuyang.jpeg')}}" class="rounded" alt="Cinque Terre" height="10%" width="49%">
                        <img src="{{url('img/cuyang.jpeg')}}" class="rounded" alt="Cinque Terre" height="10%" width="49%">

                        <center><h2><b>Our Bio</b></h2></center>
                        <table id="dataTables" class="table table-striped table-bordered" style="width:100%">
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
                              <td>Bandung, 20 Maret 2003</td>
                              <td>Bojongkunci</td>
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

                            <center><h2><b>Contact Us</b></h2></center>
                               <h6><b>Whatsapp No : </b>089876543210</h6>
                               <h6><b>E-mail      : </b>cuyang@gmail.com</h6>
                               <h6><b>Instagram   : </b>cuyangetim12345</h6>
                               <h6><b>Facebook    : </b>CuyangTeam</h6>

                            <center><h2><b>Purpose This Project</b></h2></center>
                                <h6>Project ini dibuat untuk kami belajar dan menjadi history kami</h6>
                  </div>
              </div>
          </div>
      </div>
</div>
    
@endsection 