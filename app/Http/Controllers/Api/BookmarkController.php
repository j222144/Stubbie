<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        return response()->json($bookmarks, 200);
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
        $this->validate(
            $request, [
            'user_id' => 'required|int',
            'bookmark_name' => 'required',
            'website_url' => 'required',
            'private' => 'required|boolean',
            'favourite' => 'required|boolean',
        ]);

        $bookmark = Bookmark::create($request->all());
        $bookmark->users()->attach($bookmark->user_id);
        return response()->json($bookmark, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Bookmark $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark)
    {

        return response()->json($bookmark, 200);

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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Bookmark $bookmark)
    {

        $this->validate(
            $request, [
            'user_id' => 'required|int',
            'bookmark_name' => 'required',
            'website_url' => 'required',
            'private' => 'required|boolean',
            'favourite' => 'required|boolean',
        ]);

        $bookmark->update($request->all());
        $bookmark->users()->sync($bookmark->user_id);
        return response()->json($bookmark, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Bookmark $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark)
    {
        $bookmark->users()->sync([]);
        $bookmark->delete();
        return response()->json($bookmark, 204);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param array $request
     * @param Bookmark $bookmark
     */
    public function search(array $request)
    {
        if ($request['bookmark-tag'] == 'bookmark_name' and $request['name' != '']) {
            $bookmark = Bookmark::query()->where('bookmark_name', 'LIKE', "%{$request['name']}%")
                ->get();
            redirect(route('bookmarks.show', $bookmark));
        }


    }
}
