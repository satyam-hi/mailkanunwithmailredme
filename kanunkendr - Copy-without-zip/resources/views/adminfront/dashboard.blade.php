 @extends('adminfront/index')

 @section('pageContent')
 <?php date_default_timezone_set("Asia/Calcutta"); ?>
 <!-- Content Wrapper. Contains page content -->
 <!-- <div class="content-wrapper"> -->
 <div class="content-wrapper" style="background-image: url('https://akm-img-a-in.tosshub.com/sites/dailyo/fb_feed_images/story_image/201711/sc-supreme-court-fb_111317012619.jpg');" >
   <!-- Content Header (Page header) -->
 
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <!-- Small boxes (Stat box) -->
      
       <!-- /.row -->
       <!-- Main row -->
       <div class="row">




         <!-- pashi table start  -->

         <div class="col-sm-12">

           <!-- Content Header (Page header) -->
           <section class="content-header" >
             <div class="container-fluid" >
               <div class="row mb-2">
                 <div class="col-sm-6" >
                   <h1> <a href="{{url('/admin-allclint-pashi-table')}}"> <span style="color:black">All Clints Peshi </span></a> </h1>
                   <form action="/admin-allclint-pashi-table-serch">
                     <input name="date" type="date">
                     <button type="submit">Search</button>
                   </form>

                 </div>
                 <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item">
                       <h1> Today : {{date('Y-m-d')}} . </h1>
                     </li>
                     <!-- <li class="breadcrumb-item "> </li> -->
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

                   <div class="card" >
                     <div class="card-header">
                       <h3 class="card-title">Peshi DataTable <b> Date : <?php if ($dateserch != '') {
                                                                            echo $dateserch;
                                                                          } else {
                                                                            echo date('Y-m-d');
                                                                          }  ?> </b></h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                       <div style="overflow: scroll;">
                         <table id="example1" class="table table-bordered table-striped">
                           <thead>
                             <tr>
                               <th>Sr. No.</th>
                               <th>गत दिनांक</th>
                               <th>न्यायालय</th>
                               <th>प्रकरण क्रमांक</th>
                               <th>शीर्षक </th>
                               <th>कार्यवाही</th>
                               <th>आगे दिनांक</th>
                               <th>Client Name</th>
                               <th>Client Id</th>
                               <th>Case No</th>
                               <th>Case Type</th>
                               <th>Payment price</th>
                               <th>Payment Status</th>
                               <!-- <th>Case Type</th> -->
                               <th>Write Note </th>
                               <th>Action</th>
                               <th>Edit</th>
                             </tr>
                           </thead>
                           <tbody>
                             <?php $i = 0; ?>
                             @foreach($ClintPashiDetail as $detais)
                             <?php $i++; ?>
                             <tr>
                               <td> <?php echo $i; ?></td>
                               <td>{{$detais['previsdate']}}</td>
                               <td>{{$detais['courtname']}}</td>
                               <td>{{$detais['caseno']}}</td>
                               <td>{{$detais['casetitle']}}</td>
                               <td>
                                 <?php if ($detais['procedure'] != '') {
                                    echo "<input " . " class=" . $detais['clintid'] . "procedure type='text'value=" . $detais['procedure'] . ">";
                                  } else {
                                    echo "<input  class=" . $detais['clintid'] . "procedure" . " type='text'>";
                                  } ?>
                               </td>
                               <!-- <td><input type="date"></td> -->
                               <td><?php if ($detais['nextdate'] != '') {
                                      echo "<input " . "clintid=" . $detais['clintid'] . " class=" . $detais['clintid'] . "datechenge  type='date'value=" . $detais['nextdate'] . ">";
                                    } else {
                                      echo "<input class=" . $detais['clintid'] . "datechenge" . " type='date'>";
                                    } ?></td>
                               <td>{{$detais['clintname']}}</td>
                               <td>{{$detais['clintid']}}</td>
                               <td>{{$detais['caseno']}}</td>
                               <td>{{$detais['casetype']}}</td>

                               <td>
                                 <?php if ($detais['paymentprice'] != '') {
                                    echo "<input " . " class=" . $detais['clintid'] . "paymentprice type='text'value=" . $detais['paymentprice'] . ">";
                                  } else {
                                    echo "<input class=" . $detais['clintid'] . "paymentprice" . " type='text'>";
                                  } ?>
                               </td>
                               <td>
                                 <?php if ($detais['paymentstatus'] != '') {
                                    echo "<input " . " class=" . $detais['clintid'] . "paymentstatus type='text'value=" . $detais['paymentstatus'] . ">";
                                  } else {
                                    echo "<input class=" . $detais['clintid'] . "paymentstatus" . " type='text'>";
                                  } ?>
                               </td>
                               <!-- <td>{{$detais['clintname']}}</td> -->
                               <td> <input value="{{$detais['writenote']}}" type="text" class="<?php echo $detais['clintid'] . 'note'; ?>"> </td>
                               <td><Button date="{{$detais['date']}}" clintid="{{$detais['clintid']}}" clintname="{{$detais['clintname']}}" caseno="{{$detais['caseno']}}" paymentprice="{{$detais['paymentprice']}}" paymentstatus="{{$detais['paymentstatus']}}" casetitle="{{$detais['casetitle']}}" casetype="{{$detais['casetype']}}" courtname="{{$detais['courtname']}}" writenote="{{$detais['writenote']}}" procedure="{{$detais['procedure']}}" previsdate="{{$detais['previsdate']}}" nextdate="{{$detais['nextdate']}}" class="savechenge  btn btn-success">Save</Button></td>

                               <td><Button date="{{$detais['date']}}" clintid="{{$detais['clintid']}}" clintname="{{$detais['clintname']}}" caseno="{{$detais['caseno']}}" paymentprice="{{$detais['paymentprice']}}" paymentstatus="{{$detais['paymentstatus']}}" casetitle="{{$detais['casetitle']}}" casetype="{{$detais['casetype']}}" courtname="{{$detais['courtname']}}" writenote="{{$detais['writenote']}}" procedure="{{$detais['procedure']}}" previsdate="{{$detais['previsdate']}}" nextdate="{{$detais['nextdate']}}" class="saveedit btn btn-warning">Save Edit</Button></td>
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
               <!-- <div class="card-footer">
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
               </div> -->
               <!-- /.card-footer -->
             </div>
             <!-- /.card -->

           </section>
           <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->


         <script>
           $(document).ready(function() {

             $('.savechenge').click(function() {

               var date = $(this).attr("date");
               var clintid = $(this).attr("clintid");
               var clintname = $(this).attr("clintname");
               var caseno = $(this).attr("caseno");
               var paymentprice = $('.' + clintid + 'paymentprice').val();
               var paymentstatus = $('.' + clintid + 'paymentstatus').val();
               var casetitle = $(this).attr("casetitle");
               var casetype = $(this).attr("casetype");
               var courtname = $(this).attr("courtname");
               var writenote = $('.' + clintid + 'note').val();
               var procedure = $('.' + clintid + 'procedure').val();
               var previsdate = $(this).attr("previsdate");
               var nextdate = $('.' + clintid + 'datechenge').val();

               $.ajax({
                 url: '/admin-allclint-pashi-table-update-nextdate',
                 type: 'GET',
                 data: {
                   date: date,
                   clintid: clintid,
                   clintname: clintname,
                   caseno: caseno,
                   paymentprice: paymentprice,
                   paymentstatus: paymentstatus,
                   casetitle: casetitle,
                   casetype: casetype,
                   courtname: courtname,
                   writenote: writenote,
                   procedure: procedure,
                   previsdate: previsdate,
                   nextdate: nextdate
                 },
                 contentType: 'application/json; charset=utf-8',
                 success: function(response) {
                   alert(response.data);
                 },
                 error: function() {
                   alert("please fill all data");
                 }
               });

             })


             // $('.datechenge').change(function(){
             // alert($(this).attr("clintid"));

             // })

             $('.saveedit').click(function() {

               var date = $(this).attr("date");
               var clintid = $(this).attr("clintid");
               var clintname = $(this).attr("clintname");
               var caseno = $(this).attr("caseno");
               var paymentprice = $('.' + clintid + 'paymentprice').val();
               var paymentstatus = $('.' + clintid + 'paymentstatus').val();
               var casetitle = $(this).attr("casetitle");
               var casetype = $(this).attr("casetype");
               var courtname = $(this).attr("courtname");
               var writenote = $('.' + clintid + 'note').val();
               var procedure = $('.' + clintid + 'procedure').val();
               var previsdate = $(this).attr("previsdate");
               var nextdate = $('.' + clintid + 'datechenge').val();

               $.ajax({
                 url: '/admin-allclint-pashi-table-update-nextdate-edit',
                 type: 'GET',
                 data: {
                   date: date,
                   clintid: clintid,
                   clintname: clintname,
                   caseno: caseno,
                   paymentprice: paymentprice,
                   paymentstatus: paymentstatus,
                   casetitle: casetitle,
                   casetype: casetype,
                   courtname: courtname,
                   writenote: writenote,
                   procedure: procedure,
                   previsdate: previsdate,
                   nextdate: nextdate
                 },
                 contentType: 'application/json; charset=utf-8',
                 success: function(response) {
                   alert(response.data);
                 },
                 error: function() {
                   alert("please fill all data");
                 }
               });

             })




           });
         </script>

       </div>



       <!----------  pashi table end --------  -->

       <!-- ------start inquary sms ----------  -->
       <section class="content">
       <div class="card card-solid">
               <div class="card-body pb-0">
       <div class="row">
                   <!-------------- clintcard---------------- -->

                   <!-------------- clintcard---------------- -->
                   <!-------------- clintcard database---------------- -->

                   <div class="card">
                     <div class="card-header">
                       <h3 class="card-title"> <b>Inqury Messeges : -  </b></h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                       <div style="overflow: scroll;">
                         <table id="example1" class="table table-bordered table-striped">
                           <thead>
                             <tr>
                               <th>Sr. No.</th>
                               <th>Name</th>
                               <th>Mobile</th>
                               <th>Email</th>
                               <th>Subject</th>
                               <th>Messeges</th>
                               <th>Action</th>
                             </tr>
                           </thead>
                           <tbody>
                           <?php $i = 0; ?>
                           @foreach($masseges as $sms )
                           <?php $i++; ?>
                             <tr>
                             <td>{{$i}}</td>
                               <td>{{$sms['name']}}</td>
                               <td>{{$sms['mobile']}}</td>
                               <td>{{$sms['email']}}</td>
                               <td>{{$sms['subject']}}</td>
                               <td>{{$sms['message']}}</td>
                               <td><a href="{{url('inqurydelete')}}?id={{$sms['id']}}">  <button  type="button" class="btn btn-danger">delete</button></a></td>
                             </tr>
                             @endforeach
                           </tbody>
                         </table>
                       </div>
                     </div>
                     <!-- /.card-body -->
                   </div>
                   <!-- /.card -->

                   <!-------------- clintcard database ---------------- -->

                 </div>
                 </div> </div>

              </section>

       <!-- end  inquary sms   --------------->

       <!------- start calender -------------- -->

       <div class="col-sm-12" style="display: none;">
         <!-- Calendar -->
         <div class="card bg-gradient-success">
           <div class="card-header border-0">

             <h3 class="card-title">
               <i class="far fa-calendar-alt"></i>
               Calendar
             </h3>
             <!-- tools card -->
             <div class="card-tools">
               <!-- button with a dropdown -->
               <div class="btn-group">
                 <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                   <i class="fas fa-bars"></i>
                 </button>
                 <div class="dropdown-menu" role="menu">
                   <a href="#" class="dropdown-item">Add new event</a>
                   <a href="#" class="dropdown-item">Clear events</a>
                   <div class="dropdown-divider"></div>
                   <a href="#" class="dropdown-item">View calendar</a>
                 </div>
               </div>
               <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                 <i class="fas fa-minus"></i>
               </button>
               <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                 <i class="fas fa-times"></i>
               </button>
             </div>
             <!-- /. tools -->
           </div>
           <!-- /.card-header -->
           <div class="card-body pt-0">
             <!--The calendar -->
             <div id="calendar" style="width: 100%"></div>
           </div>
           <!-- /.card-body -->
         </div>
       </div>
       
       <!-- Left col -->
       <section class="col-lg-7 connectedSortable">
       

       </section>
       <!-- /.Left col -->
       <!-- right col (We are only adding the ID to make the widgets sortable)-->
       <section class="col-lg-5 connectedSortable" style="display: none;">

         <!-- Map card -->
         <div class="card bg-gradient-primary">
           <div class="card-header border-0">
             <h3 class="card-title">
               <i class="fas fa-map-marker-alt mr-1"></i>
               Visitors
             </h3>
             <!-- card tools -->
             <div class="card-tools">
               <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                 <i class="far fa-calendar-alt"></i>
               </button>
               <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                 <i class="fas fa-minus"></i>
               </button>
             </div>
             <!-- /.card-tools -->
           </div>
           <div class="card-body">
             <div id="world-map" style="height: 250px; width: 100%;"></div>
           </div>
           <!-- /.card-body-->
           <div class="card-footer bg-transparent">
             <div class="row">
               <div class="col-4 text-center">
                 <div id="sparkline-1"></div>
                 <div class="text-white">Visitors</div>
               </div>
               <!-- ./col -->
               <div class="col-4 text-center">
                 <div id="sparkline-2"></div>
                 <div class="text-white">Online</div>
               </div>
               <!-- ./col -->
               <div class="col-4 text-center">
                 <div id="sparkline-3"></div>
                 <div class="text-white">Sales</div>
               </div>
               <!-- ./col -->
             </div>
             <!-- /.row -->
           </div>
         </div>
         <!-- /.card -->
         <!-- /.card -->
       </section>
       <!-- right col -->
     </div>
     <!-- /.row (main row) -->
 </div><!-- /.container-fluid -->
 </section>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 @endsection