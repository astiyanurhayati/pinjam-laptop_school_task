<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageLaptopRequest;
use App\Models\ManageLaptop;
use Illuminate\Http\Request;

class ManageLaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $manageLaptop = ManageLaptop::all();

        return view('dashboard.manage-laptop.index', compact('manageLaptop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manage-laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManageLaptopRequest $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $uploadedImage = $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;

        $params = $request->validated();
        
        if ($product = ManageLaptop::create($params)) {
            $product->image = $imagePath;
            $product->save();

            return redirect(route('manage-laptop.index'))->with('success', 'Added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageLaptop  $manageLaptop
     * @return \Illuminate\Http\Response
     */
    public function show(ManageLaptop $manageLaptop)
    {
        return view('manage-laptop.index',compact('manageLaptop'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageLaptop  $manageLaptop
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageLaptop $manageLaptop)
    {
        return view('dashboard.manage-laptop.edit',compact('manageLaptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageLaptop  $manageLaptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageLaptop $manageLaptop)
    {
        
        $request->validate([
            'merek' => ['required', 'max:100'],
            'stock' => ['required', 'numeric', 'min:0'],
            'deskripsi' => ['required', 'min:5'],
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $manageLaptop->update($input);
    
        return redirect()->route('manage-laptop.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageLaptop  $manageLaptop
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageLaptop $manageLaptop)
    {
        $manageLaptop->delete();
     
        return redirect()->route('manage-laptop.index')
                        ->with('success','Data Laptop berhasil di hapus');
    }
}
