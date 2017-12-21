@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>{{ $device->name }}</h1></div>

                    <div class="panel-body">
                        <h2>Information</h2>
                        Manufacturer: <a href="{{ $device->manufacturer->url }}">{{ $device->manufacturer->name }}</a><br>
                        Protocol: {{ $device->protocol }}<br>

                        <h2>Handlers:</h2>
                        @forelse ($device->handlers as $handler)
                            &bull; <a href="{{ $handler->url }}">{{ $handler->title }}</a><br>
                        @empty
                            Welp, nothing here.
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
