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
    <div class="grid-container fluid">
        <div class="grid-x">
            <div class="cell text-center float-center">
                <form action='#' autocomplete="off">
                    <i class="fas fa-link"></i>
                    <input type="text" placeholder="Enter website url">
                    <a class="button">Shorten</a>
                </form>
            </div>
        </div>


        <div class="cell stubby-table">
            <table>
                <thead>
                    <tr class="stubby-table-head">
                        <th class="column-short-url">Stubby URL</th>
                        <th class="column-long-url">Website URL</th>
                        <th class="column-name">Name</th>
                        <th class="column-expiry">Expires in</th>
                        <th class="column-action">Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="column-short-url"><a href="#">stubby.com/haha</a></td>
                    <td class="column-long-url"><a href="#">www.youtube.com</a></td>
                    <td class="column-name">Funny Youtube video</td>
                    <td class="column-expiry">3.5 days</td>
                    <td class="column-action"><a href="#"><strong>Delete</strong></a></td>
                </tr>
                <tr>
                    <td class="column-short-url"><a href="#">stubby.com/haha</a></td>
                    <td class="column-long-url"><a href="#">www.youtube.com</a></td>
                    <td class="column-name">Funny Youtube video</td>
                    <td class="column-expiry">3.5 days</td>
                    <td class="column-action"><a href="#"><strong>Delete</strong></a></td>
                </tr>
                <tr>
                    <td class="column-short-url"><a href="#">stubby.com/haha</a></td>
                    <td class="column-long-url"><a href="#">www.youtube.com</a></td>
                    <td class="column-name">Funny Youtube video</td>
                    <td class="column-expiry">3.5 days</td>
                    <td class="column-action"><a href="#"><strong>Delete</strong></a></td>
                </tr>
                <tr>
                    <td class="column-short-url"><a href="#">stubby.com/haha</a></td>
                    <td class="column-long-url"><a href="#">www.youtube.com</a></td>
                    <td class="column-name">Funny Youtube video</td>
                    <td class="column-expiry">3.5 days</td>
                    <td class="column-action"><a href="#"><strong>Delete</strong></a></td>
                </tr>
                <tr>
                    <td class="column-short-url"><a href="#">stubby.com/haha</a></td>
                    <td class="column-long-url"><a href="#">www.youtube.com</a></td>
                    <td class="column-name">Funny Youtube video</td>
                    <td class="column-expiry">3.5 days</td>
                    <td class="column-action"><a href="#"><strong>Delete</strong></a></td>
                </tr>
                <tr>
                    <td class="column-short-url"><a href="#">stubby.com/haha</a></td>
                    <td class="column-long-url"><a href="#">www.youtube.com</a></td>
                    <td class="column-name">Funny Youtube video</td>
                    <td class="column-expiry">3.5 days</td>
                    <td class="column-action"><a href="#"><strong>Delete</strong></a></td>
                </tr>
                </tbody>
        </div>
    </div>

</body>
</html>
