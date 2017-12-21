@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search results for term <strong>{{ $term }}</strong></div>

                <div class="panel-body">
                    <h3>Device Handlers</h3>
                    @forelse ($handlers as $result)
                        &bull; <a href="{{ $result->url }}">{{ $result->title }}</a><br>
                    @empty
                        No results!
                    @endforelse

                    <h3>Devices</h3>
                    @forelse ($devices as $result)
                    &bull; <a href="{{ $result->url }}">{{ $result->name }}</a><br>
                    @empty
                        No results!
                    @endforelse

                    <h3>Manufacturers</h3>
                    @forelse ($manufacturers as $result)
                    &bull; <a href="{{ $result->url }}">{{ $result->name }}</a><br>
                    @empty
                        No results!
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
