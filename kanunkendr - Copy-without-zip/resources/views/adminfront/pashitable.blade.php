@extends('adminfront/index')

@section('pageContent')
<?php date_default_timezone_set("Asia/Calcutta"); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> <a href="{{url('/admin-allclint-pashi-table')}}">All Clints Peshi </a> </h1>
          <form action="/admin-allclint-pashi-table-serch">
            <!-- between  -->
            <input name="date" type="date">
            <!-- - -->
            <!-- <input name="date1" type="date"> -->
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

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Peshi DataTable ddd <b> Date : <?php if ($dateserch != '') {
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
                      <td>
                        <?php if ($detais['nextdate']) {
                          echo "saved";
                        } else { ?>
                          <Button date="{{$detais['date']}}" clintid="{{$detais['clintid']}}" clintname="{{$detais['clintname']}}" caseno="{{$detais['caseno']}}" paymentprice="{{$detais['paymentprice']}}" paymentstatus="{{$detais['paymentstatus']}}" casetitle="{{$detais['casetitle']}}" casetype="{{$detais['casetype']}}" courtname="{{$detais['courtname']}}" writenote="{{$detais['writenote']}}" procedure="{{$detais['procedure']}}" previsdate="{{$detais['previsdate']}}" nextdate="{{$detais['nextdate']}}" class="savechenge  btn btn-success">Save</Button>
                        <?php } ?>
                      </td>

                      <td>
                        <?php if ($detais['nextdate'] == '') {
                          echo "can't edit";
                        } else { ?>
                          <Button date="{{$detais['date']}}" clintid="{{$detais['clintid']}}" clintname="{{$detais['clintname']}}" caseno="{{$detais['caseno']}}" paymentprice="{{$detais['paymentprice']}}" paymentstatus="{{$detais['paymentstatus']}}" casetitle="{{$detais['casetitle']}}" casetype="{{$detais['casetype']}}" courtname="{{$detais['courtname']}}" writenote="{{$detais['writenote']}}" procedure="{{$detais['procedure']}}" previsdate="{{$detais['previsdate']}}" nextdate="{{$detais['nextdate']}}" class="saveedit btn btn-warning">Save Edit</Button>
                        <?php } ?>
                      </td>
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
      var nextdateOld = $(this).attr("nextdate");

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
          nextdate: nextdate,
          nextdateOld: nextdateOld
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


@endsection