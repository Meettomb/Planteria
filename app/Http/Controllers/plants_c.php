<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_data;
use App\Models\login_clients;
use App\Models\cart;

class plants_c extends Controller
{
    //

    

    public function add_plats(Request $req)
    {
        $filename1 = $req->file('img1')->getClientOriginalName();
        $destinationPath = '/images';
        $req->file('img1')->move(public_path($destinationPath),$filename1);
        $product = new product_data();
        $product->p_image= $filename1;

        $product->p_name=$req->p_name;
        $product->pm_category= $req->input('pm_category');
        $product->ps_category=$req->input('ps_category');
        $product->main_price=$req->main_price;
        $product->percentage=$req->percentage;
        $product->quantity=$req->quantity;
        $product->description=$req->description;
        $product->p_benefits=$req->p_benefits;

        $percentage = ($req->main_price * $req->percentage) / 100;
        $after_discount = $req->main_price - $percentage;
        $product->dis_price = $after_discount; 
        
        $id=$product->save();
        if($id>0)
        {
            return redirect('plant_insert');
        }
    }
    

    public function search_plants(){
        $info=product_data::all();
        return view('shop',['info'=>$info]);
    }

    public function indore_plants(){        
        $info=product_data::where('ps_category','Indoor plants')->get();
        return view('links.category',['info'=>$info]);
    }

    public function outdoor(){   
        $info=product_data::where('ps_category','Outdoor plants')->get();
        return view('links.category',['info'=>$info]);
    }
    public function fruit(){   
        $info=product_data::where('ps_category','Fruit plants')->get();
        return view('links.category',['info'=>$info]);
    }
    public function vegetable(){   
        $info=product_data::where('ps_category','vegetable plants')->get();
        return view('links.category',['info'=>$info]);
    }
    public function air(){   
        $info=product_data::where('ps_category','air plants')->get();
        return view('links.category',['info'=>$info]);
    }
    public function flower(){   
        $info=product_data::where('ps_category','flower plants')->get();
        return view('links.category',['info'=>$info]);
    }
    public function hanging(){   
        $info=product_data::where('ps_category','hanging plants')->get();
        return view('links.category',['info'=>$info]);
    }
    public function fruit_seed(){   
        $info=product_data::where('ps_category','Fruit Seed')->get();
        return view('links.category',['info'=>$info]);
    }
    public function vegetable_seed(){   
        $info=product_data::where('ps_category','Vegetable Seed')->get();
        return view('links.category',['info'=>$info]);
    }
    public function plastic_pots(){   
        $info=product_data::where('ps_category','Plastic Pots')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Wooden_pots(){   
        $info=product_data::where('ps_category','Wooden Pots')->get();
        return view('links.category',['info'=>$info]);
    }
    public function ceramic_pots(){   
        $info=product_data::where('ps_category','Ceramic Pots')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Fertilizer(){   
        $info=product_data::where('ps_category','Fertilizer')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Garden_tools(){   
        $info=product_data::where('ps_category','Garden Tools')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Pets_control(){   
        $info=product_data::where('ps_category','Pets Control')->get();
        return view('links.category',['info'=>$info]);
    }


    public function Plants(){   
        $info=product_data::where('pm_category','Plants')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Seed(){   
        $info=product_data::where('pm_category','Seeds')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Pots(){   
        $info=product_data::where('pm_category','Pots')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Equipments(){   
        $info=product_data::where('pm_category','Equipments')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Packages(){   
        $info=product_data::where('pm_category','Package')->get();
        return view('links.category',['info'=>$info]);
    }


    public function Plants_packages(){   
        $info=product_data::where('ps_category','Plants Packages')->get();
        return view('links.category',['info'=>$info]);
    }
    public function seed_packages(){   
        $info=product_data::where('ps_category','Seed Packages')->get();
        return view('links.category',['info'=>$info]);
    }
    public function Equipments_Packages(){   
        $info=product_data::where('ps_category','Equipments Packages')->get();
        return view('links.category',['info'=>$info]);
    }

    public function addcart(Request $req, $id){

        if(session()->has('user')){
            
            $userid = session()->get('userid');
            $user = login_clients::find($userid);
            $product = product_data::find($id);
    
            $count = cart::where('uid',$userid)->count();
            $req->session()->put('count',$count);
    
            
            $data = cart::where('pid',$id)->where('uid',$userid)->first();
            if($data){
                $data->delete();
            }
    
            $cart = new cart;
    
            $cart->uid = $user->id;
            $cart->uname = $user->first_name;
            $cart->email = $user->email;
    
            $cart->pid = $product->id;
            $cart->p_image = $product->p_image;
            $cart->product_name = $product->p_name;
            $cart->main_price = $product->main_price;
            $cart->dis_price = $product->dis_price;
    
            // Check product Quantity from database
            if($req->quantity >= 1 && $req->quantity <= $product->quantity) {
                $cart->quantity = $req->quantity;
                $cart->save();
                return redirect()->back()->with('message', 'Product Added Successfully in Cart');
            } else {
                return redirect()->back()->with('error', 'Quantity exceeds available stock. Please choose a quantity between 1 and ' . $product->quantity);
            }
    
        } else {
            return redirect('/log_new');
        }
    }

    public function search_cart(){
        if(session()->has('user')){

            $userid = session()->get('userid');
            $uinfo = login_clients::where('id',$userid)->get();
            $data = cart::where('email',$uinfo[0]->email)->get();

            foreach($data as $item){
                $product = product_data::find($item->pid);
                if($product && $product->quantity <= 0){
                    $item->out_of_stock = true;
                } else {
                    $item->in_stock = true;
                }
            }

            $count = $data->count();

            if($count > 0){
                return view('/cart')->with('data',$data,'item',$item);
            }else{
                return view('/cart')->with('message','Cart is Empty');
            }
        }else{
            return redirect('log_new');
        }
    }

    // public function add_cart_count($id){
    //     $count = cart::count($id);
    //     return view('header',['count'=>$count]);
    // }

    public function get_data($id){
        $in = product_data::find($id);
        return view('single_product',['in'=>$in]);
    }

    public function get_cart_data($id){
        $in = cart::find($id);
        return view('cart_single_data',['in'=>$in]);
    }


    public function delete_cart($id){
        $data=cart::find($id);
        $data->delete();
        return redirect('/cart');
    }


    public function search()
    {
        $search_text = $_GET['query'];
        
        $info = product_data::where('p_name', 'LIKE', '%'.$search_text.'%')
                            ->orWhere('pm_category', 'LIKE', '%'.$search_text.'%')
                            ->orWhere('ps_category', 'LIKE', '%'.$search_text.'%')
                            ->get();
        
        if ($info->isEmpty()) {
            return redirect()->back()->with('error', 'No matching products found.');
        } else {
            return view('links.category')->with('info', $info);
        }
    }
   

    public function checkout($id)
    {
        // Get the cart items for the user
        $cartItems = cart::where('uid', $id)->get();

        // Check stock for each cart item
        foreach ($cartItems as $item) {
            $product = product_data::find($item->pid); // Get product from product_data table

            if ($product && $item->quantity > $product->quantity) {
                // Redirect back to the cart with an error message if stock is insufficient
                return redirect('/cart')->with('error', 'One or more items in your cart exceed the available stock.');
            }
        }

        // If stock is sufficient, proceed to the checkout
        $userid = session()->get('userid');
        $uinfo = login_clients::where('id', $userid)->get();

        return view('checkout', ['data' => $cartItems, 'uinfo' => $uinfo]);
    }
    

    public function single_checkout($id){
        $userid = session()->get('userid');
        $uinfo = login_clients::where('id',$userid)->get();
        $data = product_data::find($id);
        return view('pay',['data'=>$data,'uinfo'=>$uinfo]);
    }

    

    public function all_product(){
        $data = product_data::all();
        return view('all_product',['data'=>$data]);
    }

    public function all_product_delete($id){
        $data = product_data::find($id);
        $data -> delete();
        return redirect('/all_product');
    }

    // Edit
    public function get_edit_data($id){
        $data = product_data::find($id);
        return view('edit_product_data',['data'=>$data]);
    }

    public function update_product(Request $req)
    {
        $data = product_data::find($req->id);

        
        $data->p_name = $req->p_name;
        $data->pm_category = $req->pm_category;
        $data->ps_category = $req->ps_category;
        $data->main_price = $req->main_price;
        $data->percentage = $req->percentage; 
        $data->quantity = $req->quantity;
        $data->description = $req->description;
        $data->p_benefits = $req->p_benefits;

        $percentage = ($req->main_price * $req->percentage) / 100;
        $after_discount = $req->main_price - $percentage;
        $data->dis_price = $after_discount;


        $Id = $data->save();
        return redirect('all_product');
    }

    

    public function updateDiscount(Request $request)
    {
        // This Is for sub category discount 
        
        $category = $request->input('pm_category');
        $subCategory = $request->input('ps_category');
        $percentage = $request->input('percentage');
        
        $productData = product_data::where('pm_category', $category)
        ->where('ps_category', $subCategory)
        ->get();
        
        foreach ($productData as $data) {
            $mainPrice = $data->main_price;
            $discountedPrice = ($mainPrice * $percentage) / 100;
            $after_discount = $mainPrice - $discountedPrice;
            
            
            $data->update(['percentage' => $percentage]);
            $data->update(['dis_price' => $after_discount]);
        }
        
        return redirect()->back()->with('success', 'Prices updated successfully for matching categories.');
    }
    
    
    
    
    public function main_Discount(Request $request)
    {
        // This Is for Main category discount

        $category = $request->input('m_category');
        $percentage = $request->input('percentage');

        $productData = product_data::where('pm_category', $category)->get();

        foreach ($productData as $data) {
            $mainPrice = $data->main_price;
            $discountedPrice = ($mainPrice * $percentage) / 100;
            $after_discount = $mainPrice - $discountedPrice;


            $data->update(['percentage' => $percentage]);
            $data->update(['dis_price' => $after_discount]);
        }

        return redirect()->back()->with('success', 'Prices updated successfully for matching categories.');
    }
   

    public function sale(){
        $info = product_data::where('percentage', '>', 50)->get();

        if ($info->isEmpty()) {
            return redirect()->back()->with('error', 'No matching products found.');
        } else {
            return view('links.category')->with('info', $info);
        }
    }

    public function get_product_image_edit($id){
        $data = product_data::find($id);
        return view('product_image_edit',['data'=>$data]);
    }
    
    public function update_product_image_edit(Request $req) {
        $data = product_data::find($req->id);
    
        if ($req->hasFile('img1')) {
            $filename1 = $req->file('img1')->getClientOriginalName();
            $destinationPath = 'images'; // Adjust path if necessary
            $req->file('img1')->move(public_path($destinationPath), $filename1);
            $data->p_image = $filename1;
        }
    
        $data->save();
        return redirect('all_product');
    }
    

}