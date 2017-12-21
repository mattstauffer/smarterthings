@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search results for term <strong>{{ $term }}</strong></div>

                <div class="panel-body">
                    @forelse ($results as $result)
                        &bull; <a href="{{ route('devicehandlers.show', $result) }}">{{ $result->title }}</a><br>
                    @empty
                        No results!
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
