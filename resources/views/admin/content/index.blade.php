@extends('admin.layouts.index')
@section('content')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><p>Контент</p></h1>
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



        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-1 mb-3">
                        <a href="{{route('admin.blog.content.create')}}" type="button" class="btn  btn-primary mb-1">Добавить</a>
                    </div>
                    <div class="col-12">
                        <div class="card w-100">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Категория</th>
                                        <th>Текст</th>
                                        <th>Фото</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contents as $content)
                                        <tr>
                                            <td>{{$content -> id}}</td>
                                            <td>{!! $content->title_ru !!}</td>
                                            <td>{!! $content->category_ru !!}</td>
                                            <td>{!! $content -> description_ru !!}</td>
                                            <td><img src="{{urldecode(url('storage',$content->img))}}" style="width: 50px"></td>
                                            <td><a href="{{route('admin.blog.content.edit', $content -> id)}}"><i class="fas green fa-pencil-alt"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.blog.content.destroy', $content -> id)}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="text-danger fas fa-trash "></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>

@endsection
