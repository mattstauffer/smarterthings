@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Device</div>

                <div class="panel-body">
                    @include('components.form-errors')

                    <form action="{{ route('admin.devices.store') }}" method="post">
                        {{ csrf_field() }}
                        <label for="name">Name</label><br>
                        <input type="text" name="name" value="{{ old('name') }}"><br><br>

                        <label for="description">Description</label><br>
                        <textarea name="description">{{ old('description') }}</textarea><br><br>

                        <label for="website">Website</label><br>
                        <input type="text" name="website" value="{{ old('website') }}"><br><br>

                        <label for="protocol">Protocol</label><br>
                        <select name="protocol">
                            <option></option>
                        @foreach ($protocols as $protocol)
                            <option value="{{ $protocol }}"{{ old('protocol') == $protocol ? ' selected' : '' }}>{{ $protocol }}</option>
                        @endforeach
                        </select><br><br>

                        <label for="manufacturer">Manufacturer</label><br>
                        <select name="manufacturer">
                            <option></option>
                        @foreach ($manufacturers as $manufacturer)
                            <option value="{{ $manufacturer->id }}"{{ old('manufacturer') == $manufacturer->id ? ' selected' : '' }}>{{ $manufacturer->name }}</option>
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
