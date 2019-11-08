@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        @include('partials.verify')
        <div class="col-md-8">
            <div class="card verify">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                <div class="card-body">
                    @if (session('resent'))
                        @php
                        Alert::success('A fresh verification link has been sent to your email address.', 'Successful')->persistent('Close')->autoclose(6000);
                        @endphp

                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        
                    @endif
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
