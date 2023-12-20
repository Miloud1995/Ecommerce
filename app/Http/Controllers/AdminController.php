<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function view_category(){
        $alldata = Category::all();
        return view("admin.pages.Category",compact('alldata'));
    }


    public function add_category(Request $request){

       $data = new Category;
       $data->category_name = $request->category_name;
       $data->save();
       return redirect()->back()->with('message','added successfuly',);
    }
    public function delete_category($id)
            {

                $category = Category::find($id);


                if ($category) {

                    $category->delete();
                    return redirect()->back()->with('success', 'Category deleted successfully');
                } else {
                    return redirect()->back()->with('error', 'Category not found');
                }
            }

    public function edit_category($category_name,$id){
       return view('admin.pages.edit_category',compact('category_name','id'));
    }

    public function update_category(Request $request ,$id){
        $category= Category::find($id)->get();
        $category->category_name = $request->category_name;

        return redirect()->back()->with('message','Category Updated successfuly');


    }

    // products products products products products products

    public function  show_product(){
      $products = Product::all();
      return view('admin.pages.show_products',compact('products'));
    }

    public function add_product(){
        $categories = Category::all();

       return view('admin.pages.add_products',compact('categories'));

    }
    public function save_product(Request $request)
    {

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'category' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric',
        'discount_price' => 'required|numeric', // Corrected the field name
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    if($request->category=="checked")
    {
        return redirect()->back()->with('message','you did not choose any category');
    }

    $imageName = time() . '.' . $request->image->getClientOriginalExtension();

    $product = Product::create([
        "title" => $request->title,
        "description" => $request->description,
        "category" => $request->category,
        "quantity" => $request->quantity,
        "price" => $request->price,
        "discount_price" => $request->discount_price,
        "image" => $imageName,
    ]);

    $request->image->move('product', $imageName);

    return redirect()->route('show_product')->with('message', 'The product has been added successfully');
   }

   public function edit_product($id){
    $categories = Category::all();
    $product = Product::find($id);

    return view('admin.pages.edit_product',compact('product','categories'));

   }
   public function update_product(Request $request,$id){

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'category' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric',
        'discount_price' => 'required|numeric', // Corrected the field name
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
            if($request->category=="checked")
            {
                return redirect()->back()->with('message','you did not choose any category');
            }
            $product=Product::find($request->id);




            $product->update([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
            ]);



           if($request->hasFile('image')){
            Storage::delete('product/' . $product->image);
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();

            $request->image->move('product', $imageName);


           }






            return redirect()->route('show_product')->with('message', 'The product has been updated successfully');
        }

   public function delete_product($id){
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('message','the product has been deleted seccussfuly');
   }



}
