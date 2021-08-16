@extends('layouts.main')
@section('header')
    <x-header></x-header>
@endsection
@section('content')
    @foreach($category as $c)
        <h2 class="section-heading">{{ $c['name'] }}</h2>
        <blockquote class="blockquote">{{ $c['description'] }}</blockquote>
    @endforeach
@endsection