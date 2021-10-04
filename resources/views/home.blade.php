@extends('layouts.main')

@section('page-title'){{ __('home.title') }} @endsection

@section('header')
    @include('incs.header')
@endsection

@section('content')
    <section class="intro">
        <div class="container">
            <h1 class="page-header">Your Reliable IT Partner</h1>
            <p class="page-description">STS is an Eastern European software development company with offices
                in Ukraine and Poland.</p>
            <p class="page-description">By creating reliable and user-friendly software, we help our partners
                around the world expand their capabilities and develop successful products.</p>
            <div class="btn-container">
                <a href="{{ route('about') }}" class="button button_alternate">Find out more...</a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('incs.footer')
@endsection