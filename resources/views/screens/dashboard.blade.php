@extends('main')
@section('content')
<link rel="stylesheet" href="{{asset('style.css')}}">
<div class="container text-center">
    
    <div class="card col-md-12 my-4">
        <div class="card-header">
            <h3>Dashboard</h3>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('images/pc.jpeg')}}" alt="Network Error" srcset="">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/printer.jpeg')}}" alt="Network Error" srcset="">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/cam.jpeg')}}" alt="Network Error" srcset="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('images/mouse.jpeg')}}" alt="Network Error" srcset="">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/mic.jpeg')}}" alt="Network Error" srcset="">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/hdd.jpeg')}}" alt="Network Error" srcset="">
                </div>
                
            </div>
    </div>
</div>

    
@endsection