<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Product;
use App\Models\accounts;
use App\Models\Cart;
use App\Models\invoice;
use App\Models\invoicedetail;
use DateTime;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;


class APIController extends Controller
{
    public function layDanhMuc()
    {
        $dsDanhMuc = ProductType::all();
        //$dsSanPham = Product::all();
        return response([
            'lstdanhmuc' => $dsDanhMuc
        ]);
    }

    public function getCart($id)
    {
        $cart = DB::select('select carts.id,products.name,products.id as "productid", products.image, products.price, carts.quantity from carts,products,accounts where carts.productId = products.id and carts.accountId = accounts.id and carts.accountId =' . $id);
        $total = 0;
        foreach ($cart as $c) {
            $total += $c->price * $c->quantity;
        }
        return response([
            'lstCartItem' => $cart,
            'total' => $total
        ]);
    }
    public function sanPham()
    {
        $dsSanPham = Product::all();

        return response([
            'lstprod' => $dsSanPham
        ]);
    }
    public function sanPhamid($id)
    {
        $dssp = Product::where('productTypeid', '=', $id)->get();

        return json_encode($dssp);
    }
    public function sanPhamnew($id)
    {
        $dssp= Product::where('new', '=', $id)->get();

        return  response([
            'lstproduct' => $dssp
        ]);
    }
    public function account($user, $password)
    {
        //$s=bcrypt($password);
        $dsaccount = accounts::where('userName', '=', $user)->where('Password', '=', $password)->first();

        if (empty($dsaccount)) {
            return json_encode(['sucsses' => false]);
        } else {
            return json_encode($dsaccount);
        }


        /* if (empty($dsaccount)) {
            return json_encode(['success' => false]);
        } else {
            return json_encode(['success' => true, 'data' => $dsaccount]);
        } */
    }
    public function accountname($user)
    {

        $dsaccount = accounts::where('userName', '=', $user)->first();

        return json_encode($dsaccount);
    }
    public function register(Request $request)
    {
        $username = accounts::where('userName', '=', $request->post('name'))->first();
        if (empty($username)) {
            $user = new accounts();
            $user->userName = $request->post('name');
            $user->Password = $request->post('password');
            $user->Email = $request->post('email');
            $user->Phone = "";
            $user->Address = "";
            $user->FullName = "";
            $user->avatar = "";
            $user->status = 0;
            if ($user->save()) {
                return json_encode(['sucsses' => true]);
            } else {

                return json_encode(['sucsses' => false]);
            }
        } else {
            return json_encode(['sucsses' => false]);
        }
    }
    public function checkName($name)
    {
        $username = accounts::where('userName', '=', $name)->first();
        //$name = accounts::find($id);
        return json_encode($username);
        /* if (empty($username)) {
            return json_encode(['success' => false]);
        } 
        return json_encode(['success' => true]); */
    }
    public function login(Request $request)
    {
        $ds = accounts::where('userName', '=', $request->post('name'))->where('Password', '=', $request->post('password'))->first();
        if (empty($ds)) {

            return response([
                'acc' => null
            ]);
        } else {
            return response([
                'acc' => $ds
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $username = accounts::find($id);

        if (!empty($username)) {


            $username->Email = $request->post('email');
            $username->Phone = $request->post('phone');
            $username->Address = $request->post('address');
            $username->FullName = $request->post('name');

            if ($username->save()) {
                return json_encode(['sucsses' => true]);
            } else {

                return json_encode(['sucsses' => false]);
            }
        } else {
            return json_encode(['sucsses' => false]);
        }
    }
    public function editpassword(Request $request, $id)
    {
        //$user = accounts::find($id)->where('Password', '=', $request->post('password'))->first();
        $user = accounts::where('Password', '=', $request->post('password'))->where('id', '=', $id)->first();
        if (!empty($user)) {

            $user->Password = $request->post('newpassword');


            if ($user->save()) {
                return json_encode(['sucsses' => true]);
            } else {

                return json_encode(['sucsses' => false]);
            }
        } else {
            return json_encode(['sucsses' => false]);
        }
    }
    public function addcart(Request $request)
    {

        $cart = Cart::where('productId', '=', $request->post('productId'))->where('accountId', '=', $request->post('accountId'))->first();
        if (empty($cart)) {
            $cartItem = new Cart();
            $cartItem->fill(
                [
                    'accountId' => $request->post('accountId'),
                    'productId' => $request->post('productId'),
                    'quantity' => $request->post('quantity'),
                ]
            );
            if ($cartItem->save()) {
                return json_encode(['sucsses' => true]);
            } else {

                return json_encode(['sucsses' => false]);
            }
        } else {
            $cart->quantity += $request->post('quantity');
            $cart->save();
            return json_encode(['sucsses' => true]);
        }
    }
    public function deleteCart($id)
    {
        $cart = Cart::find($id);
        if (empty($cart)) {
            return json_encode([
                'sucsses' => false
            ]);
        } else {
            $cart->delete();
            return json_encode([
                'sucsses' => true
            ]);
        }
    }
    public function removeCart(Request $request)
    {

        $cart = Cart::where('productId', '=', $request->post('productId'))->where('accountId', '=', $request->post('accountId'))->first();
        if (empty($cart)) {
            $cartItem = new Cart();
            $cartItem->fill(
                [
                    'accountId' => $request->post('accountId'),
                    'productId' => $request->post('productId'),
                    'quantity' => $request->post('quantity'),
                ]
            );
            if ($cartItem->save()) {
                return json_encode(['sucsses' => true]);
            } else {

                return json_encode(['sucsses' => false]);
            }
        } else {
            $cart->quantity -= $request->post('quantity');
            $cart->save();
            return json_encode(['sucsses' => true]);
        }
    }
    public function invoice(Request $request)
    {
        
        $invoice=new invoice();
        $invoice->issuedDate=date('Y-m-d');
        $invoice->nameShopping = $request->post('name');
        $invoice->addressShoping = $request->post('address');
        $invoice->phoneShoping = $request->post('phone');
        $invoice->total = $request->post('tatol');
        $invoice->accountId = $request->post('accountid');
        $invoice->status = $request->post('status');
        $invoice->save();
        $cart = Cart::where('accountId','=',$request->accountid)->get();
            foreach($cart as $invd)
            {
                $invoicedetail=new invoicedetail();
                $invoicedetail->invoiceId =$invoice->id;
                $invoicedetail->productId  = $invd->productId;
                $invoicedetail->quantily = $invd->quantity;
                $invoicedetail->status = 1;
                $invoicedetail->save();
                $product=Product::where('id','=',$invoicedetail->productId)->first();
                $product->stock-= $invoicedetail->quantily;
                $product->update();
                $c=Cart::where('accountId','=',$request->accountid)->delete();

                    /* if($product->save()){
                        $c=Cart::where('accountId','=',$request->accountid)->delete();
                        if (empty($c)) {
                            return json_encode([
                                'sucsses' => false
                            ]);
                        } else {
                            return json_encode([
                                'sucsses' => true
                            ]);
                        }

                    
                 } */
            }  
        
        
        /* else{
            return json_encode(['sucsses' => false]);
        } */

    }

    public function getInvoicedetail($id)
    {
        $detail = DB::select('select invoice_details.id, products.name, products.image, products.price, invoice_details.quantily,invoices.issuedDate,invoices.nameShopping,invoices.addressShoping,invoices.phoneShoping,invoices.total from invoices,products,invoice_details where invoice_details.productId = products.id and invoice_details.invoiceId=invoices.id and invoices.id='.$id);

        return response([
            'detail'=>$detail, 
        ]
        );

    }
    public function getInvoice($accountid,$sta){

        $invo=invoice::where('accountId','=',$accountid)->where('status','=',$sta)->get();
       
            return response([
                'lstinvoice'=>$invo

            ]);
       

    }
    public function updateStatus(Request $request, $id){
        if($request->post('status')==4){
            $invoi=invoice::find($id);
        $prd=invoicedetail::where('invoiceId',$id)->get();
        foreach($prd as $c){
            $p=Product::where('id',$c->productId)->first();
            $p->stock+=$c->quantily;
            $p->update();
           
        }
        if(!empty($invoi)){

            $invoi->status=$request->post('status');
            
            if($invoi->update()){
                return response(['sucsses'=>true,'ds'=>$invoi]);
            }
            else{
                return response(['sucsses'=>false,'ds'=>$invoi]);
            }
            
        }

        }else{
            $invoi=invoice::find($id);
        $prd=invoicedetail::where('invoiceId',$id)->get();
        foreach($prd as $c){
            $p=Product::where('id',$c->productId)->first();
            $p->stock-=$c->quantily;
            $p->update();
           
        }
        if(!empty($invoi)){

            $invoi->status=$request->post('status');
            
            if($invoi->update()){
                return response(['sucsses'=>true,'ds'=>$invoi]);
            }
            else{
                return response(['sucsses'=>false,'ds'=>$invoi]);
            }
            
        }
        }

        

    }
    public function getHoaDon($id){
        $hd=invoice::find($id);
        return response(['lsthd'=>$hd]);
    }
    public function getd($id){
        //$prd=DB::select('select products.id, products.stock,invoice_details.quantily from products,invoice_details,invoices where invoice_details.productId = products.id and invoice_details.invoiceId=invoices.id and invoices.id='.$id);
        //$prd=DB::select("select * from products where id=".$id);
        /* foreach($prd as $c){
            return response(['lst'=>$c->id]);
        } */
        //$prs=Product::where($prd->id);
        $prd=invoicedetail::where('invoiceId',$id)->get();
        foreach($prd as $c){
            $p=Product::where('id',$c->productId)->first();
            $p->stock+=$c->quantily;
            $p->update();
           
        }
        //foreach
        //return response(['lst'=>$prd]);
    }

}
