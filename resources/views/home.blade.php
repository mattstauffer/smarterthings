@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    &bull; <a href="{{ route('admin.manufacturers.index') }}">Manufacturers</a><br>
                    &bull; <a href="{{ route('admin.devices.index') }}">Devices</a><br>
                    &bull; <a href="{{ route('admin.handlers.index') }}">Device Handlers</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
