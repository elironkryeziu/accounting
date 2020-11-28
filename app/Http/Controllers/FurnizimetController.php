<?php

namespace App\Http\Controllers;

use App\Furnitori;
use App\Furnizimet;
use Illuminate\Http\Request;

class FurnizimetController extends Controller
{
    //
    public function get(Request $request)
    {
        $furnitoret = Furnitori::get(['id','name']);
        $types = Furnizimet::distinct()->pluck('type');
        $from = now()->startOfMonth()->toDateString();
        $to = now()->toDateString();
        if ($request->date_from)
        {
            $from = $request->date_from;
            $to = $request->date_to;
            $furnizimet = Furnizimet::where('date','>=',$request->date_from)->where('date','<=',$request->date_to);
        } else 
        {
            $furnizimet = Furnizimet::where('date','>=',now()->startOfMonth()->toDateString())->where('date','<=',now()->toDateString());
        }


        if ($request->furnitori)
        {
            if ($request->furnitori > 0)
            {
                $furnizimet = $furnizimet->where('furnitor_id',$request->furnitori);
            }
        }

        if ($request->type)
        {
            if (strcmp($request->type,"all") > 0)
            {
                $furnizimet = $furnizimet->where('type',$request->type);
            }
        }
        
        // orderBy('created_at','desc')->get();

        $data = [
            'furnizimet' => $furnizimet->orderBy('created_at','desc')->get(),
            'furnitoret' => $furnitoret,
            'types' => $types,
            'start_of_month' => $from,
            'day' => $to,
            'selected_furnitori' => $request->furnitori,
            'selected_type' => $request->type,
            'totali' => $furnizimet->sum('amount')
        ];

        // return $data;

        return view('furnizimet',$data);      
    }

    public function newFurnizimet()
    {
        $furnitoret = Furnitori::all();

        $data = [
            'furnitoret' => $furnitoret,
            'date' => today()->toDateString()
        ];

        return view('new-furnizim',$data);      
    }

    public function addFurnizim(Request $request)
    {
        $furnizim = Furnizimet::create([
            'furnitor_id' => $request->furnitori,
            'type' => $request->type,
            'amount' => $request->amount,
            'date' => $request->date,
            'notes' => $request->notes
        ]);

        return redirect()->route('furnizimet');

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

        return redirect()->route('furnitoret');
        
    }

    public function deleteFurnitor($id)
    {
        $furnitori = Furnitori::find($id);
        $furnitori->delete();
    }
}
