@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Competitions</h1>
                <ul>
                @foreach($competitions as $competition)
                        <li><a href="/competition/{{$competition->slug}}">{{$competition->name}}</a></li>
                @endforeach
                </ul>
            </div>
        </div>

        {{ $competitions->links() }}
    </div>


@endsection