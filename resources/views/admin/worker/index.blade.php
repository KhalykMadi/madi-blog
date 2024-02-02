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
                        <a href="{{route('admin.blog.worker.create')}}" type="button" class="btn  btn-primary mb-1">Добавить</a>
                    </div>
                    <div class="col-12">
                        <div class="card my-nav">
                            <form action="{{route('admin.blog.worker.index')}}">
                                <input type="text" name="name" placeholder="name" value="{{request()->get('name')}}">
                                <input type="text" name="surname" placeholder="surname"
                                       value="{{request()->get('surname')}}">
                                <input type="email" name="email" placeholder="email"
                                       value="{{request()->get('email')}}">
                                <input type="number" name="from" placeholder="from" value="{{request()->get('from')}}">
                                <input type="number" name="to" placeholder="to" value="{{request()->get('to')}}">
                                <input type="number" name="description" placeholder="description"
                                       value="{{request()->get('description')}}">
                                <input type="checkbox" name="is_married" id="isMarried"
                                    {{request()->get('is_married') == 'on' ? 'checked' : ''}}>
                                <label for="isMarried">is married</label>
                                <input type="submit">
                                <a href="{{route('admin.blog.worker.index')}}">Сбросить</a>
                            </form>
                        </div>
                        <div class="card w-100">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Имя</th>
                                        <th>Фамилия</th>
                                        <th>Текст</th>
                                        <th>Возраст</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($workers as $worker)
                                        <tr>
                                            <td>{{$worker -> id}}</td>
                                            <td>{!! $worker->name !!}</td>
                                            <td>{!! $worker->surname !!}</td>
                                            <td>{!! $worker -> description !!}</td>
                                            <td>{!! $worker -> age !!}</td>
                                            <td><a href="{{route('admin.blog.worker.edit' ,$worker -> id)}}"><i
                                                        class="fas green fa-pencil-alt"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.blog.worker.destroy', $worker->id)}}"
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
                        <div class="card my-nav">
                            {{$workers->withQueryString()->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
