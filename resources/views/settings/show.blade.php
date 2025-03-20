@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Елеменит налаштування підприємства</h1>
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
                                <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-primary">Редагувати елементи</a>
                            </div>
                            <form action="{{ route('settings.destroy', $setting->id) }}" method="post">
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
                                        <td>{{ $setting->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Назва підприємства</td>
                                        <td>{{ $setting->company_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Номер телефону аміністратора</td>
                                        <td>{{ $setting->admin_phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Опис</td>
                                        <td>{{ $setting->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Лого</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $setting->logo_path) }}"
                                                alt="Image"
                                                class="w-25">
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
