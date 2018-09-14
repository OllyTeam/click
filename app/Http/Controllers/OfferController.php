<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\district;
use App\province;
use App\sector;
use App\joboffer;
use App\category;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dis = district::all();
        $pro = province::all();
        $cat = category::all();
        $id = Auth()->user()->id;
        $offer = joboffer::where('user_id','=',$id)->get();
        return view('offer.index')->with('offer',$offer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = category::all();
        return view('offer.create')->with('category',$cat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new joboffer;
        $job->offername = $request->input('name');
        $job->offertitle = $request->input('title');
        $job->description = $request->input('description');
        $job->compensation = $request->input('compensation');
        $job->sector_id = $request->input('sector');
        $job->district_id = $request->input('district');
        $job->province_id = $request->input('province');
        $job->category_id = $request->input('category');
        $job->languages = $request->input("language");
        $job->email = $request->input("email");
        $job->phone = $request->input("phone");
        $job->user_id = Auth()->user()->id;
        if($job->save()){
            return redirect('offer');
        }else{
            redirect()->recent();
        }
        //return $job;
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
