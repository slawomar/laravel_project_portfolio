@extends('admin.layout.app')

@section('heading', 'Edycja banera strony startowej')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_home_banner_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('uploads/'.$page_data->banner_photo) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="banner_photo">
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Tytuł</label>
                                    <input type="text" class="form-control" name="banner_title" value="{{ $page_data->banner_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Nazwa</label>
                                    <input type="text" class="form-control" name="banner_person_name" value="{{ $page_data->banner_person_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Przeznaczenie</label>
                                    <input type="text" class="form-control" name="banner_person_designation" value="{{ $page_data->banner_person_designation }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Opis</label>
                                   <textarea name="banner_description" class="form-control h_100" cols="30" rows="10">{{ $page_data->banner_description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tekst przycisku</label>
                                    <input type="text" class="form-control" name="banner_button_text" value="{{ $page_data->banner_button_text }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">URL przycisku</label>
                                    <input type="text" class="form-control" name="banner_button_url" value="{{ $page_data->banner_button_url }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Aktualizuj</button>
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