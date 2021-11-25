<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaxpayerResource;
use App\Http\Resources\TaxpayerResourceCollection;
use App\Models\Taxpayer;
use Illuminate\Http\Request;

class TaxpayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$taxpayer = Taxpayer::paginate();
        $taxpayer = Taxpayer::all();
        return response()->json($taxpayer);
        //return (new TaxpayerResourceCollection($taxpayer))->response();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tpin' => 'required',
            'business_certificate_number' => 'required',
            'trading_name' => 'required',
            'mobile_number' => 'required',
            'email' => 'required',
            'business_registration_date' => 'required',
            'physical_location' => 'required'

        ]);

        $newTaxpayer = new Taxpayer([
            'tpin' => $request->get('tpin'),
            'business_certificate_number' => $request->get('business_certificate_number'),
            'trading_name' => $request->get('trading_name'),
            'mobile_number' => $request->get('mobile_number'),
            'email' => $request->get('email'),
            'business_registration_date' => $request->get('business_registration_date'),
            'physical_location' => $request->get('physical_location')
        ]);

        $newTaxpayer->save();

        return response()->json($newTaxpayer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Taxpayer  $taxpayer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taxpayer = Taxpayer::findOrFail($id);
        return response()->json($taxpayer);

        //return (new TaxpayerResource($taxpayer))->response();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taxpayer  $taxpayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $taxpayer = Taxpayer::findOrFail($id);

        $request->validate([
            'tpin' => 'required',
            'business_certificate_number' => 'required',
            'trading_name' => 'required',
            'mobile_number' => 'required',
            'email' => 'required',
            'business_registration_date' => 'required',
            'physical_location' => 'required'

        ]);
        $taxpayer->tpin = $request->get('tpin');
        $taxpayer->business_certificate_number = $request->get('business_certificate_number');
        $taxpayer->trading_name = $request->get('trading_name');
        $taxpayer->mobile_number = $request->get('mobile_number');
        $taxpayer->email = $request->get('email');
        $taxpayer->business_registration_date = $request->get('business_registration_date');
        $taxpayer->physical_location = $request->get('physical_location');
        $taxpayer->save();

        return response()->json($taxpayer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taxpayer  $taxpayer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taxpayer = Taxpayer::findOrFail($id);
        $taxpayer->delete();
        return response(null);
    }
}
