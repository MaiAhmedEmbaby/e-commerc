<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\User;
use App\Models\Catagory;


class AdminController extends Controller
{
    public function addview()
    {
              return view('admin.add_product');
    }

    public function upload(Request $request)
    {
        $product=new product;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('productimage',$imagename);
        $product->image=$imagename;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->type=$request->type;
        $product->save();
        return redirect()->back()->with('message','Product AddedSuccessfully');
    }
    public function showproduct()
    {
        $data=product::all();
        return view('admin.showproduct',compact('data'));
    }
    public function deleteproduct($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','product Deleted ');
    }
    public function updateview($id)
    {
        $data=product::find($id);
        return view('admin.updateview',compact('data'));
    }
    public function updateproduct(Request $request ,$id)
    {
        $data=product::find($id);

        $image=$request->file;

        if($image)
        {
            $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;
        }


        $data->name=$request->name;
        $data->price=$request->price;
        $data->type=$request->type;
        $data->save();
        return redirect()->back()->with('message','Product Updated Successfully');
    }

    public function showorder()
    {
        $order=order::all();
        return view('admin.showorder',compact('order'));
   }

    public function updatestatus($id)
    {
        $order=order::find($id);
        $order->status='delivered';
        $order->save();

        return redirect()->back();
    }


    public function view_catagory()
    {
        $data=catagory::all();

        return view('admin.catagory',compact('data'));
    }

    public function add_catagory(Request $request)
    {
        $data=new catagory;

        $data->catagory_name=$request->catagory;

        $data->save();
        return redirect()->back()->with('message','catagiry added Successfully');

    }

    public function delete_catagory($id)
    {
        $data=catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message','catagory deleted sccesfuly');
    }


   public function showuser()
   {
     $data=user::all();
    return view('admin.showuser',compact('data'));
   }



   public function deleteuser($id)
   {
       $data=user::find($id);
       $data->delete();
       return redirect()->back()->with('message','user  Deleted ');
   }


}
