<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Imagecrud;

class ImagecrudController extends Controller
{
    public function index()
    {
        $data =Imagecrud::get();
        return view('index',compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',

        ]);
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalName();  
        $request->image->move(public_path('images'), $imageName);

        // dd($imageName);
        $data = Imagecrud::create([
            'image'=>$imageName,
        ]);
    
    
        $data->save();
        return redirect()->route('index',compact('data'));
    }
}
