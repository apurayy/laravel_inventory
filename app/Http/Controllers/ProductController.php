<?php

namespace App\Http\Controllers;

use Exception;
use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ProductPage(){
        return Inertia::render('ProductPage');
    }

    //Product-Create===================
    function ProductCreate(Request $request){
        try{
            $user_id=$request->header('id');
            $category_id=$request->input('category_id');
            Product::create([
                'user_id'=>$user_id,
                'category_id'=>$category_id,
                'name'=>$request->input('name'),
                'price'=>$request->input('price'),
                'unit'=>$request->input('unit'),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Product Create Successfully'
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'status' => 'Faild',
                'message' => 'Product Create Faild'
            ]);
        }

    }


    //Product-List===================
    function ProductList(Request $request){
        $user_id=$request->header('id');
        return Product::where('user_id',$user_id)->get();
    }


    //Product-Delete===================
    function ProductDelete(Request $request){
        $product_id=$request->input('id');
        $user_id=$request->header('id');
        return Product::where('id',$product_id)
            ->where('user_id',$user_id)->delete();
    }

    //Product-By-Id===================
    function ProductById(Request $request){
        $product_id=$request->input('id');
        $user_id=$request->header('id');
        return Product::where('id',$product_id)
            ->where('user_id',$user_id)->first();
    }

    //Product-Update===================
    function ProductUpdate(Request $request){
        $product_id=$request->input('id');
        $user_id=$request->header('id');
        return Product::where('id',$product_id)
            ->where('user_id',$user_id)->update([
                'name'=>$request->input('name'),
                'price'=>$request->input('price'),
                'unit'=>$request->input('unit'),
            ]);
    }

}


