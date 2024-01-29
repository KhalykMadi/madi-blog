@extends('admin.layouts.index')
@section('content')
    <!-- Content Wrapper. Contains page banner -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление контента</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.blog.banner.update', $banner -> id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="main-tab">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img" value="{{$banner -> img}}">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" class="btn btn-primary" value="Добавить">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
