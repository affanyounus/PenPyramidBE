<?php

namespace App\Http\Controllers\PatronControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StorePortfolioRequest;
use App\Http\Requests\Update\UpdatePortfolioRequest;
use App\Models\Patron\Organization;
use App\Models\Patron\Portfolio;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        $organization = Organization::query()->where('org_handler_id', Auth::id())->first();

        $portfolio = Portfolio::create([
            'org_handler_id'=> Auth::id(),
            'organization_id'=> $organization->id,
            'title'=>$request->title,
        ]);

        return response()->json($portfolio, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
