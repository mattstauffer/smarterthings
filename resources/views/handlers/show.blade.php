@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $handler->title }}</h1></div>

                <div class="panel-body">
                    By <a href="https://community.smartthings.com/u/{{ $handler->author }}/summary">{{ $handler->author }}</a><br>
                    <a href="{{ $handler->discourse_url }}">Discourse thread</a><br>
                    Released: {{ $handler->created_at->format("M j, 'y") }}<br>
                    Updated: {{ $handler->updated_at->format("M j, 'y") }}
                    <hr>

                    {!! $handler->post !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
