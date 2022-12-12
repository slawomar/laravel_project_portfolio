@extends('admin.layout.app')

@section('heading', 'Edytowanie opinii klientów')

@section('rightside_button')
<a href="{{ route('admin_testimonial_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Widok wszystkich</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_testimonial_update',$row_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Istniejące zdjęcie</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$row_data->photo) }}" alt="" class="w_100">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Zmiana zdjęcia</label>
                                    <div>
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Imię i nazwisko *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $row_data->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Stanowisko *</label>
                                    <input type="text" class="form-control" name="designation" value="{{ $row_data->designation }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Komentarz *</label>
                                    <textarea name="comment" class="form-control h_100" cols="30" rows="10">{{ $row_data->comment }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Aktualizacja</button>
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