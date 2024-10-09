<?php

namespace App\Http\Controllers\PatronControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StoreDeskRequest;
use App\Http\Requests\Update\UpdateDeskRequest;
use App\Models\Patron\Desk;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Desk $workspace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desk $workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeskRequest $request, Desk $workspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desk $workspace)
    {
        //
    }
}
