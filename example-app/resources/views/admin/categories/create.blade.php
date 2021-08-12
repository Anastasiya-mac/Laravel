@extends('layouts.admin')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Добавление категории</h1>
    <a href="{{ route('.admincategories.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i></i> К списку</a>
</div>
<!-- Content Row -->
<div class="row">
    <form method= "post" action="">
        <div class = "form-group">
            <label for="title">Наименование категории</label>
            <input type="text" class="form-controll" name="title" id="title">
        </div>
        <div class = "form-group">
            <label for="description">Описание</label>
            <textarea class="form-controll" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection