@extends('layouts.wrapper')
@section('layout')
    <div class="container-fluid py-0">
        <div class="container">
            <div class="row py-2">
                <div class="col">
                    <p class="text-primary">"Linking People, Protecting Environment"</p>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end align-self-start">
                        <i class="fa fa-facebook-square fa-2x m-1 text-primary"></i>
                        <i class="fa fa-twitter-square fa-2x m-1 text-primary"></i>
                        <i class="fa fa-linkedin-square fa-2x m-1 text-primary"></i>
                        <i class="fa fa-youtube-square fa-2x m-1 text-primary"></i>
                        <i class="fa fa-instagram fa-2x m-1 text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="row align-items-end" >
                <div class="col-auto">
                    <img src="{{ asset("logo/logo.png") }}" alt="" />
                </div>
                <div class="col-auto ml-auto">
                    <div class="pb-5 text-right text-success">
                        +255 754 620 390  | info@cityengineering.co.tz
                    </div>
                    <div class="bg-primary d-flex">
                        <div class="px-4 py-3 bg-success text-light">Home</div>
                        <div class="px-4 py-3">About us</div>
                        <div class="px-4 py-3">Our Services</div>
                        <div class="px-4 py-3">Projects</div>
                        <div class="px-4 py-3">Contact Us</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
    {{-- <h1>Footer</h1> --}}
@endsection