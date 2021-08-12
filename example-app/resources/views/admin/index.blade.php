@extends('layouts.admin')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Новости</h1>
    <a href="{{ route('.admincreate') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Добавить новость</a>
</div>
<!-- Content Row -->
<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Заголовок</th>
                        <th>Содержимое статьи</th>
                        <th>Дата изменения</th>
                        <th>Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($NewsList as $n)
                    <tr>
                        <td>{{ $n['title'] }}</td>
                        <td>{{ $n['description'] }}</td>
                        <td>{{ now()->format('d-m-Y H:i') }}</td>
                        <td><a href="{{ route('.adminedit', ['' => $n['id']]) }}" style="font-size: 12px;">редактирование</a> &nbsp;
                        <a href="javascript:;" style="font-size: 12px; color:red;">удаление</a></td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="4">Новостей не найдено</td>
                      </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
</div>
@endsection