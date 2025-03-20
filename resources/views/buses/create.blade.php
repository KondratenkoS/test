@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Додати автобус</h1>
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
                <form action="{{ route('buses.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="car_number" class="form-control" value="{{ old('car_number') }}"
                               placeholder="Введіть номер автобусу">
                        @error('car_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select name="model_id" class="form-control select2" style="width: 100%;">
                            @foreach($models as $model)
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="driver_id" class="form-control select2" style="width: 100%;">
                            <option value="">Без водія</option>
                            @foreach($drivers as $driver)
                                <option value="{{ $driver->id }}">
                                    {{ old('driver_id', $bus->driver_id ?? '') == $driver->id ? 'selected' : '' }}
                                    {{ $driver->first_name }} {{ $driver->last_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Додати">
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
