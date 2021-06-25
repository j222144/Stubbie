@extends('stubby.layouts.app')

@section('content')
    @include('stubby.layouts.bookmarkNav')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <body class="antialiased">
            <div class="mt-8 mx-auto container bg-grey rounded padding-top15">
                <?php $bookmark = new \App\Models\Bookmark();?>
                <form method="POST" action="{{route('bookmarks.store',$bookmark)}}">
                    @csrf
                    <table>
                        <tr class="text-center">
                            <th>Bookmark Name</th>
                            <th>URL</th>
                            <th>Private</th>
                            <th>Favourite</th>
                        </tr>
                        <tbody>
                        <tr>
                            <td><input type="text" id="bname" name="bookmark_name" value="{{$bookmark->bookmark_name}}" required></td>
                            <td><input type="text" id="burl" name="website_url" value="{{$bookmark->website_url}}" required></td>
                            <td style="text-align: center"><input name="private" id="bprivate" type="checkbox" value="true" ></td>
                            <td style="text-align: center"><input name="favourite" id="bfavourite" type="checkbox" value="true"></td>
                        </tr>
                        </tbody>
                    </table>
                    <button class="button button-primary" type="submit">Create</button>
                </form>
            </div>
            </body>
        </div>
    </div>
@endsection
