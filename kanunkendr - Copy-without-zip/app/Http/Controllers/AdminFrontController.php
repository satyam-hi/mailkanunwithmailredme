<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLoginModel;
use App\Models\caseimage;
use App\Models\casepdf;
use App\Models\FullClientDetail;
use App\Models\ClintPashiDetail;
use App\Models\inqury;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AdminFrontController extends Controller
{
  //

  public function adminlogin()
  {
    return view('adminfront/login');
  }
  public function adminloginaction(Request  $req)
  {
    $AdminLoginModel =  AdminLoginModel::all();
    if ($AdminLoginModel['0']->email == $req->email && $AdminLoginModel['0']->password == $req->password) {
      session(['adminemail' => $AdminLoginModel['0']->email, 'adminpass' => $AdminLoginModel['0']->password]);

      return redirect('/admin-dashboard');
      //return  view('adminfront/index');
    } else {
      "data not  match";
      return view('adminfront/login');
    }
  }

  public function logout(Request  $request)
  {
    $request->session()->forget(['adminemail', 'adminpass']);
    return view('adminfront/login');
  }

  public function dashboard(Request  $request)
  {
    $dateserch = $request->date;
    date_default_timezone_set("Asia/Calcutta");;
    $date = date('Y-m-d');
    $ClintPashiDetail = ClintPashiDetail::where('date', $date)->get();
    $masseges = inqury::all();
    return  view('adminfront/dashboard', compact('ClintPashiDetail', 'dateserch','masseges'));
  }

  public function addclint(Request  $request)
  {
    return  view('adminfront/addclint');
  }

  public function addclintaction(Request  $request)
  {
    // echo $clintimages = $request->file('clintimage');
    // echo $clintimages->getClientOriginalName();
    // die();
    //   "clint add action";
    $clintid = time();
    $caseno = $request->caseno;
    $casetitle = $request->casetitle;
    $clintname = $request->clintname;
    $clintfathername = $request->clintfathername;
    $mobile = $request->mobile;
    $clintaddress = $request->clintaddress;
    $emailaddress = $request->emailaddress;
    $password = $request->password;
    $clintadvocatename = $request->clintadvocatename;
    $staffadvocatename = $request->staffadvocatename;
    $opposedname = $request->opposedname;
    $opposedadvocatename = $request->opposedadvocatename;
    $casetype = $request->casetype;
    $courtname = $request->courtname;
    $judgename = $request->judgename;
    $previousdate = $request->previousdate;
    $nextdate = $request->nextdate;
    $moredata = $request->moredata;
    $clintimages = $request->file('clintimage');
    $clintimage =  $clintimages->getClientOriginalName();
    $request->file('clintimage')->move("fotoupload", $clintimage);
    $documentimage = $request->documentimage;
    print_r($documentimage);
    $documentpdf = $request->documentpdf;
    print_r($documentpdf);
    $casestatus = $request->casestatus;
    $paymentprice = $request->paymentprice;
    $paymentstatus = $request->paymentstatus;
    $activation = $request->activation;
    //  $data= $request->all();
    //  print_r($data);

    $date = [$previousdate, $nextdate];
    $dates = json_encode($date);

    $clinttable = new FullClientDetail;
    $clinttable->clintid = $clintid;
    $clinttable->caseno = $caseno;
    $clinttable->casetitle = $casetitle;
    $clinttable->clintname = $clintname;
    $clinttable->clintfathername = $clintfathername;
    $clinttable->mobile = $mobile;
    $clinttable->clintaddress = $clintaddress;
    $clinttable->emailaddress = $emailaddress;
    $clinttable->password = $password;
    $clinttable->clintimage = $clintimage;
    $clinttable->clintadvocatename = $clintadvocatename;
    $clinttable->staffadvocatename = $staffadvocatename;
    $clinttable->opposedname = $opposedname;
    $clinttable->opposedadvocatename = $opposedadvocatename;
    $clinttable->casetype = $casetype;
    $clinttable->courtname = $courtname;
    $clinttable->judgename = $judgename;
    $clinttable->documentimage = "[]";
    $clinttable->documentpdf = "[]";
    $clinttable->hearingdate = $dates;
    $clinttable->casestatus = $casestatus;
    $clinttable->paymentprice = $paymentprice;
    $clinttable->paymentstatus = $paymentstatus;
    $clinttable->moredata = $moredata;
    $clinttable->activation = $activation;
    $clinttable->save();


    $clintpashitabl =  new ClintPashiDetail;
    $clintpashitabl->date = $previousdate;
    $clintpashitabl->clintid = $clintid;
    $clintpashitabl->clintname = $clintname;
    $clintpashitabl->caseno = $caseno;
    $clintpashitabl->paymentprice = $paymentprice;
    $clintpashitabl->paymentstatus = $paymentstatus;
    $clintpashitabl->casetitle = $casetitle;
    $clintpashitabl->casetype = $casetype;
    $clintpashitabl->courtname = $courtname;
    $clintpashitabl->writenote = '';
    $clintpashitabl->procedure = '';
    $clintpashitabl->previsdate = $previousdate;
    $clintpashitabl->nextdate = $nextdate;
    $clintpashitabl->save();



    $clintpashitabl =  new ClintPashiDetail;
    $clintpashitabl->date = $nextdate;
    $clintpashitabl->clintid = $clintid;
    $clintpashitabl->clintname = $clintname;
    $clintpashitabl->caseno = $caseno;
    $clintpashitabl->paymentprice = '';
    $clintpashitabl->paymentstatus = '';
    $clintpashitabl->casetitle = $casetitle;
    $clintpashitabl->casetype = $casetype;
    $clintpashitabl->courtname = $courtname;
    $clintpashitabl->writenote = ' ';
    $clintpashitabl->procedure = '';
    $clintpashitabl->previsdate = $previousdate;
    $clintpashitabl->nextdate = '';
    $clintpashitabl->save();

    echo "all data seved";
    return redirect('/admin-allclint-profile-view');
  }




public function editclintaction(Request $request){
     $id = $request->id;
    $caseno = $request->caseno;
    $casetitle = $request->casetitle;
    $clintname = $request->clintname;
    $clintfathername = $request->clintfathername;
    $mobile = $request->mobile;
    $clintaddress = $request->clintaddress;
    $emailaddress = $request->emailaddress;
    $password = $request->password;
    $clintadvocatename = $request->clintadvocatename;
    $staffadvocatename = $request->staffadvocatename;
    $opposedname = $request->opposedname;
    $opposedadvocatename = $request->opposedadvocatename;
    $casetype = $request->casetype;
    $courtname = $request->courtname;
    $judgename = $request->judgename;
    $moredata = $request->moredata;
    if($request->hasFile('clintimage')){
      $clintimages = $request->file('clintimage');
      $clintimage =  $clintimages->getClientOriginalName();
      $request->file('clintimage')->move("fotoupload", $clintimage);
    }
    $casestatus = $request->casestatus;
    $activation = $request->activation;

    $clinttable =FullClientDetail::find($id);
    $clinttable->caseno = $caseno;
    $clinttable->casetitle = $casetitle;
    $clinttable->clintname = $clintname;
    $clinttable->clintfathername = $clintfathername;
    $clinttable->mobile = $mobile;
    $clinttable->clintaddress = $clintaddress;
    $clinttable->emailaddress = $emailaddress;
    $clinttable->password = $password;
    if($request->hasFile('clintimage')){
    $clinttable->clintimage = $clintimage;}
    $clinttable->clintadvocatename = $clintadvocatename;
    $clinttable->staffadvocatename = $staffadvocatename;
    $clinttable->opposedname = $opposedname;
    $clinttable->opposedadvocatename = $opposedadvocatename;
    $clinttable->casetype = $casetype;
    $clinttable->courtname = $courtname;
    $clinttable->judgename = $judgename;
    $clinttable->casestatus = $casestatus;
    $clinttable->moredata = $moredata;
    $clinttable->activation = $activation;
    $clinttable->save();

    return redirect('/admin-allclint-profile-view');
}




  public function allClintProfilrviws()
  {
    $FullClientDetail = FullClientDetail::all();
    return view('adminfront/allclintporfileview', compact('FullClientDetail'));
  }

  public function allClintProfilrviwsserch(Request  $request)
  {
    if ($request->caseno != "") {
      // echo "case no ";  echo $cseno = $request->caseno; echo "<br>";
      $cseno = $request->caseno;
      $FullClientDetail = FullClientDetail::where('caseno', $cseno)->get();
      return view('adminfront/allclintporfileview', compact('FullClientDetail'));
    } elseif ($request->clintid != "") {
      // echo "clint id";  echo $request->clintid; echo "<br>";
      $clintid = $request->clintid;
      $FullClientDetail = FullClientDetail::where('clintid', $clintid)->get();
      return view('adminfront/allclintporfileview', compact('FullClientDetail'));
    } elseif ($request->clintname != "") {
      // echo "clint name"; echo $request->clintname; echo "<br>";
      $clintname = $request->clintname;
      $FullClientDetail = FullClientDetail::where('clintname', $clintname)->get();
      return view('adminfront/allclintporfileview', compact('FullClientDetail'));
    } elseif ($request->casetype != "") {
      // echo "case type"; echo $request->casetype; echo "<br>";
      $casetyp = $request->casetype;
      $FullClientDetail = FullClientDetail::where('casetype', $casetyp)->get();
      return view('adminfront/allclintporfileview', compact('FullClientDetail'));
    } else {
      return redirect('/admin-allclint-profile-view');
    }
  }

  public function allClinttableviws()
  {
    $FullClientDetail = FullClientDetail::all();
    return view('adminfront/allclinttableview', compact('FullClientDetail'));
  }

  public function pashitable(Request  $request)
  {
    // $ClintPashiDetail = ClintPashiDetail::all();
    $dateserch = $request->date;
    date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d');
    $ClintPashiDetail = ClintPashiDetail::where('date', $date)->get();
    return view('adminfront/pashitable', compact('ClintPashiDetail', 'dateserch'));
  }
  public function pashitableserch(Request  $request)
  {
    // $ClintPashiDetail = ClintPashiDetail::all();
     $dateserch = $request->date;
      // $dateserch1 = $request->date1;
    // $date= date('Y-m-d') ;
    $ClintPashiDetail = ClintPashiDetail::where('date', $dateserch)->get();
    // $ClintPashiDetail = ClintPashiDetail::whereBetween('date', [$dateserch, $dateserch1])->get();
    return view('adminfront/pashitable', compact('ClintPashiDetail', 'dateserch'));
  }

  public function peshiupdatenextdate(Request  $request)
  {
    $date = $request->date;
    $clintid = $request->clintid;
    $clintname = $request->clintname;
    $caseno = $request->caseno;
    $paymentprice = $request->paymentprice;
    $paymentstatus = $request->paymentstatus;
    $casetitle = $request->casetitle;
    $casetype = $request->casetype;
    $courtname = $request->courtname;
    $writenote = $request->writenote;
    $procedure = $request->procedure;
    $previsdate = $request->previsdate;
    $nextdate = $request->nextdate;

    // $dataForCheck= ClintPashiDetail::where('clintid' = $clintid,'date' = $nextdate);
    $dataForCheck= ClintPashiDetail:: where('clintid', '=', $clintid)->where('date', '=', $nextdate)->get();
    if(count($dataForCheck)>0){
      // $ClintPashiDetail = ClintPashiDetail::updated
      $ClintPashiDetail = ClintPashiDetail::where('clintid', $clintid)
      ->where('date', $nextdate)
      ->update(['previsdate' => $date]);
      $ClintPashiDetail = ClintPashiDetail::updateOrCreate(
        ['clintid' => $clintid, 'date' => $date],
        [
          'date' => $date,
          'clintid' => $clintid,
          'clintname' => $clintname,
          'caseno' => $caseno,
          'paymentprice' => $paymentprice,
          'paymentstatus' => $paymentstatus,
          'casetitle' => $casetitle,
          'casetype' => $casetype,
          'courtname' => $courtname,
          'writenote' => $writenote,
          'procedure' => $procedure,
          'previsdate' => $previsdate,
          'nextdate' => $nextdate
        ]
      );
      return response()->json([
        'data' => 'Your data saved !'
      ]);
    }else{
    // ------- wtith next date------------
    $ClintPashiDetail = ClintPashiDetail::updateOrCreate(
      ['clintid' => $clintid, 'date' => $date],
      [
        'date' => $date,
        'clintid' => $clintid,
        'clintname' => $clintname,
        'caseno' => $caseno,
        'paymentprice' => $paymentprice,
        'paymentstatus' => $paymentstatus,
        'casetitle' => $casetitle,
        'casetype' => $casetype,
        'courtname' => $courtname,
        'writenote' => $writenote,
        'procedure' => $procedure,
        'previsdate' => $previsdate,
        'nextdate' => $nextdate
      ]
    );
    // ------- without next date------------
    $ClintPashiDetail = ClintPashiDetail::updateOrCreate(
      ['clintid' => $clintid, 'previsdate' => $date, 'date' => $nextdate],
      [
        'date' => $nextdate,
        'clintid' => $clintid,
        'clintname' => $clintname,
        'caseno' => $caseno,
        'paymentprice' => '',
        'paymentstatus' => '',
        'casetitle' => $casetitle,
        'casetype' => $casetype,
        'courtname' => $courtname,
        'writenote' => '',
        'procedure' => '',
        'previsdate' => $date,
        'nextdate' => ''
      ]
    );
    // return view('adminfront/pashitable', compact('ClintPashiDetail','dateserch'));
    return response()->json([
      'data' => 'Your data saved !'
    ]);
  }
  }



  public function peshiupdatenextdateedit(Request  $request)
  {
    $date = $request->date;
    $clintid = $request->clintid;
    $clintname = $request->clintname;
    $caseno = $request->caseno;
    $paymentprice = $request->paymentprice;
    $paymentstatus = $request->paymentstatus;
    $casetitle = $request->casetitle;
    $casetype = $request->casetype;
    $courtname = $request->courtname;
    $writenote = $request->writenote;
    $procedure = $request->procedure;
    $previsdate = $request->previsdate;
    $nextdate = $request->nextdate;
    $nextdateOld =  $request->nextdateOld;

    // ------- wtith next date------------
    $ClintPashiDetail = ClintPashiDetail::updateOrCreate(
      ['clintid' => $clintid, 'date' => $date],
      [
        'date' => $date,
        'clintid' => $clintid,
        'clintname' => $clintname,
        'caseno' => $caseno,
        'paymentprice' => $paymentprice,
        'paymentstatus' => $paymentstatus,
        'casetitle' => $casetitle,
        'casetype' => $casetype,
        'courtname' => $courtname,
        'writenote' => $writenote,
        'procedure' => $procedure,
        'previsdate' => $previsdate,
        'nextdate' => $nextdate
      ]
    );


// edit old next date --------


$ClintPashiDetail = ClintPashiDetail::updateOrCreate(
  ['clintid' => $clintid, 'date' => $nextdateOld],
  [
    'date' =>  $nextdate,
    'clintid' => $clintid,
    'clintname' => $clintname,
    'caseno' => $caseno,
    'paymentprice' => $paymentprice,
    'paymentstatus' => $paymentstatus,
    'casetitle' => $casetitle,
    'casetype' => $casetype,
    'courtname' => $courtname,
    'writenote' => $writenote,
    'procedure' => $procedure,
    'previsdate' => $date,
    'nextdate' => ''
  ]
);


    return response()->json([
      'data' => 'Your edit data saved !'
    ]);
  }


  public function profile(Request $request)
  {
    $clintid = $request->clintid;
    $FullClientDetail = FullClientDetail::where('clintid', $clintid)->first();
    $ClintPashiDetail = ClintPashiDetail::where('clintid', $clintid)->get();
    $caseimage = caseimage::where('clintid', $clintid)->get();
    $casepdf = casepdf::where('clintid', $clintid)->get();
    return view('adminfront/profile', compact('FullClientDetail', 'ClintPashiDetail','caseimage','casepdf'));
  }

  public function inqurysms(Request $request) {
    echo $name =   $request->name;
    echo $mobile =   $request->mobile;
    echo $email =   $request->email;
    echo $subject =   $request->subject;
    echo $message =   $request->message;
    date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d');
    inqury::updateOrCreate([
        'name'=>$name,
        'mobile'=> $mobile,
        'email' => $email,
     'subject'=> $subject ,
     'message' => $message,
     'views' => '1',
    'date' => $date
    ]);
    return redirect('/contact?id=Your Massage sent !');
  }



  public function caseimage(Request $request){
    echo  $clintid = $request->clintid;
     if($files=$request->file('images')){
      foreach($files as $file){
          $name=$file->getClientOriginalName();
          $file->move('image',$name);
          $images=$name;
          $caseimage=  new caseimage;
          $caseimage->clintid =  $request->clintid;
          $caseimage->image = $images;
          $caseimage->save();
          echo "save img";
          // return Redirect::back()->with($clintid);
      }
      return redirect('/admin-allclint-profile-view');
  }else{
    echo " not save img";
  }

  }
 

  public function casepdf(Request $request){
    echo $clintid = $request->clintid;
     if($files=$request->file('pdf')){
      foreach($files as $file){
          $name=$file->getClientOriginalName();
          $file->move('pdf',$name);
          $images=$name;
          $caseimage=  new casepdf;
          $caseimage->clintid =  $request->clintid;
          $caseimage->pdf = $images;
          $caseimage->save();
          echo "save pdf";
      }
      
  }else{
    echo " not save pdf";
  }
  return redirect('/admin-allclint-profile-view');
  }
 

  public function inqurydelete(Request $request){
    echo $id= $request->id;
      $res=inqury::find($id)->delete();
    return redirect('/admin-dashboard');
    
  }

  public function imagedelete(Request $request){
    echo $id= $request->id;
      $res=caseimage::find($id)->delete();
      return redirect('/admin-allclint-profile-view');
    
  }
  public function pdfdelete(Request $request){
    echo $id= $request->id;
      $res=casepdf::find($id)->delete();
      return redirect('/admin-allclint-profile-view');
    
  }

  public function clintdelete(Request $request){
    // echo $request->id;
   echo $clintid =  $request->clintid;
   $ClintPashiDetail = ClintPashiDetail::where('clintid', $clintid)->delete();
   $caseimage = caseimage::where('clintid', $clintid)->delete();
   $casepdf = casepdf::where('clintid', $clintid)->delete();
   $FullClientDetail = FullClientDetail::where('clintid', $clintid)->delete();
   return redirect('/admin-allclint-profile-view');


  }

  public function adminsetting(Request  $request)
  {
     $adminData =   AdminLoginModel::get()->first();
    //  return $adminData['name'];
    return  view('adminfront/adminsetting',compact('adminData',));
  }
  public function adminsettingAction(Request  $request)
  {
    $id = $request->id;
    $name = $request->name;
    $email = $request->email;
    $password = $request->password;
    AdminLoginModel::where('id', $id)
    ->update(['name' => $name,'email' => $email,'password' => $password]);

    return redirect('/admin-setting');
  }
  

}
