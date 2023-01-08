<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .full-hight{
                /* height: 100vh; */
            }
            .flex-center{
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content{
                text-align: center;
            }
            .title{
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md{
                margin: 30px 0;
            }
            .form-group{
                margin: 10px 35%;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item active">
                    <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }} <span class="sr-only">(current)</span></a>
                    </li>
                @endforeach
              </ul>

              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Add your offer
                </div>
            </div>
        </div>


        @if(Session::has('success'))

            <div class="alert alert-success flex-center form-group" role="alert">
                {{ Session::get('success') }}
              </div>
        @endif
       <form method="POST" action="{{ url('offers\store') }}">  {{-- route(offers.store)  --}}
            @csrf
            {{-- <input name="_token" value="{{ csrf_token() }}"> --}}

            <div class="form-group">
              <label for="exampleInputEmail1">Offer Name</label>
              <input type="text" class="form-control"  name="name" aria-describedby="emailHelp" placeholder="Enter Offer Name">
              {{-- @error('name')
                    <small class="form-text text-danger">{{ $messages }}</small>
              @enderror --}}
            @error('name')
                <div class="form-text text-danger">{{ $messages }}</div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Offer Price</label>
              <input type="text" class="form-control" name="price" placeholder="Price">
              @error('price')

                    <small class="form-text text-danger">{{ $messages }}</small>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Offer Details</label>
              <input type="text" class="form-control" name="details" placeholder="Describe the offer">
              @error('details')

                    <small class="form-text text-danger">{{ $messages }}</small>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary form-group">Save Offer</button>
          </form>

    </body>
</html>
