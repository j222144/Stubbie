<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3a46618ac6.js" crossorigin="anonymous"></script>
    <title>URL Shortener</title>
</head>
<body>
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell text-center float-center">
                <form action='#' autocomplete="off">
                    <i class="fas fa-link"></i>
                    <input type="text" placeholder="Enter website url">
                    <a class="button">Shorten</a>
                </form>
            </div>
        </div>


        <div class="stubby-table">
            <div class="stubby-url-area">
                <div class="grid-x stubby-titles">
                    <div class="cell medium-3">
                        <li>Stubby URL</li>
                    </div>
                    <div class="cell medium-5">
                        <li>Original URL</li>
                    </div>
                    <div class="cell medium-2">
                        <li>Expires in</li>
                    </div>
                    <div class="cell medium-2">
                        <li>Action</li>
                    </div>
                </div>
                <div class="grid-x stubby-data">
                    <div class="cell small-12 stubby-item">
                        <div class="cell small-3">
                            <a href="#" target="_blank">Shortened URL data</a>
                        </div>
                        <div class="cell small-5">
                            Full URL data
                        </div>
                        <div class="cell small-2">
                            expires
                        </div>
                        <div class="cell small-2">
                            <a href="#">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
