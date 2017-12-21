@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search for Device Handler</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('search') }}">
                        <input type="text" name="q">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Recently-added handlers</div>

                <div class="panel-body">
                    @foreach ($latest as $handler)
                        &bull; <a href="{{ $handler->url }}">{{ $handler->title }}</a><br>
                    @endforeach
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Browse Manufacturer</div>

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
