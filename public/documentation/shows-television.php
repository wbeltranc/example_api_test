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
                <h1 class="h2"><code>GET</code> /api/tvshows</h1>
            </div>
            <div class="container">
                <p>Obtener lista de shows de televisón</p>
                <h2 class="sub-header">Request</h2>
                <pre><strong>End Point:</strong> http://www.dominio.com/api/tvshows</pre>
                <h2 class="sub-header">Response</h2>
                <pre class="response">[
  {
    "id": 1,
    "url": "http://www.tvmaze.com/shows/1/under-the-dome",
    "name": "Under the Dome",
    "type": "Scripted",
    "language": "English",
    "genres": [
      "Drama",
      "Science-Fiction",
      "Thriller"
    ],
    "status": "Ended",
    "runtime": 60,
    "premiered": "2013-06-24",
    "officialSite": "http://www.cbs.com/shows/under-the-dome/",
    "schedule": {
      "time": "22:00",
      "days": [
        "Thursday"
      ]
    },
    "rating": {
      "average": 6.5
    },
    "weight": 97,
    "network": {
      "id": 2,
      "name": "CBS",
      "country": {
        "name": "United States",
        "code": "US",
        "timezone": "America/New_York"
      }
    },
    "webChannel": null,
    "externals": {
      "tvrage": 25988,
      "thetvdb": 264492,
      "imdb": "tt1553656"
    },
    "image": {
      "medium": "http://static.tvmaze.com/uploads/images/medium_portrait/81/202627.jpg",
      "original": "http://static.tvmaze.com/uploads/images/original_untouched/81/202627.jpg"
    },
    "summary": "<p><b>Under the Dome</b> is the story of a small town that is suddenly and inexplicably sealed off from the rest of the world by an enormous transparent dome. The town's inhabitants must deal with surviving the post-apocalyptic conditions while searching for answers about the dome, where it came from and if and when it will go away.</p>",
    "updated": 1573667713,
    "_links": {
      "self": {
        "href": "http://api.tvmaze.com/shows/1"
      },
      "previousepisode": {
        "href": "http://api.tvmaze.com/episodes/185054"
      }
    }
  },
  {
    "id": 2,
    "url": "http://www.tvmaze.com/shows/2/person-of-interest",
    "name": "Person of Interest",
    "type": "Scripted",
    "language": "English",
    "genres": [
      "Action",
      "Crime",
      "Science-Fiction"
    ],
    "status": "Ended",
    "runtime": 60,
    "premiered": "2011-09-22",
    "officialSite": "http://www.cbs.com/shows/person_of_interest/",
    "schedule": {
      "time": "22:00",
      "days": [
        "Tuesday"
      ]
    },
    "rating": {
      "average": 8.9
    },
    "weight": 95,
    "network": {
      "id": 2,
      "name": "CBS",
      "country": {
        "name": "United States",
        "code": "US",
        "timezone": "America/New_York"
      }
    },
    "webChannel": null,
    "externals": {
      "tvrage": 28376,
      "thetvdb": 248742,
      "imdb": "tt1839578"
    },
    "image": {
      "medium": "http://static.tvmaze.com/uploads/images/medium_portrait/163/407679.jpg",
      "original": "http://static.tvmaze.com/uploads/images/original_untouched/163/407679.jpg"
    },
    "summary": "<p>You are being watched. The government has a secret system, a machine that spies on you every hour of every day. I know because I built it. I designed the Machine to detect acts of terror but it sees everything. Violent crimes involving ordinary people. People like you. Crimes the government considered \"irrelevant\". They wouldn't act so I decided I would. But I needed a partner. Someone with the skills to intervene. Hunted by the authorities, we work in secret. You'll never find us. But victim or perpetrator, if your number is up, we'll find you.</p>",
    "updated": 1588773151,
    "_links": {
      "self": {
        "href": "http://api.tvmaze.com/shows/2"
      },
      "previousepisode": {
        "href": "http://api.tvmaze.com/episodes/659372"
      }
    }
  },
  {
    "id": 3,
    "url": "http://www.tvmaze.com/shows/3/bitten",
    "name": "Bitten",
    "type": "Scripted",
    "language": "English",
    "genres": [
      "Drama",
      "Horror",
      "Romance"
    ],
    "status": "Ended",
    "runtime": 60,
    "premiered": "2014-01-11",
    "officialSite": "http://bitten.space.ca/",
    "schedule": {
      "time": "22:00",
      "days": [
        "Friday"
      ]
    },
    "rating": {
      "average": 7.5
    },
    "weight": 83,
    "network": {
      "id": 7,
      "name": "CTV Sci-Fi Channel",
      "country": {
        "name": "Canada",
        "code": "CA",
        "timezone": "America/Halifax"
      }
    },
    "webChannel": null,
    "externals": {
      "tvrage": 34965,
      "thetvdb": 269550,
      "imdb": "tt2365946"
    },
    "image": {
      "medium": "http://static.tvmaze.com/uploads/images/medium_portrait/0/15.jpg",
      "original": "http://static.tvmaze.com/uploads/images/original_untouched/0/15.jpg"
    },
    "summary": "<p>Based on the critically acclaimed series of novels from Kelley Armstrong. Set in Toronto and upper New York State, <b>Bitten</b> follows the adventures of 28-year-old Elena Michaels, the world's only female werewolf. An orphan, Elena thought she finally found her \"happily ever after\" with her new love Clayton, until her life changed forever. With one small bite, the normal life she craved was taken away and she was left to survive life with the Pack.</p>",
    "updated": 1577538672,
    "_links": {
      "self": {
        "href": "http://api.tvmaze.com/shows/3"
      },
      "previousepisode": {
        "href": "http://api.tvmaze.com/episodes/631862"
      }
    }
  }
]
                </pre>
            </div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><code>GET</code> /api/tvshows/:id</h1>
            </div>
            <div class="container">
                <p>Obtener detalle del show de televisón</p>
                <h2 class="sub-header">Request</h2>
                <pre><strong>End Point:</strong> http://www.dominio.com/api/tvshows/:id</pre>
                <h2 class="sub-header">Response</h2>
                <pre class="response">{
  "id": 3,
  "url": "http://www.tvmaze.com/shows/3/bitten",
  "name": "Bitten",
  "type": "Scripted",
  "language": "English",
  "genres": [
    "Drama",
    "Horror",
    "Romance"
  ],
  "status": "Ended",
  "runtime": 60,
  "premiered": "2014-01-11",
  "officialSite": "http://bitten.space.ca/",
  "schedule": {
    "time": "22:00",
    "days": [
      "Friday"
    ]
  },
  "rating": {
    "average": 7.5
  },
  "weight": 83,
  "network": {
    "id": 7,
    "name": "CTV Sci-Fi Channel",
    "country": {
      "name": "Canada",
      "code": "CA",
      "timezone": "America/Halifax"
    }
  },
  "webChannel": null,
  "externals": {
    "tvrage": 34965,
    "thetvdb": 269550,
    "imdb": "tt2365946"
  },
  "image": {
    "medium": "http://static.tvmaze.com/uploads/images/medium_portrait/0/15.jpg",
    "original": "http://static.tvmaze.com/uploads/images/original_untouched/0/15.jpg"
  },
  "summary": "<p>Based on the critically acclaimed series of novels from Kelley Armstrong. Set in Toronto and upper New York State, <b>Bitten</b> follows the adventures of 28-year-old Elena Michaels, the world's only female werewolf. An orphan, Elena thought she finally found her \"happily ever after\" with her new love Clayton, until her life changed forever. With one small bite, the normal life she craved was taken away and she was left to survive life with the Pack.</p>",
  "updated": 1577538672,
  "_links": {
    "self": {
      "href": "http://api.tvmaze.com/shows/3"
    },
    "previousepisode": {
      "href": "http://api.tvmaze.com/episodes/631862"
    }
  }
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