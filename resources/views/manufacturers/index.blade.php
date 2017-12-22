@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Manufacturers</h1></div>

                <div class="panel-body">
                    @foreach ($manufacturers as $manufacturer)
                        &bull; <a href="{{ $manufacturer->url }}">{{ $manufacturer->name }}</a><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
