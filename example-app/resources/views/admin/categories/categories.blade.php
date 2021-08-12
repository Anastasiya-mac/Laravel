@extends('layouts.admin')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Категории новостей</h1>
    <a href="{{ route('.admincategories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i>Добавить категорию</a>
</div>
<!-- Content Row -->
<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Описание</th>
                    <th>Управление</th>
                </tr>
            </thead>
            <tbody>
                @forelse($CategoryList as $c)
                <tr>
                    <td>{{ $c['name'] }}</td>
                    <td>{{ $c['description'] }}</td>
                    <td><a href="{{ route('.admincategories.edit', ['category' => $c['id']]) }}" style="font-size: 12px;">редактирование</a> &nbsp;
                    <a href="javascript:;" style="font-size: 12px; color:red;">удаление</a></td>
                  </tr>
              @empty
                  <tr>
                      <td colspan="4">Категорий нет</td>
                  </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection