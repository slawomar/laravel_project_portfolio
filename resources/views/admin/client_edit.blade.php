@extends('admin.layout.app')

@section('heading', 'Edytowanie klientów')

@section('rightside_button')
<a href="{{ route('admin_client_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Widok wszystkich</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_client_update',$row_data->id) }}" method="post" enctype="multipart/form-data">
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
                                    <label class="form-label">URL</label>
                                    <input type="text" class="form-control" name="url" value="{{ $row_data->url }}">
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