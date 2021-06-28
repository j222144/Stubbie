<?php

namespace App\Http\Controllers;

use App\Models\Stubby;
use Illuminate\Http\Request;

class StubbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stubbies = Stubby::where('user_id', auth()->user()->id)->get();
        return view('stubby.index', ['stubbies' => $stubbies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stubby.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'long_url' => 'required',
            'stubby_name' => 'required',
            'short_url' => 'required',
        ]);

        $stubby = new Stubby();
        $stubby->long_url = $request->long_url;
        $stubby->stubby_name = $request->stubby_name;
        $stubby->short_url = "stubbyapp.com/{$request->short_url}";
        $stubby->user_id = auth()->user()->id;
        $stubby->is_active = true;
        $stubby->save();
        return redirect(route('stubbies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stubby  $stubby
     * @return \Illuminate\Http\Response
     */
    public function show(Stubby $stubby)
    {
        return view('stubby.index', [
            'stubbies' => $stubby,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stubby  $stubby
     * @return \Illuminate\Http\Response
     */
    public function edit(Stubby $stubby)
    {
        return view('stubby.show', [
            'stubby' => $stubby,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stubby  $stubby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stubby $stubby)
    {
        $this->validate($request, [
            'long_url' => 'required|string',
            'stubby_name' => 'required',
            'short_url' => 'required',
        ]);

        $update = Stubby::find($stubby->id);
        $update->fill($request->all());
        $update->save();


        return redirect(route('stubbies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stubby  $stubby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stubby $stubby)
    {
        $stubby->delete();
        return redirect(route('stubbies.index'));
    }
}
