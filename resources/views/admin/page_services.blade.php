@extends('admin.layout.app')

@section('heading', 'Edycja treści strony z usługami')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_services_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Nagłówek</label>
                                    <input type="text" class="form-control" name="services_heading" value="{{ $page_data->services_heading }}">
                                </div> 
                                <div class="mb-4">
                                    <label class="form-label">Aktualny baner</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$page_data->services_banner) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Zmiana baneru</label>
                                    <div><input type="file" name="services_banner"></div>
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