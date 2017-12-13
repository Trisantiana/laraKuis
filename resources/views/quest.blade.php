@extends('layouts.style')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('sweet::alert')
                <form class="" action="" method="post">
                    {{ csrf_field() }}

                    @foreach ($quest as $id => $quest)
                        <div class="panel panel-default">
                            <div class="panel-heading"> {{ $id+1 }}. {{ $quest->question }}</div>
                            <div class="panel-body">
                                <input type="radio" name="answer{{ $quest->id }}" value="a" > A.  {{ $quest->a }} <br>
                                <input type="radio" name="answer{{ $quest->id }}" value="b" > B.  {{ $quest->b }} <br>
                                <input type="radio" name="answer{{ $quest->id }}" value="c" > C.  {{ $quest->c }} <br>
                                <input type="radio" name="answer{{ $quest->id }}" value="d" > D.  {{ $quest->d }} <br> <br>
                            </div>
                        </div>
                    @endforeach
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i><span>Selesai</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection