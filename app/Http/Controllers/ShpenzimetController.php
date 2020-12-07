<?php

namespace App\Http\Controllers;

use App\Shpenzimet;
use Illuminate\Http\Request;

class ShpenzimetController extends Controller
{
    //

    public function get(Request $request)
    {
        // return Shpenzimet::where('type',$request->type)->get();
        $types = Shpenzimet::distinct()->pluck('type');

        $from = now()->startOfMonth()->toDateString();
        $to = now()->toDateString();
        if ($request->date_from)
        {
            $from = $request->date_from;
            $to = $request->date_to;
            $shpenzimet = Shpenzimet::where('date','>=',$request->date_from)->where('date','<=',$request->date_to);
        } else 
        {
            $shpenzimet = Shpenzimet::where('date','>=',now()->startOfMonth()->toDateString())->where('date','<=',now()->toDateString());
        }

        if ($request->type)
        {
            if (strcmp($request->type,"all") < 0)
            {
                $shpenzimet = $shpenzimet->where('type','like','%'.$request->type.'%');
                // return "test";
            }
        }

        
        $data = [
            'shpenzimet' => $shpenzimet->orderBy('created_at','desc')->get(),
            'types' => $types,
            'start_of_month' => $from,
            'day' => $to,
            'selected_type' => $request->type,
            'totali' => $shpenzimet->sum('amount')
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

        return redirect()->route('shpenzimet');
    }
}
