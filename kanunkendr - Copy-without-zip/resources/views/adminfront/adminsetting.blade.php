@extends('adminfront/index')

@section('pageContent')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: url('https://akm-img-a-in.tosshub.com/sites/dailyo/fb_feed_images/story_image/201711/sc-supreme-court-fb_111317012619.jpg');">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Admin profile Setting </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            <!-- <li class="breadcrumb-item active"><button type="submit" class="btn btn-success">Add</button></li> -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Admin profile Setting</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('/admin-setting-action')}}" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="{{$adminData['id']}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Name</label>
                  <input type="text" name="name" value="{{$adminData['name']}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email </label>
                  <input type="email" name="email" value="{{$adminData['email']}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" value="{{$adminData['password']}}" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection