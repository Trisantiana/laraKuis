@extends('layouts.style')

{{-- @include('inc.header')
 --}}

 @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

        <div class="jumbotron">
            <h1>Kuis RPL</h1>
            <p>Kuis ini dibuat untuk mengasah otak dan untuk menambah wawasan kita di dalam bidang Rekayasa Perangkat Lunak.</p>
            <p><a href=" {{ route('quest.show') }} " class="btn btn-primary btn-lg"> Mulai Kerjakan</a></p>
        </div>
            </div>
        </div>
    </div>

@endsection
{{-- @include('inc.footer') --}}