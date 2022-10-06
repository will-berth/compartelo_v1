@extends('layouts.public')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection
@section('contenido')
<div class="bg-comp pt-5">
    <!-- <img class="logo-img mt-2 ml-2" src="{{ asset('assets/img/logo_v2.png') }}" alt="" srcset="">
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Checkout</h3>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ asset('assets/login/login.js') }}"></script>
@endsection