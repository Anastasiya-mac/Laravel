@extends('layouts.main')
@section('content')
    @foreach($category as $c)
    <!-- Post preview-->
    <div class="post-preview">
        <a href="{{route('category.show', [
                'id' => $c['id']
            ]) }}">
            <h2 class="post-title">{{ $c['name'] }}</h2>
            <h3 class="post-subtitle">{{ $c['description'] }}</h3>
        </a>
        <p class="post-meta">Дата публикации {{now()->format('d-m-Y H:i')}}</p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
    @endforeach
@endsection