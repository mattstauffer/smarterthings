@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Manufacturer</div>

                <div class="panel-body">
                    @include('components.form-errors')

                    <form action="{{ route('admin.manufacturers.store') }}" method="post">
                        {{ csrf_field() }}
                        <label for="name">Name</label><br>
                        <input type="text" name="name" value="{{ old('name') }}"><br><br>

                        <label for="website">Website</label><br>
                        <input type="text" name="website" value="{{ old('website') }}"><br><br>

                        <input type="submit" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
