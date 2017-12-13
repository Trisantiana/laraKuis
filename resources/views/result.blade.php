@extends('layouts.style')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-offset-2">
                <form action="" class="" method="post">
                    {{ csrf_field() }}

                    <div class="jumbotron">
                        @if ($results->score < 50)
                            <p><h4>{{auth()->user()->name}} Nilai Anda {{$results->score}}. Belajar Lagi Ya! {{ auth()->user()->name }}</h4></p>
                        @else
                            <p> <h4>{{ auth()->user()->name }} Anda Mendapatkan Nilai {{ $results->score }}. Terus Tingkatkan Ya! </h4> </p>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection