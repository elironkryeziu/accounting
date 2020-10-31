<?php

namespace App\Http\Controllers;

use App\Shpenzimet;
use Illuminate\Http\Request;

class ShpenzimetController extends Controller
{
    //

    public function get()
    {
        $shpenzimet = Shpenzimet::orderBy('created_at','desc')->get();
        
        $data = [
            'shpenzimet' => $shpenzimet
        ];
        
        return view('shpenzimet',$data);
    }

    public function add(Request $request)
    {
        $shpenzimet = Shpenzimet::create([
            'type' => $request->type,
            'amount' => $request->amount,
            'date' => $request->date,
            'notes' => $request->notes
        ]);

        $shpenzimet = Shpenzimet::orderBy('created_at','desc')->get();
        
        $data = [
            'shpenzimet' => $shpenzimet
        ];
        
        return view('shpenzimet',$data);

    }
}
