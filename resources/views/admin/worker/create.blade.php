@extends('admin.layouts.index')
@section('content')
    <div class="content-wrapper">
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


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.blog.worker.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>Имя:</label>
                                <input type="text" name="name" placeholder="name" value="{{old('name')}}">
                                @error('name')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Фамилия:</label>
                                <input type="text" name="surname" placeholder="surname"  value="{{old('surname')}}">
                                @error('surname')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Почта:</label>
                                <input type="email" name="email" placeholder="email"  value="{{old('email')}}">
                                @error('email')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Возраст:</label>
                                <input type="number" name="age" placeholder="age"  value="{{old('age')}}">
                                @error('age')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Текст:</label>
                                <textarea name="description" placeholder="description">{{old('description')}}</textarea>
                                @error('description')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="IsMarried">Is married:</label>
                                <input type="checkbox" id="isMarried" name="is_married" placeholder="is_married" {{old('is_married' == 'on' ? 'checked' : '')}}>
                                @error('is_married')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
