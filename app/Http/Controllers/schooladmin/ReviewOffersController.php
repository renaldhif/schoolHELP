<?php

namespace App\Http\Controllers\schooladmin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\RequestData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('type') == "offer-status") {
            DB::beginTransaction();
            try {
                $offer = Offer::find(request('offer_id'));
                if (!$offer)  return redirect()->back()->with('error', 'Offer not found');

                if (request('status') == "accept") {
                    $offer->requestData->request_status = "CLOSED";

                    $offer->offer_status = "ACCEPTED";
                    $offer->offer_accepted = now();
                    $offer->offer_closed = now();
                    $offer->save();
                    $offer->requestData->save();
                }
                DB::commit();
                return redirect()->route('schooladmin_reviewoffers')->with('success', 'Offer Accepted !');
            } catch (\Throwable $th) {
                dd($th);
                DB::rollback();
                return redirect()->route('schooladmin_reviewoffers')->with('error', 'Something went wrong');
            }
        }
        $data = RequestData::all();
        return view('schooladmin.reviewoffers', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}