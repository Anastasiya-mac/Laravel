@extends('layouts.main')
@section('content')
    <h3>Новости категории {{ $id }}:</h3><br>
    <h4>Список новостей</h4>
    @forelse($newsList as $n)
        <div>
            <a href="<?=route('news.show', ['id' => $n['id']])?>">
            <?=$n['title']?></a>
            <?=$n['description']?>
        </div>
        @empty
    <h1>Новостей в этой категории нет</h1>
    @endforelse
@endsection