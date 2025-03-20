@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Інформація про автобус</h1>
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
                                <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-primary">Редагувати автобус</a>
                            </div>
                            <form action="{{ route('buses.destroy', $bus->id) }}" method="post">
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
                                        <td>{{ $bus->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Модель авто:</td>
                                        <td>{{ $bus->model->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Номер авто:</td>
                                        <td>{{ $bus->car_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Водій авто:</td>
                                        <td>
                                            {{ $bus->driver ? $bus->driver->first_name .' '. $bus->driver->last_name : 'Без водія' }}
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
