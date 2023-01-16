@extends('layouts.navbaroff')

    @section('content')

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('erorr') }}
        </div>
    @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    {{-- <th scope="col">{{ __('messages.Offer Name in arabic') }}</th>
                    <th scope="col">{{ __('messages.Offer Name in english') }}</th> --}}
                    <th scope="col">{{ __('messages.Offer Name') }}</th>
                    <th scope="col">{{ __('messages.Offer Price') }}</th>
                    <th scope="col">{{ __('messages.Offer photo') }}</th>
                    <th scope="col">{{ __('messages.Offer Details')}}</th>
                    <th scope="col" colspan="2" class="text-center">{{ __('messages.operation')}}</th>
                    {{-- <th scope="col">{{ __('messages.Offer Details in arabic')}}</th>
                    <th scope="col">{{ __('messages.Offer Details in english')}}</th> --}}
                </tr>
            </thead>
                <tbody>
                    @foreach ($offers as $offer)
                        <tr>
                            <th scope="row">{{ $offer -> id }}</th>
                            {{-- <th>{{ $offer -> name_ar }}</th>
                            <th>{{ $offer -> name_en }}</th> --}}
                            <td>{{ $offer -> name }}</td>
                            <td>{{ $offer -> price }}</td>
                            {{-- <td>{{ $offer -> photo }}</td> --}}
                            <td><img src="{{ asset('dist/images/offers/'.$offer -> photo) }}" style="height: 60px; width:60px; " alt="offer_photo"></td>
                            <td>{{ $offer -> details }}</td>
                            <td><a href="{{ url('offers/edit/'.$offer -> id) }}" style="padding-left:25%;"><button class="btn btn-success">{{ __('messages.edit') }}</button></a></td>
                            <td><a href="{{ url('offers/delete/'.$offer -> id) }}" style="padding-left:25%;"><button class="btn btn-danger">{{ __('messages.delete') }}</button></a></td>
                            {{-- <th>{{ $offer -> details_ar }}</th>
                            <th>{{ $offer -> details_en }}</th> --}}
                        </tr>
                    @endforeach
                </tbody>
        </table>

    @endsection
