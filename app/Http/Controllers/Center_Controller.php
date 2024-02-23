<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Bank;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class Center_Controller extends Controller
{
    //
    
    public function index()
    {
      

    }
    public function showselect(Request $request)
    {
        // قم بإرجاع جميع البيانات المتاحة في جدول "المراكز"
        $NameCenters = Center::select('Name')->distinct()->get();

        $type = $request->input('type') ?? '';
        $name = $request->input('name') ?? '';


        $bloodBanks = Bank::all();
        $centers =Center::all();


        // $centerTypes = Bank::select('banks.Type', 'centers.Type')
        // ->join('centers', function ($join) {
        //     $join->on('banks.id', '=', 'centers.bank_id');
        // })
        // ->distinct()
        // ->get();
        
        $centerTypes = Center::select('Type')->distinct()->get();
        $bankTypes = Bank::select('Type')->distinct()->get();
            $allTyps= [...$centerTypes,...$bankTypes ];
        return view('Blood_Center', compact('bloodBanks', 'centers','NameCenters','allTyps'));

       
    }
    
    public function searchselect(Request $request)
    {
        $Nameselect = $request->input('Name');
    return  $Nameselect ;
        // $NameCenters = Center::where('Name', $Nameselect)->get();
        // $BankNames = Bank::where('Name', $Nameselect)->get();

        // return view('tast', compact('BankNames', 'NameCenters', 'Nameselect'));
      

    }
  
}