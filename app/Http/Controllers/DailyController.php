<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use App\Models\Mission;
use App\Models\Period;
use App\Models\Sector;
use App\Models\SectorService;
use App\Models\Service;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectors = Sector::get();
        $sectorServices = SectorService::whereDailyId(1)->get();
        $services = Service::whereDailyId(1)->get();
        $periods = Period::orderByDesc('id')->limit(3)->get()->reverse();
        return view('daily', compact('sectors', 'periods', 'sectorServices', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Daily::create($request->all());
        // $daily = Daily::findOrFail(1);
        // $data = $request->all();
        // $data['daily_id'] = $daily->id;
        // Service::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Daily $daily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daily $daily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daily $daily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daily $daily)
    {
        //
    }
}
