@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manufacturers</div>

                <div class="panel-body">
                    <a href="{{ route('admin.manufacturers.create') }}" class="btn btn-primary pull-right">Create</a>
                    <h3>Manufacturers</h3>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Website</th>
                            @if (auth()->user()->isAdmin())
                            <th>Actions</th>
                            @endif
                        </tr>
                        @foreach ($manufacturers as $manufacturer)
                        <tr>
                            <td><a href="{{ route('manufacturers.show', [$manufacturer]) }}">{{ $manufacturer->name }}</a></td>
                            <td>{{ $manufacturer->website }}</td>
                            @if (auth()->user()->isAdmin())
                            <td>
                                <a href="{{ route('admin.manufacturers.destroy', [$manufacturer]) }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('delete-manufacturer-form-{{ $manufacturer->id }}').submit();">
                                    Delete
                                </a>

                                <form id="delete-manufacturer-form-{{ $manufacturer->id }}" action="{{ route('admin.manufacturers.destroy', [$manufacturer]) }}" method="POST" style="display: none;">
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
