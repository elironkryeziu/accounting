<?php

namespace App\Http\Controllers;

use App\Pije;
use App\Furnitori;
use App\FurnizimetPije;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PijetController extends Controller
{
    //
    public function get()
    {
        $furnizimetpijet = FurnizimetPije::orderBy('created_at','desc')->get();
        $from = now()->startOfMonth()->toDateString();

        $data = [
            'furnizimet' => $furnizimetpijet,
            'totali' => $furnizimetpijet->where('date','>=',$from)->sum('total')
        ];

        return view('furnizimet-pije',$data);
 
    }

    public function list(Request $request)
    {
        $ids = array();
        foreach ($request->except('_token') as $id => $value)
        {
            array_push($ids,$id);
        }

        $pijet = Pije::find($ids);
        $furnitoret = Furnitori::all();
        
        $data = [
            'pijet' => $pijet,
            'furnitoret' => $furnitoret,
            'date' => today()->toDateString()
        ];

        return view('add-furnizim-pije',$data);
    }

    public function add(Request $request)
    {
        $total = 0;
        $from = now()->startOfMonth()->toDateString();

        $furnizimpije = FurnizimetPije::create([
            'furnitor_id' => $request->furnitori,
            'date' => $request->date,
            'notes' => $request->notes,
        ]);

        foreach ($request->pijet as $key => $pija)
        {

            DB::table('furnizimet_pije_items')->insert([
                'furnizim_id' => $furnizimpije->id,
                'pije_id' => $key,
                'qty' => $pija['quantity'],
                'amount' => $pija['amount']
                ]);
            $total += $pija['amount'];
        }

        $furnizimpije->total = $total;
        $furnizimpije->update();

        $furnizimetpijet = FurnizimetPije::orderBy('created_at','desc')->get();

        $data = [
            'furnizimet' => $furnizimetpijet,
            'totali' => $furnizimetpijet->where('date','>=',$from)->sum('total')
        ];

        return view('furnizimet-pije',$data);
    }
}
