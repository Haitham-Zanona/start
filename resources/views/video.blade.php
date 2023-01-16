@extends('layouts.navbaroff')

    @section('content')


       <div class="content">
            <div class="title m-b-md flex-center" style="margin-top: 50px">
                   Video viewer({{ $video -> viewer }})
            </div>
            <div class="flex-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UN6wWphtRpk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>

       </div>
    @endsection
