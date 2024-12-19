@extends('layout')
@section('title')
    {{$page['title']}}
@endsection
@section('description')
    {{$page['description']}}
@endsection
@section('keywords')
    {{$page['keywords']}}
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('body')
    <section class="portfolio-banner">
        
    </section>
@endsection
