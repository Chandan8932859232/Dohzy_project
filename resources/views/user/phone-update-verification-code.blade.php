@extends('layouts.user')

@section('title', 'Phone Verification Updates')

@section('content')


    <?php $user_Id = $data['user_id']; ?>



    <div class="row">
        <div class="col-sm-8">
            <h3 class="text-center mt-3 form_title">{{ __('provide phone verification code') }}</h3>
            <hr>




            <div class="container">

                <form action="{{ route('update.validate.verification.code') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $data['user_id'] }}">
                    <input type="hidden" name="phone_number" value="{{ $data['phone_number'] }}">
                    <input type="hidden" name="phone_type" value="{{ $data['phone_type'] }}">
                    <input type="hidden" name="userPhoneUpdate" value="{{ $data['userPhoneUpdate'] }}">
                    {{-- <input type="hidden" name="verification_code" value="{{$data['verification_code'] }}"> --}}
                    <input type="hidden" name="country_code" value="{{ $data['country_code'] }}">


                    <div class="form-row">
                        <div class="form-group col-md-12 mt-2">
                            <label for="inputEmail4">{{ __('verification code') }} </label>
                            <input type="tel"
                                class="form-control {{ $errors->has('phoneVerificationCode') ? ' is-invalid' : '' }}"
                                name="phoneVerificationCode" value="{{ old('phoneVerificationCode') }}" id="inputPhone"
                                required autocomplete="off">

                            @if ($errors->has('phoneVerificationCode'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phoneVerificationCode') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>

                    <br><br>

                    <a type="button" href="{{ route('profile.show', ['user_id' => $user_Id]) }}"
                        class="btn btn-outline-dark float-left">
                        <i class="fas fa-arrow-left"></i> {{ __('back') }}
                    </a>



                    <button type="submit" formmethod="post" class="btn btn-success float-right buttons_style">

                        {{ __('verify phone') }}</button>

                </form>
            </div>

        </div>

    </div>


    <br><br><br><br><br><br>




@endsection
