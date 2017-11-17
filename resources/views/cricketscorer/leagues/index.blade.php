@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>{{$league->name}}</h1>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#league_table">League Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#fixtures">Fixtures </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#results">Results</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="league_table">
                        <h1>League Table</h1>
                        <ul class="list-group media-list media-list-stream">
                            <p>Pref</p>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="fixtures">
                        <ul class="list-group media-list media-list-stream">
                            <h2>Fixtures (@todo fixtures, results, live)</h2>
                            <ul>
                                @foreach($league->matches as $fixture)
                                    <li>
                                    <a href="/competition/{{$competition->slug}}/league/{{$league->slug}}/match/{{$fixture->slug}}">
                                        @include('_partials._match_title', array('match' => $fixture))
                                    </a>
                                    </li>
                                @endforeach
                            </ul>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="results">
                        <ul class="list-group media-list media-list-stream">
                            <p>Results</p>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>


@endsection