@extends('layouts.navbaroff')

    @section('content')


        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{ __('messages.Add your offer') }}

                </div>
            </div>
        </div>



            <div class="alert alert-success flex-center form-group" role="alert" id="success_msg" style="display: none;">
                {{ __('messages.Offer added successfully') }}
              </div>

       <form method="POST" id="offerForm" action="{{ url('offers\store') }}" enctype="multipart/form-data">  {{-- route(offers.store)  --}}
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
              <input type="text" class="form-control"  name="name_ar" aria-describedby="emailHelp" placeholder="{{ __('messages.Enter Offer Arabic Name') }}">
              {{-- @error('name')
                    <small class="form-text text-danger">{{ $messages }}</small>
              @enderror --}}
            @error('name_ar')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">{{ __('messages.Offer Name in english') }}</label>
              <input type="text" class="form-control"  name="name_en" aria-describedby="emailHelp" placeholder="{{ __('messages.Enter Offer English Name') }}">
              {{-- @error('name')
                    <small class="form-text text-danger">{{ $messages }}</small>
              @enderror --}}
            @error('name_en')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">{{ __('messages.Offer Price') }}</label>
              <input type="text" class="form-control" name="price" placeholder="{{ __('messages.Enter the Price') }}">
              @error('price')

                    <small class="form-text text-danger">{{ $message }}</small>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">{{ __('messages.Offer Details in arabic') }}</label>
              <input type="text" class="form-control" name="details_ar" placeholder="{{ __('messages.Describe the offer in arabic') }}">
              @error('details_ar')

                    <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">{{ __('messages.Offer Details in english') }}</label>
              <input type="text" class="form-control" name="details_en" placeholder="{{ __('messages.Describe the offer in english') }}">
              @error('details_en')

                    <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>

            <button id="save_offer" class="btn btn-primary form-group">{{ __('messages.Save') }}</button>
          </form>

    @endsection

@section('scripts')
          <script>
            /* $("#btnSubmit").click(function (event) {

            //stop jquery ajax form submit with form data example, we will post it manually.
            event.preventDefault();

            // Get form
            var form = $('#myform')[0];

            // Create an FormData object
            var data = new FormData(form);

            // If you want to add an extra field for the FormData
            //data.append("CustomField", "This is some extra data, testing");

            // disabled the submit button
                    $("#btnSubmit").prop("disabled", true);

            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "/upload.php",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                success: function (data) {

                    $("#output").text(data);
                    console.log("SUCCESS : ", data);
                    $("#btnSubmit").prop("disabled", false);

                },
                error: function (e) {

                    $("#output").text(e.responseText);
                    console.log("ERROR : ", e);
                    $("#btnSubmit").prop("disabled", false);

                }
            });

            }); */
            $(document).on("click","#save_offer", function(e) {
                e.preventDefault();
                // alert(50);
                //var formData = new FormData($('#offerForm')[0]);
                //console.log(formData);
                //var fd = new FormData();
                //fd.append( '#offerForm', input.files[0] );
                $.ajax({
                    // url: '{{ route('ajax.offers.store') }}',
                    // data: fd,
                    // processData: false,
                    // contentType: false,
                    // type: 'POST',
                    // success: function(data){
                    //     alert(data);
                    // },error:function(reject){

                    // }
                    type:'POST',
                    // enctype:'multipart/form_data',
                    url:"{{ route('ajax.offers.store') }}",
                    data:
                    {
                        '_token':'{{ csrf_token() }}',
                         'photo':$("input[name='photo']").val() ,
                        'name_ar':$("input[name='name_ar']").val() ,
                        'name_en':$("input[name='name_en']").val() ,
                        'price':$("input[name='price']").val() ,
                        'details_ar':$("input[name='details_ar']").val() ,
                        'details_en':$("input[name='details_en']").val() ,
                    },
                    // proccessData:false,
                    // contentType:false,
                    // cache:false,
                    success:function(data){
                        if (data.status == true) {
                            $('#success_msg').show();
                        }
                    },error:function(reject){

                    }
                });
            });

          </script>
    @stop
