<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakeCompnayController extends Controller
{
    public function generateCompany(Request $request){
        $alphas='abcdefghijklmnopqrstuvwyz';
        $arr_alpha=str_split($alphas);
        $list_names=array();
        $param=$request->query('name_len');
        $logos=array('mdi mdi-eslint','mdi mdi-ethereum','mdi mdi-evernote');
        $count_logo=0;
        $status=null;
        $message=null;
        if($request->has('name_len') && $request->has('generate_len')){
            $generate_len=$request->query('generate_len');
            $name_len=$request->query('name_len');
            for($i=0;$i<$generate_len;$i++){
                $generate_name="";
                for($j=0;$j<$name_len;$j++){
                    $rand_num=rand(0,count($arr_alpha)-1);
                    $generate_name=$generate_name.$arr_alpha[$rand_num];
                }
                array_push($list_names,array($generate_name,$logos[$count_logo]));
                $count_logo++;
                if(count($logos)==$count_logo){
                    $count_logo=0;
                }
            }
            $message=$list_names;
            $status=200;
        }
        else{
            $status=400;
            $message="Fill Necessary Filled !";
        }
        return response()->json(['status'=>$status,'message'=>$message]);
    }
}
