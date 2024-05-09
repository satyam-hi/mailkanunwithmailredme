@extends('adminfront/index')
 
 @section('pageContent')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper" style="background-image: url('https://akm-img-a-in.tosshub.com/sites/dailyo/fb_feed_images/story_image/201711/sc-supreme-court-fb_111317012619.jpg');">
    <!-- Content Header (Page header) --> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registration Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><button type="submit" class="btn btn-success">Add</button></li>
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
                <h3 class="card-title">admission of new clint/case</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/admin-addclint-action')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Case No.</label>
                    <input type="text" name="caseno" class="form-control" id="exampleInputEmail1" placeholder="Enter Case No" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Case Title</label>
                    <input type="text" name="casetitle" class="form-control" id="exampleInputEmail1" placeholder="Enter Case Title" required>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Clint Name</label>
                    <input type="text" name="clintname" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Clint Father's Name</label>
                    <input type="text" name="clintfathername" class="form-control" id="exampleInputEmail1" placeholder="Enter Father's Name" required>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Clint address</label>
                    <input type="text" name="clintaddress" class="form-control" id="exampleInputEmail1" placeholder="Enter Clint address" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="emailaddress" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"> Upload Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->

                  <div class="form-group ">
                    <label for="customFile">Upload Clint Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                       
                  <label class="form-label" for="customFile"></label>
                        <input type="file" name="clintimage" class="form-control" id="customFile" placeholder="Upload image"  />
                      </div>
                      <div class="input-group-append" >
                        <span class="input-group-text" for="customFile">Image</span>
                      </div>
                    </div>
                    <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Clint Advocate Name</label>
                    <input type="text" name="clintadvocatename" class="form-control" id="exampleInputEmail1" placeholder="Enter Clint Advocate Name" required>
                  </div>
                  <div  class="input-group mb-3 form-group mt-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Staff Advocate Name</label>
                        </div>
                        <select class="custom-select" name="staffadvocatename" id="inputGroupSelect01" >
                          <option value="Manoj Kumar Tiwari" selected>Manoj Kumar Tiwari</option>
                          <option value="Satyam Kumar Tiwari">Satyam Kumar Tiwari</option>
                          <option value="Kamlesh Tiwari">Kamlesh Tiwari</option>
                          
                        </select>
                      </div>

                    <div class="form-group mt-2">
                    <label for="exampleInputEmail1"> Opposed Name</label>
                    <input type="text" name="opposedname" class="form-control" id="exampleInputEmail1" placeholder="Enter Opposed Name" required>
                  </div>
                  <div class="form-group mt-2">
                    <label for="exampleInputEmail1"> Opposed Advocate Name</label>
                    <input type="text" name="opposedadvocatename" class="form-control" id="exampleInputEmail1" placeholder="Enter  Opposed Advocate Name" >
                  </div>
                    <div  class="input-group mb-3 form-group mt-3">
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
                      </div>


                      <div class="form-group">
                    <label for="exampleInputEmail1">Court Name</label>
                    <input type="text" name="courtname" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputEmail1">judge Name</label>
                    <input type="text" name="judgename" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group ">
                    <label for="customFile">Upload document in Image </label>
                    <div class="input-group">
                      <div class="custom-file">
                  <label class="form-label" for="customFile"></label>
                        <input type="file" name="documentimage[]" class="form-control" id="customFile" placeholder="Upload image"  multiple />

                      </div>
                      <div class="input-group-append" >
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
                      <div class="input-group-append" >
                        <span class="input-group-text" for="customFile">Pdf</span>
                      </div>
                    </div>

                  <div class="row mt-3 mb-3">
                    <div class="col-sm-6">
                      <label for="previsdate">Joining/Previous Date :- </label>
                     <input  name="previousdate" class="ml-3" id="previsdate" type="date" required>
                    </div>
                    <div class="col-sm-6">
                    <label for="nextdate">Next Date :- </label>
                    <input name="nextdate" class="ml-3" id="nextdate" type="date" required>
                    </div>
                  </div>

                 <div class="slidecontainer">
                    <input name="casestatus" type="range" min="0" max="100" value="10" class="slider" id="myRange" required>
                    <p>Case status: <span id="demo"></span> % Completed</p>
                  </div>

                  <div class="row mt-3 mb-3">
                    <div class="col-sm-6">
                      <label for="previsdates">Payment Price  :- </label>
                     <input  name="paymentprice" class="ml-3" id="previsdates" type="text" required> <span> ₹ </span>
                    </div>
                    <div class="col-sm-6">
                    <label for="nextdates">Pament Status :- </label>
                    <!-- <input name="paymentstatus" class="ml-3" id="nextdate" type="text"> -->
                    <select id="nextdates"  name="paymentstatus" id="inputGroupSelect01">
                          <option value="unpaid" selected>Unpaid</option>
                          <option value="paid" >Paid</option>
                    </select>
                    </div>
                  </div>

                  <div class="md-form amber-textarea active-amber-textarea-2">
                  <label for="form16">Write more about this case :- </label>
                    <textarea id="form16" name="moredata" class="md-textarea form-control" rows="3" required></textarea>
                    
                  </div>
                  <div  class="input-group mb-3 form-group mt-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Clint Activation</label>
                        </div>
                        <select class="custom-select" name="activation" id="inputGroupSelect01">
                          <option value="activeted" selected>activete</option>
                          <option value="deactiveted">Deactivate</option>
                        
                        </select>
                      </div>
                  




                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                <!-- /.card-body -->

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