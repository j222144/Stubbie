<nav class="navbar navbar-expand-md navbar-dark bookmarkNavColor cell small-12 grid-x">
    <a class="navbar-brand cell small-2">
        <?php $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
        $bookmarkC = new \App\Http\Controllers\BookmarkController();
        ?>
        @if($routeName == "bookmarks.index")
            All Bookmarks
        @elseif($routeName == "bookmarks.create")
            Add Bookmarks
        @elseif($routeName == "bookmarks.edit")
            Edit Bookmarks
        @elseif($routeName == "bookmarks.show")
            Searched Bookmarks
        @endif</a>
    <button class="navbar-toggler cell small-3" type="button" data-toggle="collapse" data-target="#BookmarkNav"
            aria-controls="BookmarkNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse cell small-7 medium-10 grid-x" id="BookmarkNav">
        <ul class="navbar-nav cell medium-12 grid-x overflow">
            <li class="nav-item active cell small-12 medium-2">
                <a class="nav-link" href="{{route('bookmarks.index')}}">All Bookmarks <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active cell small-12 medium-2">
                <a class="nav-link" href="{{route('bookmarks.create')}}">Add Bookmark</a>
            </li>
            <?php
            //problem with getting request
            //can't seem to call the search function or Use POST as a method.
            //if (isset($_GET['submit'])){
               //$bookmarkC->search($_REQUEST);

            //}
            ?>
            <!--nathan Note :: Search Feature is put on hold for now Until I am done with Bookmark-->
            <form name="search" id="search" class="nav-item clearfix nav-item transparent cell small-12 medium-8 grid-x max-height-2rem" method="GET"
                  action="">
                @csrf
                <select class="padding-all0 cell small-12 medium-3" id="pcategory" name="bookmark-tag">
                    <option value="bookmark_name">By Name</option>
                    <option value="id">By ID</option>
                    <option value="user_username">By Username</option>
                </select>
                <input class="cell small-12 medium-6" type="text" id="bname" name="name" value=""
                       required>
                <button class="cell small-12 medium-3 button button-primary" form="search" type="submit">Search</button>

            </form>


        </ul>
    </div>
</nav>

