@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Start</div>
                <div class="card-body">
                    <form method="post" action="{{ route('user.create') }}" >
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control {{ ($errors->has('name'))?'is-invalid':'' }}">
                            @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
