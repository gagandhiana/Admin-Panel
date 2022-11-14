<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Carbon\Carbon;
use App\Models\Page_details;
use App\Models\Category_details;
use App\Models\Product_details;
use Session;

class IController extends Controller
{
    public function home_page(){
        return view("homepage");
    }
    // Login
    public function login_page(){
        return view("login");
    }
    public function login(Request $request){
        $username=$request->get('user');
        $password=$request->input('pw');
        $data=Login::where(['username'=>$username,'password'=>$password])->first();
        if(!empty($data)){
            Session::put("user_session","done");
            return view('homepage');
        }
        else{
        return back()->with('message','Email Or Password Wrong');
        }
    }

    // Logout
    public function logout_page(){
        session::flush();
        return redirect('login-page');
    }

    // Add Page  (Insert Data)
    public function page_det(Request $request){
        $add=new Page_details;
        if($request->isMethod('post'))
        {
            $add->pageName=$request->get('p_name');
            $add->content=$request->get('con_tent');
            $add->save();
        }  
        return redirect("/homepage");
    }
    // Display Page Summary
    public function pagesummary(){
        $data=Page_details::paginate(2);
        return view('page_summary', compact('data'));
    }
    // Search Page
    public function search(Request $request){
        if($request->isMethod('post')){
            $name=$request->get('pName');
            $data=Page_details::where('pageName', 'LIKE', '%'. $name .'%')->paginate(2);
        }
        return view('page_summary', compact('data'));
    }
    public function editdisp($id){
        $findrec=Page_details::where('id',$id)->get();
        $data=Page_details::paginate(2);
        return view('homepage', compact('findrec'));
    }
    public function editdata(Request $request, $id=''){
        $add=Page_details::find($id);
        if($request->isMethod('post')){
            $add->pageName=$request->get('p_name');
            $add->content=$request->get('con_tent');
            $add->save();
        }
        return redirect("/page_summary");
    }
    public function deletedata($id){
        $ob=Page_details::find($id);
        $ob->delete();
        return redirect("page_summary");
    }
    public function addcat(){
        return view("add_cat");
    }
    // Add Category
    public function add_category(Request $request){
        $add=new Category_details;
        if($request->isMethod('post'))
        {
            $add->cname=$request->get('category');
            $add->save();
        }  
        return redirect("/add_cat");
    }
    public function categorysummary(){
        $data=Category_details::paginate(4);
        return view('category_summary', compact('data'));
    }
    public function searchcategory(Request $request){
         if($request->isMethod('post')){
            $name=$request->get('category');
            $data=Category_details::where('cname', 'LIKE', '%'. $name .'%')->paginate(4);
        }
        return view('category_summary', compact('data'));
    }
    public function delete_cat($id){
        $ob=Category_details::find($id);
        $ob->delete();
        return redirect("category_summary");
    }
    public function edit_cat($id){
        $findrec=Category_details::where('id',$id)->get();
        $data=Category_details::paginate(2);
        return view('add_cat', compact('findrec'));
    }
    public function edit_category(Request $request, $id=''){
         $add=Category_details::find($id);
         if($request->isMethod('post')){
            $add->cname=$request->get('category');
            $add->save();
        }  
        return redirect("/category_summary");
    }

    // Product Page

    public function addpro(){
        $data=Category_details::paginate(4);
        return view('add_pro', compact('data'));
    }

    // Add Product
    public function add_product(Request $request){
        $add=new Product_details;
        if($request->isMethod('post'))
        {
            $add->cname=$request->get('cname');
            $add->productName=$request->get('pro_name');
            $add->productDescription=$request->get('pro_des');
            $add->productPrice=$request->get('pro_price');

            if(!empty($request->file('pimage'))){
                $file=$request->file('pimage');
                $current=uniqid(Carbon::now()->format('YmdHs'));
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $fullfilename=$current.".".$file->getClientOriginalExtension();
                // print_R($fullfilename);
                $destinationPath = public_path('product_images');
                $file->move($destinationPath,$fullfilename);
                $add->productImage=$fullfilename;            }
            $add->save();
        }  
        return redirect("/add_pro")->with('message','Inserted Successfully');
    }
    public function prosummary(){
        $data=Product_details::paginate(2);
        return view('product_summary', compact('data'));
    }
    public function delete_pro($id){
       $ob=Product_details::find($id);
       unlink('product_images/' . $ob->productImage);
        $ob->delete();
        return redirect("product_summary");
    }
    public function edit_pro($id){
        $findrec=Product_details::where('id',$id)->get();
        $data=Product_details::paginate(2);
        return view('add_pro', compact('findrec','data'));
    }
    public function edit_product(Request $request, $id=''){
        $add=new Product_details;
         if($request->isMethod('post')){
            $add->cname=$request->get('cname');
            $add->productName=$request->get('pro_name');
            $add->productDescription=$request->get('pro_des');
            $add->productPrice=$request->get('pro_price');
            if(!empty($request->file('pimage'))){
                $file=$request->file('pimage');
                $current=uniqid(Carbon::now()->format('YmdHs'));
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $fullfilename=$current.".".$file->getClientOriginalExtension();
                // print_R($fullfilename);
                $destinationPath = public_path('product_images');
                $file->move($destinationPath,$fullfilename);
                $add->productImage=$fullfilename;   
           }
            $add->save();
        }  
        return redirect("/product_summary");
    }
    public function search_product(Request $request){
         if($request->isMethod('post')){
            $name=$request->get('pro_name');
            $data=Product_details::where('productName', 'LIKE', '%'. $name .'%')->paginate(2);
        }
        return view('product_summary', compact('data'));
    }
    public function change_pw(){
        $data=Login::paginate(2);
        return view('change_password', compact('data'));
    }
    public function change_password_submit(Request $request, $id=''){
        $add = Login::find($id);
        if ($request->isMethod('post')){
            $password =$request->get('password');
            $old_password =$request->get('old_pw');
           }
}
   