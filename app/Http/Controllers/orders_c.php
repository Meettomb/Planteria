<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\order_cart;
use App\Models\cart;
use App\Models\product_data;


class orders_c extends Controller
{
    //
    public function checkout_order_add(Request $req)
    {
        $order = new order();
        $randomNumber = random_int(1000000, 9999999);
        $order->email = $req->email;
        $order->first_name = $req->first_name;
        $order->last_name = $req->last_name;
        $order->address = $req->address;
        $order->city = $req->city;
        $order->state = $req->state;
        $order->pincode = $req->pincode;
        $order->phone = $req->phone;
        $order->price = $req->price;
        $order->payment_method = $req->payment_method;

        $userid = session()->get('userid');
        $order->uid = $userid;

                
        $data = cart::where('uid',$userid)->get();
        foreach ($data as $item) {

            $order_cart = new order_cart();
            $order_cart->uid = $item->uid;
            $order_cart->uname = $item->uname;
            $order_cart->email = $item->email;
            $order_cart->pid = $item->pid;
            $order_cart->p_image = $item->p_image;
            $order_cart->product_name = $item->product_name;
            $order_cart->dis_price = $item->dis_price;
            $order_cart->quantity = $item->quantity;
            $order_cart->order_id = $randomNumber;
            $order_cart->status = 'pending';
            $order_cart->save();
        } 
        
        $id=$order_cart->save();
        if($id>0)
        {          
            foreach ($data as $item) {
                $product = product_data::find($item->pid);

                if ($product) {
                    $newQuantity = $product->quantity - $item->quantity; // Decrease by 1 for each purchase
        
                    $product->quantity = $newQuantity;
                    $product->save();
        
                    if ($newQuantity <= 0) {
                        // Handle out-of-stock scenario
                    }
        
                }  
            }
            $data->each->delete();
            return redirect('show_orders');
        }
    } 



    public function checkout_single_order_add(Request $req)
    {
        $order = new order();

        $randomNumber = random_int(1000000, 9999999);

        $order->email = $req->email;
        $order->first_name = $req->first_name;
        $order->last_name = $req->last_name;
        $order->address = $req->address;
        $order->city = $req->city;
        $order->state = $req->state;
        $order->pincode = $req->pincode;
        $order->phone = $req->phone;
        $order->price = $req->dis_price;
        $order->payment_method = $req->payment_method;        
        $order->order_id = $randomNumber;

        
        $userid = session()->get('userid');
        $order->uid = $userid;

        $result=$order->save();
                
        $order_cart = new order_cart();
        $order_cart->uid = $userid;
        $order_cart->uname = $req->first_name;
        $order_cart->email = $req->email;
        $order_cart->pid = $req->pid;
        $order_cart->p_image = $req->p_image;
        $order_cart->product_name = $req->product_name;
        $order_cart->dis_price = $req->dis_price;
        $order_cart->quantity = 1;
        $order_cart->status = 'pending';
        
        
        $order_cart->order_id = $randomNumber;
        $order_cart->save();
    
        if ($result > 0) {
            // Decrease product quantity in the database
            $product = product_data::find($req->pid);
    
            if ($product) {
                $newQuantity = $product->quantity - 1; // Decrease by 1 for each purchase
    
                $product->quantity = $newQuantity;
                $product->save();
    
                if ($newQuantity <= 0) {
                    // Handle out-of-stock scenario
                }
    
                return redirect('show_orders');
            } 
        }

        if($result>0)
        {
            return redirect('show_orders');
        }
    } 

    public function order_data(){
        $userid = session()->get('userid');
        $data = order_cart::where('uid',$userid)->get();
        return view('orders',['data'=>$data]);
    }

    public function cancel_order($id){
        $data = order_cart::find($id);
        
        $data -> delete();
        return redirect('/show_orders');
    }

    public function all_order_data(){
        $data = order_cart::all();
        $data2 = order::all();
        return view('all_order',['data'=>$data,'data2'=>$data2]);
    }



    public function status_data($id){
        $data = order_cart::find($id);
        return view('edit_order',['data'=>$data]);
    }


    public function updateStatus(Request $req)
{
    $order = order_cart::find($req->id);
    $order->status = $req->status;
    $order->save();

    return redirect('all_order');
}
}
