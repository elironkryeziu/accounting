<?php

namespace App\Http\Controllers;

use App\Furnitori;
use App\Furnizimet;
use Illuminate\Http\Request;

class FurnizimetController extends Controller
{
    //
    public function get()
    {
        $furnizimet = Furnizimet::orderBy('created_at','desc')->get();

        $data = [
            'furnizimet' => $furnizimet
        ];

        return view('furnizimet',$data);      
    }

    public function furnitoret() 
    {
        $furnitoret = Furnitori::all();
        
        $data = [
            'furnitoret' => $furnitoret
        ];

        return view('furnitoret',$data);
    }

    public function addFurnitor(Request $request)
    {
        $furnitori = Furnitori::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'notes' => $request->notes,
            'created_at' => now()
        ]);

        $furnitoret = Furnitori::all();
        
        $data = [
            'furnitoret' => $furnitoret
        ];

        return view('furnitoret',$data);
    }

    public function deleteFurnitor($id)
    {
        $furnitori = Furnitori::find($id);
        $furnitori->delete();
    }
}
