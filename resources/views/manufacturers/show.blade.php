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
                        <a href="{{ $device->url }}" style="font-weight: bold;">{{ $device->name }}</a><br>
                        Handlers:<br>
                        @forelse ($device->handlers as $handler)
                            &bull; <a href="{{ $handler->url }}">{{ $handler->title }}</a>
                        @empty
                            <i>(none yet)</i>
                        @endforelse
                        <br><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
