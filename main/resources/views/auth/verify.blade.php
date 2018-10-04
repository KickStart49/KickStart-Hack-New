@extends('layouts.loginlayout')

@section('content')
                    <br><br>
                    <div style="text-align: center;">
                    @if (session('resent'))
                        <div class="alert alert-info" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <br>
                    {{ __('To complete the process of registration,You must validate your email') }}
                    <br><br>
                    {{ __('We have successfully generated your unique key for authentication,') }}, <a href="{{ route('verification.resend') }}">{{ __('Proceed Mail Verification') }}</a>
                    <br><br>
                    <a href="{{ route('home') }}">{{ __('Homepage') }}</a>
                    <br><br>    
                </div>
               
@endsection
