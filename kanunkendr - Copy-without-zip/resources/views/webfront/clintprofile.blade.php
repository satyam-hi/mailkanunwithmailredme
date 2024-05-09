<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kanunkendra | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/adminfront/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{url('/adminfront/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/adminfront/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('/adminfront/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/adminfront/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('/adminfront/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/adminfront/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('/adminfront/plugins/summernote/summernote-bs4.min.css')}}">

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed"  style="background-image: url('https://cdn.dnaindia.com/sites/default/files/styles/full/public/2021/02/03/954956-supreme-court-1.jpg');">
    <!-- <div class="wrapper"> -->

    <!-- <div class="content-wrapper"> -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1>Your Profile</h1> -->
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li> -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{url('/fotoupload')}}/{{$FullClientDetail['clintimage']}}" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{$FullClientDetail['clintname']}}</h3>

              <p class="text-muted text-center">{{$FullClientDetail['casetitle']}}</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Clint id </b> <a class="float-right">{{$FullClientDetail['clintid']}}</a>
                </li>
                <li class="list-group-item">
                  <b>Mobile</b> <a class="float-right">{{$FullClientDetail['mobile']}}</a>
                </li>
                <li class="list-group-item">
                  <b>Father's Name</b> <a class="float-right">{{$FullClientDetail['clintfathername']}}</a>
                </li>
              </ul>

              <a href="#" class="btn <?php if ($FullClientDetail['activation'] == "activeted") {
                                        echo "btn-success";
                                      } else {
                                        echo "btn-danger";
                                      }; ?> btn-block"><b>{{$FullClientDetail['activation']}}</b></a>



                                      <a href="{{url('/home')}}" class="btn btn-warning btn-block"><b>logout</b></a>
                                      <a href="{{url('/home')}}" class="btn btn-primary btn-block"><b>Go  To Home</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <!-- ///////// -->

          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Heairing Dates</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Images</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline2" data-toggle="tab">Pdf</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Details/Settings</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <h3>Your Heairing Dates</h3>
                  <div style="overflow: scroll;">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <td>Date</td>
                            <td>Procedure</td>
                            <td>Payment</td>
                            <td>Payment Status</td>
                            <td>Note</td>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($ClintPashiDetail as $data)
                        <tr>
                          <td>{{$data['date']}}</td>
                          <td>{{$data['procedure']}}</td>
                          <td>{{$data['paymentprice']}}</td>
                          <td>{{$data['paymentstatus']}}</td>
                          <td>{{$data['writenote']}}</td>


                        </tr>
                        @endforeach

                        </tbody>
                      </table>
                  </div>

                </div>
                <!-- /.tab-pane -->
                <!-- //////////////////////////---- -->
           <!-- //////////////////////////---- -->
           <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">

                    <div>
                      <i class="fas fa-camera bg-purple"></i>

                      <div class="timeline-item">
                        <!-- <span class="time"><i class="far fa-clock"></i> </span> -->

                        <h3 class="timeline-header"><a href="#" </a> Case Images</h3>

                        <div class="timeline-body">
                          <!-- <img src="https://placehold.it/150x100" alt="..."> -->
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="p-4">
                              <!-- <form action="{{url('/caseimage')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="clintid" value="{{$FullClientDetail['clintid']}}">
                                <input name="images[]" type="file" multiple >
                                <button class="btn btn-warning" type="submit">Add Image</button>
                              </form> -->

                              </div>

                              @foreach($caseimage as $image)
                              <img src="{{url('/image')}}/{{$image['image']}}" class="img-fluid  mt-3" alt="Responsive image">
                              @endforeach

                            </div>
                          </div>


                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->

                  </div>
                </div>
                <!-- /.tab-pane -->




                <!-- //////////////////////////---- -->
                <div class="tab-pane" id="timeline2">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">


                    <div>
                      <i class="fas fa-comments bg-warning"></i>

                      <div class="timeline-item">

                        <div class="timeline-body">
                        <div class="p-4">
                        <!-- <form action="{{url('/casepdf')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="clintid" value="{{$FullClientDetail['clintid']}}">
                                <input name="pdf[]" type="file" multiple >
                                <button class="btn btn-warning" type="submit">Add Pdf</button>
                              </form> -->
                           </div>
                           @foreach($casepdf as $pdf)
                          <div class="graph-outline">
                          
                            <!-- <object style="width:100%;" data="path/to/file.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf"> -->
                              <embed src="{{url('/pdf')}}/{{$pdf['pdf']}}" type="application/pdf" />
                            </object>
                            <a href="{{url('/pdf')}}/{{$pdf['pdf']}}">Show]]</a>

                            <!-- <iframe src="{{url('/pdf')}}/{{$pdf['pdf']}}" title="description"></iframe> -->
                          </div>
                         


                          @endforeach


                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-warning btn-flat btn-sm"></a>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
                <!-- /.tab-pane -->




                <!-- //////////////////////////---- -->

                <div class="tab-pane" id="settings">


                  <!-- form start -->
                  <!-- <form action="{{url('/admin-edit-clint-action')}}" method="post" enctype="multipart/form-data">
                    @csrf -->
                    <div class="card-body">
                    <input type="hidden" name="id" value="{{$FullClientDetail['id']}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Case No" >
                      <div class="form-group">
                        <label for="exampleInputEmail1">Case No.</label>
                        <input type="text" name="caseno" value="{{$FullClientDetail['caseno']}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Case No" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Case Title</label>
                        <input type="text" name="casetitle" value="{{$FullClientDetail['casetitle']}}"   class="form-control" id="exampleInputEmail1" placeholder="Enter Case Title" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Clint Name</label>
                        <input type="text" name="clintname" value="{{$FullClientDetail['clintname']}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Clint Father's Name</label>
                        <input type="text" value="{{$FullClientDetail['clintfathername']}}"  name="clintfathername" class="form-control" id="exampleInputEmail1" placeholder="Enter Father's Name" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="text" name="mobile" value="{{$FullClientDetail['mobile']}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Clint address</label>
                        <input type="text" name="clintaddress" value="{{$FullClientDetail['clintaddress']}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter Clint address" required>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" value="{{$FullClientDetail['emailaddress']}}"  name="emailaddress" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" value="{{$FullClientDetail['password']}}"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                      </div>

                      <!-- <div class="form-group ">
                        <label for="customFile">Upload Clint Image</label>
                        <div class="input-group">
                          <div class="custom-file">

                            <label class="form-label" for="customFile"></label>
                            <input type="file" value="{{$FullClientDetail['clintimage']}}"  name="clintimage" class="form-control" id="customFile" placeholder="Upload image" />
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" for="customFile">Image</span>
                          </div>
                        </div> -->
                        <div class="form-group mt-2">
                          <label for="exampleInputEmail1">Clint Advocate Name</label>
                          <input type="text" name="clintadvocatename" value="{{$FullClientDetail['clintadvocatename']}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter Clint Advocate Name" required>
                        </div>
                        <!-- <div class="input-group mb-3 form-group mt-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Staff Advocate Name</label>
                          </div>
                          <select class="custom-select" value="{{$FullClientDetail['clintadvocatename']}}"  name="staffadvocatename" id="inputGroupSelct01">
                            <option value="Manoj Kumar Tiwari" >Manoj Kumar Tiwari</option>
                            <option value="Satyam Kumar Tiwari">Satyam Kumar Tiwari</option>
                            <option value="Kamlesh Tiwari">Kamlesh Tiwari</option>

                          </select>
                        </div> -->

                        <div class="form-group mt-2">
                          <label for="exampleInputEmail1"> Opposed Name</label>
                          <input type="text" name="opposedname" value="{{$FullClientDetail['opposedname']}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter Opposed Name" required>
                        </div>
                        <div class="form-group mt-2">
                          <label for="exampleInputEmail1"> Opposed Advocate Name</label>
                          <input type="text" value="{{$FullClientDetail['opposedadvocatename']}}"  name="opposedadvocatename" class="form-control" id="exampleInputEmail1" placeholder="Enter  Opposed Advocate Name">
                        </div>

                        <div class="form-group mt-2">
                          <label for="exampleInputEmail1"> Case Type</label>
                          <input type="text" value="{{$FullClientDetail['casetype']}}"  name="opposedadvocatename" class="form-control" id="exampleInputEmail1" placeholder="Enter  Opposed Advocate Name">
                        </div>
                        <!-- <div class="input-group mb-3 form-group mt-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Case Type</label>
                          </div>
                          <select class="custom-select" name="casetype" id="inputGroupSelect01">
                            <option value="Civil" selected>Civil</option>
                            <option value="Family">Family</option>
                            <option value="Business">Business</option>
                            <option value="Criminal">Criminal</option>
                            <option value="Education">Education</option>
                            <option value="Cyber">Cyber</option>
                          </select>
                        </div> -->


                        <div class="form-group">
                          <label for="exampleInputEmail1">Court Name</label>
                          <input type="text" value="{{$FullClientDetail['courtname']}}"  name="courtname" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group ">
                          <label for="exampleInputEmail1">judge Name</label>
                          <input type="text" value="{{$FullClientDetail['judgename']}}"  name="judgename" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                        </div>
                        <!-- <div class="form-group ">
                          <label for="customFile">Upload document in Image </label>
                          <div class="input-group">
                            <div class="custom-file">
                              <label class="form-label" for="customFile"></label>
                              <input type="file" name="documentimage[]" class="form-control" id="customFile" placeholder="Upload image" multiple />

                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" for="customFile">Images</span>
                            </div>
                          </div>
                          <div class="form-group mt-3 ">
                            <label for="customFile">Upload document in pdf </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <label class="form-label" for="customFile"></label>
                                <input type="file" name="documentpdf[]" class="form-control" id="customFile" placeholder="Upload image" multiple />
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text" for="customFile">Pdf</span>
                              </div>
                            </div> -->
                            <br>

                            <div class="slidecontainer">
                              <input name="casestatus"  value="{{$FullClientDetail['casestatus']}}"  type="range" min="0" max="100" value="10" class="slider" id="myRange" required>
                              <p>Case status: <span id="demo"></span> % Completed</p>
                            </div>

                            

                            <div class="md-form amber-textarea active-amber-textarea-2">
                              <label for="form16">Write more about this case :- </label>
                              <textarea id="form16" name="moredata" value="{{$FullClientDetail['moredata']}}" class="md-textarea form-control" rows="3" required> {{$FullClientDetail['moredata']}}</textarea>

                            </div>
                            <div class="input-group mb-3 form-group mt-3">
                              <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Clint Activation</label>
                              </div>
                              <select class="custom-select" name="activation" id="inputGroupSelect01">
                                <option value="activeted" selected>activete</option>
                                <option value="deactiveted">Deactivate</option>

                              </select>
                            </div>

                            <!-- /.card-body -->

                            <!-- <div class="card-footer">
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                  </form> -->





                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->




    </div>
</body>




<!-- jQuery -->
<script src="{{url('/adminfront/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/adminfront/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('/adminfront/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('/adminfront/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('/adminfront/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('/adminfront/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('/adminfront/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('/adminfront/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('/adminfront/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('/adminfront/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('/adminfront/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('/adminfront/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('/adminfront/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/adminfront/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/adminfront/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/adminfront/dist/js/pages/dashboard.js')}}"></script>


<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>


</body>

</html>