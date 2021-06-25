@extends('stubby.layouts.app')

@section('content')
    @include('stubby.layouts.bookmarkNav')


    <!--Medium Setup-->

    <div class="container bg-grey rounded padding-top15 mt-8 mx-auto">
        <table class="w-100 minimal width-100 align-center fixed-layout f-05 display-table">
            <thead class="thead-dark">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Bookmark name</th>
                <th class="text-center">By</th>
                <th class="text-center">Bookmark URL</th>
                <th class="text-center">Options</th>
            </tr>

            </thead>
            <tbody class="overflow wordWrap">
            @foreach($bookmarks as $bookmark)
                <tr>
                    <td class="text-center">{{$bookmark->id}}</td>
                    <td class="text-center">{{$bookmark->bookmark_name}}</td>
                    <td class="text-center">
                        @foreach($bookmark->users as $user)
                            {{$user->name}}
                        @endforeach
                    </td>
                    <td class="text-center"><a href="{{$bookmark->website_url}}">{{$bookmark->website_url}}</a></td>
                    <td class="">
                        <form method="GET" action="{{route('bookmarks.show',$bookmark->id)}}">
                            @csrf
                            <button class="button-wid-3rem myButton button button-primary" type="submit">view</button>
                        </form>
                        <form method="POST" action="{{route('bookmarks.destroy',$bookmark)}}">
                            @method('DELETE')
                            @csrf
                            <button class="button-wid-3rem myButton button button-red" type="submit">Delete</button>
                        </form>
                        <form method="GET" action="{{route('bookmarks.edit',$bookmark)}}">
                            @csrf
                            <button class="button-wid-3rem myButton button button-red" type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection





