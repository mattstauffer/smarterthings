@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $manufacturer->name }}</h1></div>

                <div class="panel-body">
                    <a href="{{ $manufacturer->website }}">Web site</a><br>
                    <hr>

                    @todo: List all devices<br>
                    @todo: List handlers for each device<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
