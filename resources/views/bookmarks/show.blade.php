@extends('stubby.layouts.app')

@section('content')
    @include('stubby.layouts.bookmarkNav')
    <div class="container bg-grey rounded padding-top15 mt-8 mx-auto">
        <table class="w-100 minimal width-100 align-center fixed-layout f-05 display-table">
            <thead class="thead-dark">
            <tr class="text-center">
                <th class="text-center">ID</th>
                <th class="text-center">Bookmark name</th>
                <th class="text-center">By</th>
                <th class="text-center">Bookmark URL</th>
                <th class="text-center">Private</th>
                <th class="text-center">Favourite</th>
                <th class="text-center">Options</th>
            </tr>
            </thead>

            <tbody class="overflow wordWrap">
            @if($isCollection)
                @foreach($bookmarks as $bookmark)
                    <tr class="text-center">
                        <td>{{$bookmark->id}}</td>
                        <td></td>
                        {{$bookmark->bookmark_name}}</td>
                        @foreach($bookmark->users as $user)
                            <td>{{$user->name}}</td>
                        @endforeach
                        <td><a href="{{$bookmark->website_url}}">{{$bookmark->website_url}}</a></td>
                        @if(@$bookmark->private == 1)
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif

                        @if(@$bookmark->favourite == 1)
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif
                        <td>
                            <form method="GET" action="{{route('products.edit',$bookmark)}}">
                                @csrf
                                <button class="button-wid-3rem myButton button button-red" type="submit">Edit</button>
                            </form>
                            <form method="POST" action="{{route('bookmarks.destroy',$bookmark)}}">
                                @method('DELETE')
                                @csrf
                                <button class="button-wid-3rem myButton button button-red" type="submit">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            @else
                <tr>
                    <td class="text-center">{{$bookmarks->id}}</td>
                    <td class="text-center">{{$bookmarks->bookmark_name}}</td>
                    @foreach($bookmarks->users as $user)
                        <td class="text-center">{{$user->name}}</td>
                    @endforeach
                    <td class="text-center"><a
                            href="{{$bookmarks->website_url}}">{{$bookmarks->website_url}}</a></td>
                    @if($bookmarks->private == 1)
                        <td class="text-center">Yes</td>
                    @else
                        <td class="text-center">No</td>
                    @endif

                    @if($bookmarks->favourite == 1)
                        <td class="text-center">Yes</td>
                    @else
                        <td class="text-center">No</td>
                    @endif
                    <td>
                        <form method="GET" action="{{route('bookmarks.edit',$bookmarks)}}">
                            @csrf
                            <button class="button-wid-3rem myButton button button-red" type="submit">Edit</button>
                        </form>
                        <form method="POST" action="{{route('bookmarks.destroy',$bookmarks)}}">
                            @method('DELETE')
                            @csrf
                            <button class="button-wid-3rem myButton button button-red" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
            @endif


            </tbody>
        </table>

    </div>

@endsection
