@extends('admin.layout.app')

@section('heading', 'Edytowanie usługi')

@section('rightside_button')
<a href="{{ route('admin_service_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Widok wszystkich</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_service_update',$row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Aktualne zdjęcie</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$row_data->photo) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Zmiana zdjęcia</label>
                                    <div>
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Aktualny baner</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$row_data->banner) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Zmiana baneru</label> 
                                    <div>
                                        <input type="file" name="banner">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Nazwa *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $row_data->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Krótki opis *</label>
                                    <textarea name="short_description" class="form-control h_100" cols="30" rows="10">{{ $row_data->short_description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Opis *</label>
                                    <textarea name="description" class="form-control snote" cols="30" rows="10">{{ $row_data->description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Ikonka *</label>
                                    <input type="text" class="form-control" name="icon" value="{{ $row_data->icon }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tytuł SEO</label>
                                    <input type="text" class="form-control" name="seo_title" value="{{ $row_data->seo_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">SEO meta opis</label>
                                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $row_data->seo_meta_description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Kolejność *</label>
                                    <input type="text" class="form-control" name="item_order" value="{{ $row_data->item_order }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Potwierdzenie</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection