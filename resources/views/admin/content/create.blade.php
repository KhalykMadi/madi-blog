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
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ru</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Kaz</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Eng</button>
                            </li>
                        </ul>
                        <form action="{{route('admin.blog.content.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="main-tab">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="form-group w-100" >
                                            <label>Загаловка:</label>
                                            <textarea name="title_ru" id="editor2"></textarea>
                                            @error('title_ru')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                        <div class="form-croup mb-2">
                                            <label>Текст:</label>
                                            <textarea name="description_ru" id="editor"></textarea>
                                            @error('description_ru')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                        <div class="form-group md-0">
                                            <label for="">Категория:</label>
                                            <input type="text" class="form-control" name="category_ru">
                                            @error('category_ru')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="form-group w-100" >
                                            <label>Загаловка:</label>
                                            <textarea name="title_kz" id="editor3"></textarea>
                                            @error('title_kz')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                        <div class="form-croup mb-2">
                                            <label>Текст:</label>
                                            <textarea name="description_kz" id="editor4"></textarea>
                                            @error('description_kz')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                        <div class="form-group md-0">
                                            <label for="">Категория:</label>
                                            <input type="text" class="form-control" name="category_kz">
                                            @error('category_kz')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="form-group w-100" >
                                            <label>Загаловка:</label>
                                            <textarea name="title_en" id="editor5"></textarea>
                                            @error('title_en')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                        <div class="form-croup mb-2">
                                            <label>Текст:</label>
                                            <textarea name="description_en" id="editor6"></textarea>
                                            @error('description_en')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                        <div class="form-group md-0">
                                            <label for="">Категория:</label>
                                            <input type="text" class="form-control" name="category_en">
                                            @error('category_en')
                                            <div class="text-danger">Это поле необходимо для заполнения</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img">
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
