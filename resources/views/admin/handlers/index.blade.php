@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Device Handlers</div>

                <div class="panel-body">
                    <a href="{{ route('admin.handlers.create') }}" class="btn btn-primary pull-right">Create</a>
                    <h3>Device Handlers</h3>
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Device</th>
                            <th>Manufacturer</th>
                            @if (auth()->user()->isAdmin())
                            <th>Actions</th>
                            @endif
                        </tr>
                        @foreach ($handlers as $handler)
                        <tr>
                            <td><a href="{{ route('handlers.show', [$handler->device->manufacturer, $handler->device, $handler]) }}">{{ $handler->title }}</a></td>
                            <td>{{ $handler->author }}</td>
                            <td><a href="{{ route('devices.show', [$handler->device->manufacturer, $handler->device]) }}">{{ $handler->device->name }}</a></td>
                            <td><a href="{{ route('manufacturers.show', [$handler->device->manufacturer]) }}">{{ $handler->device->manufacturer->name }}</a></td>
                            @if (auth()->user()->isAdmin())
                            <td>
                                <a href="{{ route('admin.handlers.destroy', [$handler->device->manufacturer, $handler->device, $handler]) }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('delete-handler-form-{{ $handler->id }}').submit();">
                                    Delete
                                </a>

                                <form id="delete-handler-form-{{ $handler->id }}" action="{{ route('admin.handlers.destroy', [$handler->device->manufacturer, $handler->device, $handler]) }}" method="POST" style="display: none;">
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
