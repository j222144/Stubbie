<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmarks = Bookmark::all();
        return view('bookmarks.index', ['bookmarks' => $bookmarks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('bookmarks.create');
        } else {
            return redirect(route('login'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookmark = new Bookmark();
        $bookmark->fill($request->all());
        $bookmark->user_id = Auth::id();
        if ($request['favourite'] == 'true')
            $bookmark->favourite = true;
        if ($request['private'] == 'true')
            $bookmark->private = true;
        $bookmark->save();
        $bookmark->users()->attach($bookmark->user_id);
        return redirect(route('bookmarks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Bookmark $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark)
    {
        $isCollection = false;
        if (is_a($bookmark, 'Illuminate\Database\Eloquent\Collection'))
            $isCollection = true;

        return view('bookmarks.show', ['bookmarks' => $bookmark, 'isCollection' => $isCollection]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Bookmark $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        return view('bookmarks.edit', compact('bookmark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bookmark $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookmark $bookmark)
    {
        dd($request->all());

        $bookmark->fill($request->all());
        if ($request['favourite'] == 'true')
            $bookmark->favourite = true;
        else
            $bookmark->favourite = false;
        if ($request['private'] == 'true')
            $bookmark->private = true;
        else
            $bookmark->private = false;
        $bookmark->user_id = Auth::id();
        $bookmark->users()->sync($bookmark->user_id);
        $bookmark->save();
        return redirect(route('bookmarks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Bookmark $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark)
    {
        $deletedID = $bookmark->id;
        $bookmark->users()->sync([]);
        $bookmark->delete();
        return redirect(route('bookmarks.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param array $request
     * @param Bookmark $bookmark
     */
    public function search(array $request)
    {
        if($request['bookmark-tag'] == 'bookmark_name' and $request['name' != '']){
            $bookmark = Bookmark::query()->where('bookmark_name','LIKE',"%{$request['name']}%")
                ->get();
            redirect(route('bookmarks.show',$bookmark));
        }


    }
}
