<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Center;
use App\Models\Visitor;

class Donation_Controller extends Controller
{
    //
    public function store()
    {
        $donation = new Donation;

        $donation->Dof_Donation = request()->Dof_Donation;
        $donation->center_id = request()->Center_id;
        $donation->visitor_id = $_COOKIE["Id"];
        $donation->employee_id = 0;
        $donation->status_donation = false;

        $donation->save();

        sleep(1);
        header("Location: /blood_donation");
        exit;

    }

    public function showCenters(Request $request)
    {
        // قم بإرجاع جميع البيانات المتاحة في جدول "المراكز"
        // $NameCenters = Center::select('Addrees')->distinct()->get();
        $NameCenters = Center::all();

        return view('blood_donation', compact('NameCenters'));
    }



    public function show_donation()
    {
        $showdonations = Donation::with('visitor', 'center')->get();
        

        return view('/Dashboards.donationcontrol', compact('showdonations'));
    }
    public function destroy(Donation $don) 
    {
        $don->delete();
    
        return redirect()->route('donationcontrol.index')->with('success', 'Blood bank deleted successfully!');
    }


}

