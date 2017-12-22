@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Devices</div>

                <div class="panel-body">
                    <a href="{{ route('admin.devices.create') }}" class="btn btn-primary pull-right">Create</a>
                    <h3>Devices</h3>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Manufacturer</th>
                            <th>Protocol</th>
                            @if (auth()->user()->isAdmin())
                            <th>Actions</th>
                            @endif
                        </tr>
                        @foreach ($devices as $device)
                        <tr>
                            <td><a href="{{ route('devices.show', [$device->manufacturer, $device]) }}">{{ $device->name }}</a></td>
                            <td><a href="{{ route('manufacturers.show', [$device->manufacturer]) }}">{{ $device->manufacturer->name }}</a></td>
                            <td>{{ $device->protocol }}</td>
                            @if (auth()->user()->isAdmin())
                            <td>
                                <a href="{{ route('admin.devices.destroy', [$device]) }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('delete-device-form-{{ $device->id }}').submit();">
                                    Delete
                                </a>

                                <form id="delete-device-form-{{ $device->id }}" action="{{ route('admin.devices.destroy', [$device]) }}" method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="delete">
                                    {{ csrf_field() }}
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
