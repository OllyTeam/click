<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\district;
use App\province;
use App\sector;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dis = district::all();
        $pro = province::all();
        $sector = sector::all();
        $cat = category::all();

        return view('service.create',['province'=> $pro,'district'=>$dis,'sector'=>$sector, 'category'=>$cat]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $IdDistrict = district::where('id',$request->input("district"))->get();
        $IdSector = sector::where('id',$request->input('sector'))->get();

        //return $IdSector[0]['district_id'];

        if ($IdDistrict[0]['province_id'] == $request->input("province") && $IdSector[0]['district_id'] == $request->input("district") ) {

            $service = new s_listing;
            $service->service_title = $request->input('name');
            $service->service_desc = $request->input('desc');
            $service->employment_type = $request->input('employment');
            $service->sector_id = $request->input('sector');
            $service->district_id = $request->input('district');
            $service->province_id = $request->input('province');
            $service->category_id = $request->input('category');
            $service->languages = $request->input("language");
            $service->email = $request->input("email");
            $service->phone = $request->input("phone");
            $service->user_id = Auth()->user()->id;


            return $service;
            // if($job->save()){
            //     echo 'Okkk';
            // }else{
            //     echo "Noooo";
            //     //return redirect()->intended('/offer/create');
            // }
        }

        // }else{
        //    return redirect()->intended('/offer/create')->with('errors','Invalid Location');
        // }
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
