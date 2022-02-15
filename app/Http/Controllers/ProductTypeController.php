<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Http\Requests\StoreProductTypeRequest;
use App\Http\Requests\UpdateProductTypeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    protected function fixImage(ProductType $loai){
        if(Storage::disk('public')->exists($loai->imageUrl)){
            $loai->imageUrl=Storage::url($loai->imageUrl);
           
        }else{
            $loai->imageUrl='/img/soi.jpg';

        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* return view('loaisanpham.index1',[
            'title'=>'Danh Sách'
        ]); */
        $loaisp=ProductType::orderBy('created_at')->paginate(3);
        
        foreach($loaisp as $sp){
            $this->fixImage($sp);
        }
        
        return view('loaisanpham.index1',[
            'title'=>'Danh Sách Loại Sản Phẩm',
            'loaisp'=>$loaisp,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('loaisanpham.add',[
            'title'=>'Thêm loại sản phẩm ',
            
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'name.required' => 'Vui lòng nhập tên loại',
            'imageUrl.required' => 'Vui lòng chọn ảnh',
        ];
        $this->validate($request,[
            'name'=>'required:filter',
            'imageUrl'=>'required:filter',
        ],$messages);

        $type= new ProductType();
        $type->name=$request->input('name');
        //$type->imageUrl='';
        $type->status=$request->input('radio1');
      
        if($request->hasFile('imageUrl')){
            $type->imageUrl=$request->file('imageUrl')->store('images/addImage'.$request->input('imageUrl'),'public');

        }
        $type->save();
        return Redirect::route('viewproducttype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
        $loaisp=ProductType::all()->paginate(3);
        foreach($loaisp as $sp){
            $this->fixImage($sp);
        }
        return view('loaisanpham.index1',[
            'title'=>'Danh Sách',
            'loaisp'=>$loaisp,
            'lstSanPham'=>$productType->sanPhams

           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $loaisp=ProductType::where('id',$id)->first();
        return view('loaisanpham.edit',[
            'title'=>'Cập nhật loại sản phẩm',
            'loaisp'=>$loaisp
           
        ]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductTypeRequest  $request
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request)
    {
        //
        $loai=ProductType::where('id',$request->id)->first();
        $loai->name=$request->input('name');
        //$loai->imageUrl='';
        $loai->status=$request->input('radio1');
        if($request->hasFile('imageUrl')){
            $loai->imageUrl=$request->file('imageUrl')->store('images/updateImage'.$request->input('imageUrl'),'public');

        }
        $loai->save();
    
        return Redirect::route('viewproducttype');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        //
       ProductType::where('id',$id)->delete();
      
        return Redirect::route('viewproducttype');

    }
}
