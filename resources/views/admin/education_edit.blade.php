@extends('admin.layout.app')

@section('heading', 'Edytowanie wykształcenia')

@section('rightside_button')
<a href="{{ route('admin_education_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Widok wszystkich</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_education_update',$row_data->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Wykształcenie *</label>
                                    <input type="text" class="form-control" name="degree" value="{{ $row_data->degree }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Uczelnia *</label>
                                    <input type="text" class="form-control" name="institute" value="{{ $row_data->institute }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Data *</label>
                                    <input type="text" class="form-control" name="time" value="{{ $row_data->time }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Kolejność *</label>
                                    <input type="text" class="form-control" name="item_order" value="{{ $row_data->item_order }}">
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