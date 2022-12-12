@extends('admin.layout.app')

@section('heading', 'Edycja licznika ze strony startowej')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_home_counter_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Licznik 1 - numer *</label>
                                    <input type="text" class="form-control" name="counter1_number" value="{{ $page_data->counter1_number }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Licznik 1 - nazwa *</label>
                                    <input type="text" class="form-control" name="counter1_name" value="{{ $page_data->counter1_name }}">
                                </div> 
                                <div class="mb-4">
                                    <label class="form-label">Licznik 2 - numer *</label>
                                    <input type="text" class="form-control" name="counter2_number" value="{{ $page_data->counter2_number }}">
                                </div>2
                                <div class="mb-4">
                                    <label class="form-label">Licznik 2 - nazwa *</label>
                                    <input type="text" class="form-control" name="counter2_name" value="{{ $page_data->counter2_name }}">
                                </div> 
                                <div class="mb-4">
                                    <label class="form-label">Licznik 3 - numer *</label>
                                    <input type="text" class="form-control" name="counter3_number" value="{{ $page_data->counter3_number }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Licznik 3 - nazwa *</label>
                                    <input type="text" class="form-control" name="counter3_name" value="{{ $page_data->counter3_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Licznik 4 - numer *</label>
                                    <input type="text" class="form-control" name="counter4_number" value="{{ $page_data->counter4_number }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Licznik 4 - nazwa *</label>
                                    <input type="text" class="form-control" name="counter4_name" value="{{ $page_data->counter4_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Istniejące tło</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$page_data->counter_background) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Zmiana tła</label>
                                    <div><input type="file" name="counter_background"></div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Status licznika</label>
                                    <select name="counter_status" class="form-control">
                                        <option value="Show" @if($page_data->counter_status == 'Show') selected @endif>Pokaż</option>
                                        <option value="Hide" @if($page_data->counter_status == 'Hide') selected @endif>Ukryj</option>
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