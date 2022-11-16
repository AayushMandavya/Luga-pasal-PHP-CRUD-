<?php

namespace App\Http\Controllers;

use App\Models\lugapasal;
use Illuminate\Http\Request;

class pasalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome',['items'=>lugapasal::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $lugaobj= new lugapasal();
        $lugaobj->BhNo=$req->BhNo;
        $lugaobj->Quantity=$req->quantity;
        $lugaobj->Status=$req->status;
        $lugaobj->Remarks=$req->remarks;
        $lugaobj->save();
        return redirect("/");
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
     * @param  \App\Models\lugapasal  $lugapasal
     * @return \Illuminate\Http\Response
     */
    public function show(lugapasal $lugapasal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lugapasal  $lugapasal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = lugapasal::find($id);
        return view("edit",['items'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lugapasal  $lugapasal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
        $updatedItem = lugapasal::find($id);
        $updatedItem->BhNo = $req->BhNo;
        $updatedItem->quantity = $req->quantity;
        $updatedItem->status = $req->status;
        $updatedItem->remarks = $req->remarks;
        $updatedItem->save();
        return redirect("/");    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lugapasal  $lugapasal
     * @return \Illuminate\Http\Response
     */
    public function destroy(lugapasal $lugapasal,$id)
    {
        $item = lugapasal::find($id);
        $item->delete();
        return redirect("/");
    }
}
