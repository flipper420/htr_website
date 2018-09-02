@extends('layouts.app')

@section('template_title')
    Welcome {{ Auth::user()->name }}
@endsection

@section('head')
@endsection

@section('content')
    <div class="wrapper">
        @include('panels.welcome-panel')
    </div>

@endsection
