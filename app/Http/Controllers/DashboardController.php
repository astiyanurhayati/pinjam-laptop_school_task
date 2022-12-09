<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index(Form $form){
        
        // $pinjam = Form::where([
        //     ['tanggal_pinjam', Carbon::now()],
        //     ['done_time', 'NULL'],
        // ])->get();
        // $kembali = Form::where('done_time', Carbon::now())->get();

        $laptops = Form::all();

        return view('dashboard.dashboard', compact('laptops'));
    }
}
