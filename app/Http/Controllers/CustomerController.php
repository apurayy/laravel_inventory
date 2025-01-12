<?php

namespace App\Http\Controllers;

use Exception;
use Inertia\Inertia;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function CustomerPage(){
        return Inertia::render('CustomerPage');
    }

    //Customer-Create===============
    function CustomerCreate(Request $request){
        try{
            $user_id=$request->header('id');
            Customer::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'mobile'=>$request->input('mobile'),
                'user_id'=>$user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Customer Create Successfully'
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'status' => 'faild',
                'message' => 'Customer Create Faild'
            ]);
        }

    }


    //Customer-List===============
    function CustomerList(Request $request){
        $user_id=$request->header('id');
        return Customer::where('user_id',$user_id)->get();
    }


    //Customer-Delete===============
    function CustomerDelete(Request $request){
        $customer_id=$request->input('id');
        $user_id=$request->header('id');
        return Customer::where('id',$customer_id)
            ->where('user_id',$user_id)->delete();
    }


    //Customer-By-Id===============
    function CustomerById(Request $request){
        $customer_id=$request->input('id');
        $user_id=$request->header('id');
        return Customer::where('id',$customer_id)
            ->where('user_id',$user_id)->first();
    }


    //Customer-Update===============
    function CustomerUpdate(Request $request){
        $customer_id=$request->input('id');
        $user_id=$request->header('id');

        return Customer::where('id',$customer_id)
            ->where('user_id',$user_id)->update([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'mobile'=>$request->input('mobile'),
            ]);
    }

}
