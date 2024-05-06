@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PERFILES</h1>

    @vite(['resources/css/style.css','resources/css/style-preset.css'])
@stop
@section('content')

<div class="col-md-12 col-xl-12">
    <div class="card user-card">
      <div class="card-body">
        <div class="user-cover-bg">
          <img src="{{asset('assets/images/shapes/baner2.jpg')}}" alt="image" class="img-fluid" >
          <div class="cover-data">
            <!--<div class="d-inline-flex align-items-center">
              <i class="ph-duotone ph-star text-warning me-1"></i>
              4.5 <small class="text-white text-opacity-50">/ 5</small>
            </div>-->
          </div>
        </div>
        <div class="chat-avtar card-user-image">
          <img src="{{asset('assets/images/portfolio/p4.jpg')}}" alt="user-image" class="img-thumbnail rounded-circle ">
          <i class="chat-badge bg-success"></i>
        </div>
        <div class="d-flex flex-wrap gap-1">
          <div class="flex-grow-1">
            <h6 class="mb-1">{{Auth::user()->name}}</h6>
            <p class="text-muted text-sm mb-0">DM on <a href="#" class="text-primary">@williambond</a></p>
          </div>
          <div class="flex-shrink-0" >
            <button class="btn btn-primary btn-sm">Message</button>
            <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
          </div>
        </div>
        <div class="row g-3 my-3 text-center">
          <div class="col-4">
            <h5 class="mb-0">86</h5>
            <small class="text-muted">Post</small>
          </div>
          <div class="col-4 border border-top-0 border-bottom-0">
            <h5 class="mb-0">40</h5>
            <small class="text-muted">Project</small>
          </div>
          <div class="col-4">
            <h5 class="mb-0">4.5K</h5>
            <small class="text-muted">Members</small>
          </div>
        </div>
        <div class="saprator my-3">
          <span>Skills</span>
        </div>
        <div class="text-center">
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">UX</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Figma</span>
          <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">Backend</span>
        </div>
        <div class="saprator my-3">
          <span>Task completed</span>
        </div>
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 me-2">
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-primary" style="width: 15%"></div>
            </div>
          </div>
          <div class="flex-shrink-0">
            <h6 class="mb-0">30%</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/style-preset.css')}}">
@stop
@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>


@stop
