@extends('layouts.navbaroff')

    @section('content')


        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{ __('messages.Edit your offer') }}

                </div>
            </div>
        </div>


        @if(Session::has('success'))

            <div class="alert alert-success flex-center form-group" role="alert">
                {{ Session::get('success') }}
              </div>
        @endif
       <form method="POST" action="{{ route('offers.update',$offer ->id) }}">  {{-- route(offers.store)  --}}
            @csrf
            {{-- <input name="_token" value="{{ csrf_token() }}"> --}}
            <div class="form-group">
                <label class="form-label" for="customFile">{{ __('messages.Enter your image') }}</label>
                <input type="file" class="form-control" name="photo" id="customFile" />
                @error('photo')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">{{ __('messages.Offer Name in arabic') }}</label>
              <input type="text" class="form-control"  name="name_ar" aria-describedby="emailHelp" value="{{ $offer->name_ar }}" placeholder="{{ __('messages.Enter Offer Arabic Name') }}">
              @error('name_ar')
                    <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            {{-- @error('name_ar')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror --}}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">{{ __('messages.Offer Name in english') }}</label>
              <input type="text" class="form-control"  name="name_en" aria-describedby="emailHelp" value="{{ $offer->name_en }}" placeholder="{{ __('messages.Enter Offer English Name') }}">
              {{-- @error('name')
                    <small class="form-text text-danger">{{ $message }}</small>
              @enderror --}}
            @error('name_en')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">{{ __('messages.Offer Price') }}</label>
              <input type="text" class="form-control" name="price" value="{{ $offer->price }}" placeholder="{{ __('messages.Enter the Price') }}">
              @error('price')

                    <small class="form-text text-danger">{{ $message }}</small>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">{{ __('messages.Offer Details in arabic') }}</label>
              <input type="text" class="form-control" name="details_ar" value="{{ $offer->details_ar }}" placeholder="{{ __('messages.Describe the offer in arabic') }}">
              @error('details_ar')

                    <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">{{ __('messages.Offer Details in english') }}</label>
              <input type="text" class="form-control" name="details_en" value="{{ $offer->details_en }}" placeholder="{{ __('messages.Describe the offer in english') }}">
              @error('details_en')

                    <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary form-group">{{ __('messages.Save') }}</button>
          </form>

          @endsection
