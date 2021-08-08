@extends('layouts.main')
@section('content')
    @forelse($news as $n)
    <!-- Post preview-->
    <div class="post-preview">
        <a href="{{route('news.show', ['id' => $n['id']]) }}">
            <h2 class="post-title">{{ $n['title'] }}</h2>
            <h3 class="post-subtitle">{{ $n['description'] }}</h3>
        </a>
        <p class="post-meta">Дата публикации {{now()->format('d-m-Y H:i')}}</p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
    @empty
    <h1>Новостей нет</h1>
    @endforelse
    <!-- Pager-->
    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Читать дальше→</a></div>
@endsection