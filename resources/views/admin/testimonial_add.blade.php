@extends('admin.layout.app')

@section('heading', 'Dodawanie opinii klienta')

@section('rightside_button')
<a href="{{ route('admin_testimonial_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Widok wszystkich</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_testimonial_submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Zdjęcie *</label>
                                    <div>
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Imię i nazwisko *</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Stanowisko *</label>
                                    <input type="text" class="form-control" name="designation">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Komentarz *</label>
                                    <textarea name="comment" class="form-control h_100" cols="30" rows="10"></textarea>
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