@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $handler->title }}</div>

                <div class="panel-body">
                    &bull; By {{ $handler->author }}<br>
                    &bull; <a href="{{ $handler->discourse_url }}">Discourse thread</a><br>
                    <hr>

                    {{ $handler->post }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
