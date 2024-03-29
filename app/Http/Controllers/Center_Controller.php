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
        $Namebanks = Bank::select('Name')->distinct()->get();

        $allNames=[...$NameCenters,...$Namebanks];
        

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
        return view('Blood_Center', compact('bloodBanks', 'centers','allNames','allTyps'));

       
    }
    
    public function searchselect(Request $request)
    {
        $Nameselect = $request->input('Name');
    return  $Nameselect ;
        // $NameCenters = Center::where('Name', $Nameselect)->get();
        // $BankNames = Bank::where('Name', $Nameselect)->get();

        // return view('tast', compact('BankNames', 'NameCenters', 'Nameselect'));
      

    }
  
    public function show_center_incontrol()
    {
        // قم بإرجاع جميع البيانات المتاحة في جدول "مصرف الدم"
        $ShowCenters = Center::with('bank')->get();
        $banks=Bank::all();        

        return view('/Dashboards.centercontrol', compact('ShowCenters','banks'));

    }
    
    public function store()
    {

        $center = new Center;
       
        $center->Name = trim(request()->Name);
        $center->Addrees = trim(request()->Addrees);
        $center->Bank_id = trim(request()->Bank_id);

        
        $center->save();

        sleep(1);
        header("Location: /centercontrol");
        exit;

    }

    public function destroy(Center $Center) 
    {
        $Center->delete();


    
        return redirect()->route('centercontrol.index')->with('success', ' deleted successfully!');
    }




}
