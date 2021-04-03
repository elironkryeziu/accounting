<?php

namespace App\Http\Controllers;

use App\Investimet;
use Illuminate\Http\Request;

class InvestimetController extends Controller
{
    public function get(Request $request)
    {
        $from = now()->startOfMonth()->toDateString();
        $to = now()->toDateString();
        if ($request->date_from)
        {
            $from = $request->date_from;
            $to = $request->date_to;
            $investimet = Investimet::where('date','>=',$request->date_from)->where('date','<=',$request->date_to);
        } else 
        {
            $investimet = Investimet::where('date','>=',now()->startOfMonth()->toDateString())->where('date','<=',now()->toDateString());
        }

        $data = [
            'investimet' => $investimet->orderBy('date','desc')->get(),
            'start_of_month' => $from,
            'day' => $to,
            'totali' => $investimet->sum('amount')
        ];
        return view('investimet',$data);
    }

    public function add(Request $request)
    {
        $investimi = Investimet::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'date' => $request->date,
            'notes' => $request->notes
        ]);

        return redirect()->route('investimet');
    }
}
