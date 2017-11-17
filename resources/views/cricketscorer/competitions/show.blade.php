@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>{{$competition->name}}</h1>
                {!!\GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($competition->description) !!}

                <ul>
                    @foreach($competition->leagues as $league)
                        <li>
                            <a href="/competition/{{$competition->slug}}/league/{{$league->slug}}">{{$league->name}}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>


@endsection