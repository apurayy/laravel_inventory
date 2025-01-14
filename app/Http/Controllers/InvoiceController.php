<?php

namespace App\Http\Controllers;

use Exception;
use Inertia\Inertia;
use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\InvoiceProduct;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    function InvoicePage(){
        return Inertia::render('InvoiceListPage');
    }

    //Invoice-Create========================
    function InvoiceCreate(Request $request){
        DB::beginTransaction();

        try{
            $user_id=$request->header('id');
            $total=$request->input('total');
            $discount=$request->input('discount');
            $vat=$request->input('vat');
            $payable=$request->input('payable');

            $customer_id=$request->input('customer_id');

            $invoice=Invoice::create([
                'total'=>$total,
                'discount'=>$discount,
                'vat'=>$vat,
                'payable'=>$payable,
                'user_id'=>$user_id,
                'customer_id'=>$customer_id,
            ]);

            $invoiceID=$invoice->id;

            $products=$request->input('products');

            foreach($products as $EachProduct){
                InvoiceProduct::create([
                    'invoice_id'=>$invoiceID,
                    'user_id'=>$user_id,
                    'product_id'=>$EachProduct['product_id'],
                    'qty'=>$EachProduct['qty'],
                    'sale_price'=>$EachProduct['sale_price'],
                ]);
            }

            DB::commit();

            return 1;

        }
        catch(Exception $e){
            DB::rollBack();
            return 0;
        }
    }


    //Invoice-List========================
    function InvoiceList(Request $request){
        $user_id=$request->header('id');
        return Invoice::where('user_id',$user_id)->with('customer')->get();
    }


    //Invoice-Details========================
    function InvoiceDetails(Request $request){
        $user_id=$request->header('id');

        $customer_details = Customer::where('user_id',$user_id)->where('id',$request->input('cus_id'))->first();

        $invoice_total = Invoice::where('user_id',$user_id)->where('id',$request->input('inv_id'))->first();

        $invoiceProduct=InvoiceProduct::where('invoice_id',$request->input('inv_id'))
            ->where('user_id',$user_id)->get();

        return array(
            'customer'=>$customer_details,
            'invoice'=>$invoice_total,
            'product'=>$invoiceProduct,
        );
    }


    //Invoice-Delete========================
    function InvoiceDelete(Request $request){
        DB::beginTransaction();

        try{
            $user_id=$request->header('id');
            InvoiceProduct::where('invoice_id',$request->input('inv_id'))
                ->where('user_id',$user_id)->delete();

            Invoice::where('id',$request->input('inv_id'))->delete();

            DB::commit();

            return 1;
        }
        catch(Exception $e){
            DB::rollBack();
            return 0;
        }
    }

}
