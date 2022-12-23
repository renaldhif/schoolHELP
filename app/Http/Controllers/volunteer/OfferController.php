<?php

namespace App\Http\Controllers\volunteer;

use App\Http\Controllers\Controller;
use App\Models\RequestData;
use Carbon\Carbon;

class OfferController extends Controller
{
    public function index(RequestData $request_data) {
        $notes = "";

        if($request_data->offer()->where('user_id',auth()->user()->id)->exists())
            $notes = $request_data->offer()->where('user_id',auth()->user()->id)->first()->remarks ?? '';

        if(request()->ajax())
            return view('volunteer.offer.ajax',['data' => $request_data,'notes' => $notes]);

        return view('volunteer.offer.index',['data' => $request_data,'notes' => $notes]);
    }

    public function store(RequestData $request_data) {

        request()->validate([
            'note' => 'required',
        ]);
        $request_data->offer()->updateOrCreate([
            'user_id' => auth()->user()->id,
            'request_id' => $request_data->id,
        ],[
            'user_id' => auth()->user()->id,
            'remarks' => request('note'),
            'offer_proposed' => now(),
        ]);

        return redirect()->route('volunteer_dashboard')->with('success','Offer sent successfully');
    }

    public function list() {
        $offers = null;
        if(auth()->user()->offers()->exists())
            $offers = auth()->user()->offers()->get()->map(function($item) {
                return [
                    'id' => $item->id,
                    'school' => $item->requestData->school->school_name,
                    'remarks' => $item->remarks,
                    'offer_status' => $item->offer_status,
                    'offer_proposed' => Carbon::parse($item->offer_proposed)->translatedFormat('l, d F Y'),
                ];
            });
        return view('volunteer.offer.list',compact('offers'));
    }
}
