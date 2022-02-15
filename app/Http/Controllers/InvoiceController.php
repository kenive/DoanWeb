<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoi=Invoice::orderBy('status')->paginate(5);
        
        return view('hoadon.index1',[
            'title'=>'Danh Sách Hóa Đơn',
            'invoi'=>$invoi,
        ]);
    }
    public function search(Request $request){
        $date1=$request->input('fromdate');
        $date2=$request->input('todate');
        $invoi=DB::table('invoices')->where('issuedDate','>=',$date1)->Where('issuedDate','<=',$date2)->get();
        //dd($invoi);
        return view('hoadon.searchinvoice',[
            'title'=>'Danh Sách Hóa Đơn',
            'invoi'=>$invoi,
        ]);


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        //$detail=DB::select('select * from invoices where id='.$id);
        $detail=DB::table('invoices')
                ->join('invoice_details','invoices.id','=','invoice_details.invoiceId')
                ->join('products','products.id','=','invoice_details.productId')
                ->where('invoices.id','=',$id)
                ->get();
        //dd($detail);

        /* foreach($detail as $a){
            echo $a->image;
        } */
        
       return view('hoadon.viewdetail',[
        'title'=>'Chi Tiết Hóa Đơn',
        'detail'=>$detail,
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoi=Invoice::where('id',$id)->first();
        return view('hoadon.editinvoice',[
            'title'=>'Cập nhật Trạng Thái',
            'invoi'=>$invoi, 
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request)
    {
        //
        //dd($request->input('id'));
       
        $invoi=Invoice::where('id',$request->input('id'))->first();
        $invoi->status=$request->input('status');
        
        if($invoi->save()){
            return redirect()->route('viewinvoice');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
