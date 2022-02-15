<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductType;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$loaisp=ProductType::all();
        $tongsp=Product::where('status',0)->count();
        $tonghd=Invoice::where('status',3)->count();
        $tonguser=accounts::where('status',0)->count();
        $money=Invoice::where('status',3)->get();
        $t=0;
        foreach($money as $a){
            $t+=+$a->total;
        }
        //dd($t);
        return view('home',['title'=>'Trang Quản Trị','tongsp'=>$tongsp,'tonghd'=>$tonghd,'tonguser'=>$tonguser,'t'=>$t]);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaisp=ProductType::all();
        return view('home',['title'=>'Trang Quản Trị','loaisp'=>$loaisp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
