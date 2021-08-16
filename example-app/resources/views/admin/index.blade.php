@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Панель администратора</h1>
    </div>
    <h5 class="section-heading">Всего опубликовано новостей: {{ $countNews }}</h5>
    <h5 class="section-heading">Всего категорий: {{ $countCategories }}</h5>
</div>
@endsection