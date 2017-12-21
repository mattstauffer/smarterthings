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

                    <h2>Devices</h2>
                    @foreach ($manufacturer->devices()->with('handlers')->get() as $device)
                        <strong>{{ $device->name }}</strong><br>
                        Handlers:<br>
                        @foreach ($device->handlers as $handler)
                            &bull; <a href="{{ $handler->url }}">{{ $handler->title }}</a>
                        @endforeach
                        <br><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
