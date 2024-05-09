@extends('adminfront/index')
 
 @section('pageContent')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <a href="{{url('/admin-allclint-profile-view')}}">All Clints</a></h1>
            <form action="{{url('/admin-allclint-profile-view-serch')}}" method="post">
              @csrf
             <input type="text" placeholder="clint name" name="clintname">
              <select  name="casetype" id="inputGroupSelect01">
                          <option value="" selected>case type</option>
                          <option value="Civil" >Civil</option>
                          <option value="Family">Family</option>
                          <option value="Business">Business</option>
                          <option value="Criminal">Criminal</option>
                          <option value="Education">Education</option>
                          <option value="Cyber">Cyber</option>
                        </select>
               <select  name="clintid" id="inputGroupSelect01">
                            <option value=""> select clintid</option>
                            @foreach($FullClientDetail as $detais)           
                            <option value="{{$detais['clintid']}}">{{$detais['clintid']}}</option>
                            @endforeach
                        </select>
                        <select  name="caseno" id="inputGroupSelect01">
                            <option value=""> select case no</option>
                            @foreach($FullClientDetail as $detais)           
                            <option value="{{$detais['caseno']}}">{{$detais['caseno']}}</option>
                            @endforeach
                        </select>
              <button type="submit" ><i class="fas fa-search"></i></button>
            </form>          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin-allclint-profile-view')}}">Profile View</a></li>
              <li class="breadcrumb-item active"><a href="{{url('/admin-allclint-table-view')}}"> Table View</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <!-------------- clintcard---------------- -->
           
            <!-------------- clintcard---------------- -->
                <!-------------- clintcard database---------------- -->
                
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div style="overflow: scroll;" >
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Client Name</th>
                    <th>Client Id</th>
                    <th>Case No</th>
                    <th>Case Type</th>
                    <th>casetitle</th>
                    <th>clintfathername	</th>
                    <th>mobile</th>
                    <th>clintaddress</th>
                    <th>emailaddress</th>
                    <th>password</th>
                    <th>clintimage</th>
                    <th>clintadvocatename</th>
                    <th>staffadvocatename</th>
                    <th>opposedname</th>
                    <th>opposedadvocatename</th>
                    <th>courtname</th>
                    <th>judgename</th>
                    <th>hearingdate</th>
                    <th>casestatus</th>
                    <th>moredata</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; ?>
                @foreach($FullClientDetail as $detais)
                <?php $i++; ?>
                  <tr>
                  <td> <?php echo $i; ?></td>
                    <td>{{$detais['clintname']}}</td>
                    <td>{{$detais['clintid']}}</td>
                    <td>{{$detais['caseno']}}</td>
                    <td>{{$detais['casetype']}}</td>
                    <td>{{$detais['casetitle']}}</td>
                    <td>{{$detais['clintfathername']}}</td>
                    <td>{{$detais['mobile']}}</td>
                    <td>{{$detais['clintaddress']}}</td>
                    <td>{{$detais['emailaddress']}}</td>
                    <td>{{$detais['password']}}</td>
                    <td>{{$detais['clintimage']}}</td>
                    <td>{{$detais['clintadvocatename']}}</td>
                    <td>{{$detais['staffadvocatename']}}</td>
                    <td>{{$detais['opposedname']}}</td>
                    <td>{{$detais['opposedadvocatename']}}</td>
                    <td>{{$detais['courtname']}}</td>
                    <td>{{$detais['judgename']}}</td>
                    <td>{{$detais['hearingdate']}}</td>
                    <td>{{$detais['casestatus']}}</td>
                    <td>{{$detais['moredata']}}</td>
                  </tr>
               @endforeach

               
             
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-------------- clintcard database ---------------- -->
           
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 @endsection