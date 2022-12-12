@extends('front.layout.app')

@section('main_content')
<div class="page-banner" style="background-image: url({{ asset('uploads/'.$page_data->services_banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $page_data->services_heading }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="page-content service">
    <div class="container">
        <div class="row">
            @php $i=1; @endphp
            @foreach($services as $item)
            @php
            if($i%3 == 1) {
                $anim = 'fadeInLeft';
            } elseif($i%3 == 2) {
                $anim = 'fadeInUp';
            } elseif($i%3 == 0) {
                $anim = 'fadeInRight';
            }
            $i++;
            @endphp
            <div class="col-lg-4 col-md-6 wow {{ $anim }}">
                <div class="item">
                    <div class="icon"><i class="{{ $item->icon }}"></i></div>
                    <h3>{{ $item->name }}</h3>
                    <p>
                        {!! nl2br($item->short_description) !!}
                    </p>
                    <div class="button">
                        <a href="" class="btn btn-primary">Czytaj więcej</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection