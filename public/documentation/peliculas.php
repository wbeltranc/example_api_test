<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>API Test</title>
    <link href="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.css" rel="stylesheet">
    <style>
        code {
            padding: 2px 4px;
            font-size: 90%;
            color: #c7254e!important;
            background-color: #f9f2f4;
            border-radius: 4px;
        }

        pre {
            display: block;
            padding: 9.5px;
            margin: 0 0 10px;
            font-size: 13px;
            line-height: 1.42857143;
            color: #333;
            word-break: break-all;
            word-wrap: break-word;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .response {
            background: #ebf6ff;
            color: #3a5c3a!important;
            border: 1px solid #888;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">API Test</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav px-3">
        <span class="navbar-text">
            <small>Version 1.0</small>
        </span>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <?php include 'partials/sidebar.php' ?>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><code>GET</code> /api/movies</h1>
            </div>
            <div class="container">
                <p>Obtener lista de películas</p>
                <h2 class="sub-header">Request</h2>
                <pre><strong>End Point:</strong> http://www.dominio.com/api/movies</pre>
                <ul>
                    <li>Parametros:
                        <table class="table">
                            <tbody>
                            <tr>
                                <td><code>terms</code></td>
                                <td>Actor, película o palabra por la que desea buscar</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>Content Type: <i>application/json</i></li>
                </ul>
                <h2 class="sub-header">Response</h2>
                <pre class="response">{
  "resultCount": 1,
  "results": [
    {
      "wrapperType": "track",
      "kind": "feature-movie",
      "trackId": 1273881776,
      "artistName": "Pulkit",
      "trackName": "Maroon",
      "trackCensoredName": "Maroon",
      "trackViewUrl": "https://itunes.apple.com/us/movie/maroon/id1273881776?uo=4",
      "previewUrl": "https://video-ssl.itunes.apple.com/itunes-assets/Video118/v4/95/5b/87/955b87d7-927a-dace-886b-220cb5bda664/mzvf_8583036537424826099.640x358.h264lc.U.p.m4v",
      "artworkUrl30": "https://is4-ssl.mzstatic.com/image/thumb/Video118/v4/0c/82/45/0c8245ee-bf66-a726-6e7d-f43a94fbc335/source/30x30bb.jpg",
      "artworkUrl60": "https://is4-ssl.mzstatic.com/image/thumb/Video118/v4/0c/82/45/0c8245ee-bf66-a726-6e7d-f43a94fbc335/source/60x60bb.jpg",
      "artworkUrl100": "https://is4-ssl.mzstatic.com/image/thumb/Video118/v4/0c/82/45/0c8245ee-bf66-a726-6e7d-f43a94fbc335/source/100x100bb.jpg",
      "collectionPrice": 12.99,
      "trackPrice": 12.99,
      "trackRentalPrice": 3.99000,
      "collectionHdPrice": 14.99000,
      "trackHdPrice": 14.99000,
      "trackHdRentalPrice": 3.99000,
      "releaseDate": "2016-10-22T07:00:00Z",
      "collectionExplicitness": "notExplicit",
      "trackExplicitness": "notExplicit",
      "trackTimeMillis": 5645600,
      "country": "USA",
      "currency": "USD",
      "primaryGenreName": "Thriller",
      "contentAdvisoryRating": "PG",
      "shortDescription": "An insomniac university professor fears as his wife has gone missing and is clueless resulting him",
      "longDescription": "An insomniac university professor fears as his wife has gone missing and is clueless resulting him driving Marooned in the house through the psychological traumas."
    }
  ]
}
                </pre>
            </div>
        </main>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>