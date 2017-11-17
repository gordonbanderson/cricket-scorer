@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>@include('_partials._match_title', array('match' => $match))</h1>


            </div>
        </div>

    </div>


@endsection