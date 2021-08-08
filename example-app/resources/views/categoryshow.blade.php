@extends('layouts.main')
@section('content')
    @foreach($category as $c)
        <h2 class="section-heading">{{ $c['name'] }}</h2>
        <blockquote class="blockquote">{{ $c['description'] }}</blockquote>
    @endforeach
@endsection