@extends('admin.layout.app')

@section('heading', 'Widok wykształcenia')

@section('rightside_button')
<a href="{{ route('admin_education_add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Dodaj nową</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Stopień</th>
                                <th>Uczelnia</th>
                                <th>Data</th>
                                <th>Kolejność</th>
                                <th>Akcja</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($all_data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->degree }}</td>
                                    <td>{{ $item->institute }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>{{ $item->item_order }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_education_edit',$item->id) }}" class="btn btn-primary">Edycja</a>
                                        <a href="{{ route('admin_education_delete',$item->id) }}" class="btn btn-danger" onClick="return confirm('Czy jesteś pewien?');">Usuwanie</a>
                                    </td>
                                </tr>
                                @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection