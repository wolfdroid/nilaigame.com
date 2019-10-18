<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Controller;


class loginController extends BaseController
{
    public function Dashboard(request $req){
        $username = $req -> input('username');
        $password = $req -> input('password');
        
        $checkLogin = DB::table('protected.User')->where(['Username'=>$username, 'Password'=>$password])->get();
        if(count($checkLogin) >0){
            $title = 'nilaigame.com - Dashboard';
            return view ('pages.dashboard', compact('title'));
        }
        else{
            echo "Wrong!";
        }
    }

    function insert(request $req){
        $reviewtoken = $req -> input('revtoken');
        $reviewmark = $req -> input('revmark');
        $reviewcomment = $req -> input('revcom');
        $productid = $req -> input('prodid');
        $userid = $req -> input('userid');
        $username = $req -> input('username');
        $timestamp = time();

        $data = array(
            "Review_Token"=>$reviewtoken,
            "Review_Mark"=>$reviewmark,
            "Comment"=>$reviewcomment,
            "Product_ID"=>$productid,
            "User_ID"=>$userid,
            "Username"=>$username
        );

        DB::table('Review')->insert($data);
        echo"success";
    }

    //function display(){
    //    $data = DB::table('Review')->get();
    //    return view ('pages.dashboard', ['data'=> $datas]);
    //}
}
