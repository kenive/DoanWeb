<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    protected function fixImage(Product $sp){
        if(Storage::disk('public')->exists($sp->image)){
            $sp->image=Storage::url($sp->image);
           
        }else{
            $sp->image='/img/soi.jpg';

        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $lstsp=Product::orderBy('created_at')->paginate(5);
        $loai=ProductType::all();
        foreach($lstsp as $sp){
            $this->fixImage($sp);
        }
        if($key=request()->key){
            $lstsp=Product::orderBy('created_at')->where('name','like','%'.$key.'%')->paginate(5);
            foreach($lstsp as $sp){
                $this->fixImage($sp);
            }

        }
        return view('sanpham.index1',[
            'title'=>'Danh Sách Sản Phẩm ',
            'lstsp'=>$lstsp,
            'loai'=>$loai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaisp=ProductType::all();
        return view('sanpham.addproduct',[
            'title'=>'Thêm sản phẩm ',
            'loaisp'=>$loaisp,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'stock.required' => 'Vui lòng nhập số lượng',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'productTypeid.required' => 'Vui lòng chọn loại sản phẩm',
            'description.required' => 'Vui lòng nhập mô tả',
            'image.required' => 'Vui lòng chọn ảnh', 
        ];
        $this->validate($request,[
            'name'=>'required:filter',
            'stock'=>'required:filter',
            'price'=>'required:filter',
            'productTypeid'=>'required:filter',
            'image'=>'required:filter',
            'description'=>'required:filter',
            
            
        ],$messages);

        $prod= new Product();
        $prod->name=$request->input('name');
        $prod->stock=$request->input('stock');
        $prod->price=$request->input('price');
        $prod->description=$request->input('description');
        $prod->productTypeid=$request->input('productTypeid');
        $prod->new=$request->input('radio1');
        $prod->status=$request->input('radio2');
        if($request->hasFile('image')){
            $prod->image=$request->file('image')->store('images/addproduct'.$request->input('image'),'public');

        }
        $prod->save();
        return Redirect::route('viewproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sp=Product::where('id',$id)->first();
        $loai=ProductType::all();
        //dd($sp);
        return view('sanpham.editproduct',[
            'title'=>'Cập nhật sản phẩm',
            'sp'=>$sp,
            'loai'=>$loai
           
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request)
    {
        //

        $messages = [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'stock.required' => 'Vui lòng nhập số lượng',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'productTypeid.required' => 'Vui lòng chọn loại sản phẩm',
            'description.required' => 'Vui lòng nhập mô tả',
           
        ];
        $this->validate($request,[
            'name'=>'required:filter',
            'stock'=>'required:filter',
            'price'=>'required:filter',
            'productTypeid'=>'required:filter',
           
            'description'=>'required:filter',
        ],$messages);
        $sp=Product::where('id',$request->id)->first();
        //dd($sp);
        $sp->name=$request->input('name');
        $sp->stock=$request->input('stock');
        $sp->price=$request->input('price');
        $sp->productTypeid=$request->input('productTypeid');
        $sp->description=$request->input('description');
        $sp->new=$request->input('radio1');
        $sp->status=$request->input('radio2');
        if($request->hasFile('image')){
            $sp->image=$request->file('image')->store('images/updateproduct'.$request->input('image'),'public');

        }
        $sp->save();
        return Redirect::route('viewproduct');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        //
        Product::where('id',$id)->delete();
      
        return Redirect::route('viewproduct');
    }
}
