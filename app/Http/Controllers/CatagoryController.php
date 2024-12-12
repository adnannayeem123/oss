<?php

namespace App\Http\Controllers;
use App\models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatagoryController extends Controller
{
    public function Catagory()
    {
        $cat=Category::paginate(6);
        return view('backend.category',compact('cat'));
    }

    public function categoryform(){
        return view('backend.category-form');
    }
   public function categorystore(request $request)
   {
     $validation=Validator::make($request->all(),
     [
          'cat_name'=>'required',
          'description'=>'required'
     ]);
     if($validation->fails())
     {
        notify()->error($validation->getMessageBag());
     }
//dd($request->all());
     $fileName='';
     if($request->hasFile('image'));
     {
  
     
     $file=$request->file('image');
  
     $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
  
     $file->storeAs('/backend/uploads',$fileName);
  
  
  }


    //dd($request->all());
    Category::create([
        'name'=>$request->cat_name,
        'description'=>$request->description,
        'image'=>$fileName
    ]);
    Toastr::success("success");
    return redirect()->back();
   }

 
    
}
