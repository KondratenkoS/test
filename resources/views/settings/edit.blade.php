@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати елементи налаштувань</h1>
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
                <form action="{{ route('settings.update', $setting->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="company_name">Змініть назву</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $setting->company_name }}">
                    </div>
                    <div class="form-group">
                        <label for="admin_phone">Змініть номер телефону</label>
                        <input type="text" class="form-control" id="admin_phone" name="admin_phone" value="{{ $setting->admin_phone }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Змініть опис</label>
                        <div>
                            <textarea name="description" rows="5" cols="50">
                                {{ $setting->description }}
                            </textarea>
                        </div>
                    </div>
                    <div class="mb-3 w-30">
                            <img src="{{ asset('storage/' . $setting->logo_path) }}"
                                 alt="Image"
                                 class="w-25">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Оберіть новий логотип</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="logo_path">
                                <label class="custom-file-label" for="exampleInputFile">Оберіть логотип</label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" class="btn btn-primary" value="Редагувати">
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
