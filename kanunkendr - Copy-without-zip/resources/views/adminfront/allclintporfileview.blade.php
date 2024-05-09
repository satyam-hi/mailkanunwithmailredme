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
            <!-- <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  criminal
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Satyam kumar tiwari</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div> -->
            <!-------------- clintcard---------------- -->
                <!-------------- clintcard database---------------- -->
                <?php $i=0; ?>
                @foreach($FullClientDetail as $detais)
                <?php $i++; ?>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                <b><?php echo $i; ?></b>     {{$detais['casetitle']}}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"> <b> Name : {{$detais['clintname']}}</b></h2>
                      <h6 class=""> <b> Clint Id : {{$detais['clintid']}}</b></h6>
                      <h6 class=""><b>Case No : {{$detais['caseno']}}</b></h6>
                      <h6 class=""><b>Case Type : {{$detais['casetype']}}</b></h6>
                      <p class="text-muted text-sm"><b>Father's Name: </b> {{$detais['clintfathername']}} </p>
                      <!-- <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p> -->
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{$detais['clintaddress']}}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Mobile    : {{$detais['mobile']}}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{url('/fotoupload')}}/{{$detais['clintimage']}}" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <!-- <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a> -->
                    <form action="{{url('/profile')}}" method="post" >
                      @csrf
                      <input type="hidden" name="clintid" value=<?php echo $detais['clintid']; ?> >
                      <button class="btn btn-sm btn-primary"> <i class="fas fa-user"></i> View Profile </button>
                    </form>
                    <!-- <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
            @endforeach
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