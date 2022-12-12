@extends('admin.layout.app')

@section('heading', 'Dodawanie doświadczenia')

@section('rightside_button')
<a href="{{ route('admin_experience_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Widok wszystkich</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_experience_submit') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Firma *</label>
                                    <input type="text" class="form-control" name="company">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Stanowisko *</label>
                                    <input type="text" class="form-control" name="designation">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Data *</label>
                                    <input type="text" class="form-control" name="time">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Kolejność *</label>
                                    <input type="text" class="form-control" name="item_order">
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