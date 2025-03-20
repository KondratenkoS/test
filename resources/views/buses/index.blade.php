@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Автобуси</h1>
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('buses.create') }}" class="btn btn-primary">Додати автобус</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Номер автобуса</th>
                                    <th>Модель автобуса</th>
                                    <th>Водій автобуса</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buses as $bus)
                                <tr>
                                    <td>{{ $bus->id }}</td>
                                    <td>
                                        <a href="{{ route('buses.show', $bus->id) }}">
                                            {{ $bus->car_number }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('car_models.show', $bus->model->id) }}">
                                            {{ $bus->model->name }}
                                        </a>
                                    </td>
                                    <td>
                                        @if($bus->driver)
                                            <a href="{{ route('drivers.show', $bus->driver->id) }}">
                                                {{ $bus->driver->first_name . ' ' . $bus->driver->last_name }}
                                            </a>
                                        @else
                                            Без водія
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
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
