<?php

namespace App\Http\Controllers;

use App\Models\caseimage;
use App\Models\casepdf;
use App\Models\ClintPashiDetail;
use App\Models\FullClientDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class WebFrontController extends Controller
{
    //
    public function home(){
        return view('webfront/index');

    }
    public function about(){
        return view('webfront/about');

    }
    public function blog(){
        return view('webfront/blog');

    }
    public function contact(){
        return view('webfront/contact');

    }
    public function portfolio(){
        return view('webfront/portfolio');

    }
    public function service(){
        return view('webfront/service');

    }
    public function single(){
        return view('webfront/single');

    }
    public function team(){
        return view('webfront/team');

    }

    public function clintlogin(Request $request){
        return view('webfront/clintlogin');
    }

    public function clintloginaction(Request $request){
        $clintid = $request->clintid;
        $clintpass= $request->password;
        $clintchek = FullClientDetail::where('clintid', $clintid)->where('password', $clintpass)->first();
        if($clintchek){
            if($clintchek['activation'] != 'deactiveted'){
                $FullClientDetail = FullClientDetail::where('clintid', $clintid)->first();
                $ClintPashiDetail = ClintPashiDetail::where('clintid', $clintid)->get();
                $caseimage = caseimage::where('clintid', $clintid)->get();
                $casepdf = casepdf::where('clintid', $clintid)->get();
                return view('webfront/clintprofile', compact('FullClientDetail', 'ClintPashiDetail','casepdf' ,'caseimage'));
        }else{
            echo "data not mache or your not active";
            return view('webfront/clintlogin');
        }

        }else{
            echo "data not mache or your not active";
            return view('webfront/clintlogin');
        }
  
    }

    
}
