@extends('layouts.main')

@section('page-title'){{ __('home.title') }} @endsection

@section('header')
    @include('incs.header')
@endsection

@section('content')
    <div>Content</div>
@endsection

@section('footer')
    <div>Footer</div>
@endsection