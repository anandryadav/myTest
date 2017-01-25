<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class AssignmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function assign_1()
    {
        return view('assignment/assignment1');
    }    
    public function assign_2()
    {
        return view('assignment/assignment2');
    }
    public function assign_3()
    {                
        return view('assignment/assignment3');
    }
    public function getAll() 
    {
        //fetching all location data
        $result = new Location();  
        $data = $result->getLocation();            
        if($data){
            return response()->json(['success'=> true,'data'=>$data]);
        }else{
            return response()->json(['success'=> false,'errors'=>'some thing worng']);                    
        }
    }
}
