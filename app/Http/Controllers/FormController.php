<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Rayon;
use App\Models\Rombel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function page(){
        return view('pages.index');
    }
    
    public function index()
    {
        $rombel = Rombel::all();
        $rayon = Rayon::all();
        return view('pages.form', compact('rombel', 'rayon'));
    }

    public function form_dashboard(){
 
        $data = Form::all();
        return view('dashboard.kelola-data-peminjam.index', compact('data'));
    }

    public function update_complated($id){
        Form::where('id', '=', $id)->update([
            'status' => 1,
            'done_time' => \Carbon\Carbon::now(),
        ]);

        return redirect()->back()->with('done', 'Data telah selesai di update');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all())

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nis' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'tanggal_pinjam' => 'required',
            'saksi' => 'required',
            'keterangan' => 'required'
           
        ]);
    
        Form::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nis' => $request->nis,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'saksi' => $request->saksi,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'keterangan' => $request->keterangan,
            'status' => 0,
        
          
            
        ]);
        Alert::success('Success', 'Berhasil Meminjam Laptp');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $job = Form::find($id);
        
        return response()->json([
	      'data' => $job
	    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $form = Form::findOrFail($id);
        $form->delete($id);
        return to_route('form.dashboard')->with('success','Post deleted successfully');
    }
}
