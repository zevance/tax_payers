<?php

namespace App\Http\Controllers;

use App\Models\Taxpayer;
use Illuminate\Http\Request;

class TaxpayerController extends Controller
{
    public function index()
    {
        $taxpayers = Taxpayer::latest()->paginate(10);
        return view('taxpayers.index', [
            'taxpayers' => $taxpayers
        ]);
        return view('taxpayers.index');
    }
    //add new tax papers
    public function create()
    {
        return view('taxpayers.add');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'tpin' => 'required',
            'business_certificate_number' => 'required',
            'trading_name' => 'required',
            'mobile_number' => 'required',
            'email' => 'required',
            'business_registration_date' => 'required',
            'physical_location' => 'required'

        ]);

        $request->user()->taxpayers()->create([
            'tpin' => $request->tpin,
            'business_certificate_number' => $request->business_certificate_number,
            'trading_name' => $request->trading_name,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'business_registration_date' => $request->business_registration_date,
            'physical_location' => $request->physical_location
        ]);

        return back();
    }
    public function edit(Taxpayer $taxpayer)
    {
        return view('taxpayers.edit', [
            'taxpayer' => $taxpayer
        ]);
    }
    public function update(Request $request, Taxpayer $taxpayer)
    {
        $this->validate($request, [
            'tpin' => 'required',
            'business_certificate_number' => 'required',
            'trading_name' => 'required',
            'mobile_number' => 'required',
            'email' => 'required',
            'business_registration_date' => 'required',
            'physical_location' => 'required'

        ]);
        $taxpayer->update([
            'tpin' => $request->tpin,
            'business_certificate_number' => $request->business_certificate_number,
            'trading_name' => $request->trading_name,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'business_registration_date' => $request->business_registration_date,
            'physical_location' => $request->physical_location
        ]);

        return redirect(route('taxpayers'));
    }
    public function destroy(Taxpayer $taxpayer)
    {
        $taxpayer->delete();

        return back();
    }
}
