@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Інформація про водія</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">На головну</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{ route('drivers.edit', $driver->id) }}" class="btn btn-primary">Редагувати модель</a>
                            </div>
                            <form action="{{ route('drivers.destroy', $driver->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Видалити">
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $driver->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>І'мя</td>
                                        <td>{{ $driver->first_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Прізвище</td>
                                        <td>{{ $driver->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Зарплатня</td>
                                        <td>{{ $driver->salary }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $driver->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата народження</td>
                                        <td>{{ $driver->birth_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>Фото</td>
                                        <td>
                                            @if($driver->image)
                                                <img src="{{ asset('storage/' . $driver->image) }}"
                                                    alt="Image"
                                                    class="w-25">
                                            @elseif($driver->image_url)
                                                <img src="{{ $driver->image_url }}"
                                                     alt="Image"
                                                     class="w-25">
                                            @endif
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
