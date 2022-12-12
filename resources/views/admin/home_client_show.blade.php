@extends('admin.layout.app')

@section('heading', 'Edycja klientów ze strony startowej')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_home_client_update') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Podtytuł</label>
                                    <input type="text" class="form-control" name="client_subtitle" value="{{ $page_data->client_subtitle }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tytuł</label>
                                    <input type="text" class="form-control" name="client_title" value="{{ $page_data->client_title }}">
                                </div>   
                                <div class="mb-4">
                                    <label class="form-label">Status </label>
                                    <select name="client_status" class="form-control">
                                        <option value="Show" @if($page_data->client_status == 'Show') selected @endif>Pokaż</option>
                                        <option value="Hide" @if($page_data->client_status == 'Hide') selected @endif>Ukryj</option>
                                    </select>
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