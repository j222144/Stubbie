<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">StubbyApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ (request()->is('/stubbies*')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('stubbies.index')}}">Stubby's</a>
            </li>
            <li class="nav-item {{ (request()->is('/bookmarks*')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('bookmarks.index')}}">Bookmarks</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Teams
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">team1</a>
                    <a class="dropdown-item" href="#">team2</a>
                    <a class="dropdown-item" href="#">team3</a>
                </div>
            </li>
            <li class="nav-item {{ (request()->is('/profile*')) ? 'active' : '' }}">
                <a class="nav-link" href="#">Profile</a>
            </li>
        </ul>
    </div>
</nav>
