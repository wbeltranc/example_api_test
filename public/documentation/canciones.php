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
                <h1 class="h2"><code>GET</code> /api/tracks</h1>
            </div>
            <div class="container">
                <p>Obtener lista de canciones</p>
                <h2 class="sub-header">Request</h2>
                <pre><strong>End Point:</strong> http://www.dominio.com/api/tracks</pre>
                <ul>
                    <li>Parametros:
                        <table class="table">
                            <tbody>
                            <tr>
                                <td><code>terms</code></td>
                                <td>Artista, canción o palabra por la que desea buscar</td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>Content Type: <i>application/json</i></li>
                </ul>
                <h2 class="sub-header">Response</h2>
                <pre class="response">{
  "resultCount": 2,
  "results": [
    {
      "wrapperType": "track",
      "kind": "song",
      "artistId": 1093826894,
      "collectionId": 1093825788,
      "trackId": 1093826892,
      "artistName": "Search",
      "collectionName": "Late Night Tales: Nightmares On Wax",
      "trackName": "Action Tape 1 (Aim Madscope Mix)",
      "collectionCensoredName": "Late Night Tales: Nightmares On Wax",
      "trackCensoredName": "Action Tape 1 (Aim Madscope Mix)",
      "collectionArtistId": 39883158,
      "collectionArtistName": "Nightmares On Wax",
      "collectionArtistViewUrl": "https://music.apple.com/us/artist/nightmares-on-wax/39883158?uo=4",
      "artistViewUrl": "https://music.apple.com/us/artist/search/1093826894?uo=4",
      "collectionViewUrl": "https://music.apple.com/us/album/action-tape-1-aim-madscope-mix/1093825788?i=1093826892&uo=4",
      "trackViewUrl": "https://music.apple.com/us/album/action-tape-1-aim-madscope-mix/1093825788?i=1093826892&uo=4",
      "previewUrl": "https://audio-ssl.itunes.apple.com/itunes-assets/Music69/v4/83/e0/c6/83e0c6a0-c5c0-3119-f5f0-d795bd19d204/mzaf_49609106815518623.plus.aac.p.m4a",
      "artworkUrl30": "https://is2-ssl.mzstatic.com/image/thumb/Music69/v4/76/57/6a/76576a84-c1c1-ece8-bcfd-358d2de39948/source/30x30bb.jpg",
      "artworkUrl60": "https://is2-ssl.mzstatic.com/image/thumb/Music69/v4/76/57/6a/76576a84-c1c1-ece8-bcfd-358d2de39948/source/60x60bb.jpg",
      "artworkUrl100": "https://is2-ssl.mzstatic.com/image/thumb/Music69/v4/76/57/6a/76576a84-c1c1-ece8-bcfd-358d2de39948/source/100x100bb.jpg",
      "collectionPrice": 10.99,
      "trackPrice": 1.29,
      "releaseDate": "1998-04-01T12:00:00Z",
      "collectionExplicitness": "notExplicit",
      "trackExplicitness": "notExplicit",
      "discCount": 1,
      "discNumber": 1,
      "trackCount": 17,
      "trackNumber": 9,
      "trackTimeMillis": 328933,
      "country": "USA",
      "currency": "USD",
      "primaryGenreName": "Electronic",
      "isStreamable": false
    },
    {
      "wrapperType": "track",
      "kind": "song",
      "artistId": 4071404,
      "collectionId": 5357909,
      "trackId": 5357893,
      "artistName": "The String Cheese Incident",
      "collectionName": "Outside Inside",
      "trackName": "Search",
      "collectionCensoredName": "Outside Inside",
      "trackCensoredName": "Search",
      "artistViewUrl": "https://music.apple.com/us/artist/the-string-cheese-incident/4071404?uo=4",
      "collectionViewUrl": "https://music.apple.com/us/album/search/5357909?i=5357893&uo=4",
      "trackViewUrl": "https://music.apple.com/us/album/search/5357909?i=5357893&uo=4",
      "previewUrl": "https://audio-ssl.itunes.apple.com/itunes-assets/Music/v4/62/85/5a/62855a1d-4523-961e-cccc-891491ddf692/mzaf_8868945316085882862.plus.aac.p.m4a",
      "artworkUrl30": "https://is2-ssl.mzstatic.com/image/thumb/Music/v4/d7/b1/b5/d7b1b5c8-152d-f823-0f18-c83c104587e8/source/30x30bb.jpg",
      "artworkUrl60": "https://is2-ssl.mzstatic.com/image/thumb/Music/v4/d7/b1/b5/d7b1b5c8-152d-f823-0f18-c83c104587e8/source/60x60bb.jpg",
      "artworkUrl100": "https://is2-ssl.mzstatic.com/image/thumb/Music/v4/d7/b1/b5/d7b1b5c8-152d-f823-0f18-c83c104587e8/source/100x100bb.jpg",
      "collectionPrice": 9.99,
      "trackPrice": 0.99,
      "releaseDate": "2001-05-15T12:00:00Z",
      "collectionExplicitness": "notExplicit",
      "trackExplicitness": "notExplicit",
      "discCount": 1,
      "discNumber": 1,
      "trackCount": 11,
      "trackNumber": 4,
      "trackTimeMillis": 278293,
      "country": "USA",
      "currency": "USD",
      "primaryGenreName": "Rock",
      "isStreamable": true
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