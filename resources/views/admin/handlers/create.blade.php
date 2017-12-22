@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Device</div>

                <div class="panel-body">
                    @include('components.form-errors')

                    <form action="{{ route('admin.handlers.store') }}" method="post">
                        {{ csrf_field() }}
                        <label for="title">Title</label><br>
                        <input type="text" name="title" value="{{ old('title') }}"><br><br>

                        <label for="author">Author's Discourse Username</label><br>
                        <input type="text" name="author" value="{{ old('author') }}"><br><br>

                        <label for="post">Post (HTML)</label><br>
                        <textarea name="post">{{ old('post') }}</textarea><br><br>

                        <label for="discourse_url">Discourse Thread URL</label><br>
                        <input type="text" name="discourse_url" value="{{ old('discourse_url') }}"><br><br>

                        <label for="device">Device</label><br>
                        <select name="device">
                            <option></option>
                        @foreach ($devices as $device)
                            <option value="{{ $device->id }}"{{ old('device') == $device->id ? ' selected' : '' }}>{{ $device->name }}</option>
                        @endforeach
                        </select><br><br>


                        <input type="submit" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
