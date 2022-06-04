@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h3>MCQ APP</h3>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">PHP</div>
                <div class="card-body">
                    <p class="text-center">
                        5 Q/A
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">AJAX</div>
                <div class="card-body">
                    <p class="text-center">
                        5 Q/A
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">JQuery</div>
                <div class="card-body">
                    <p class="text-center">
                        5 Q/A
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">HTML</div>
                <div class="card-body">
                    <p class="text-center">
                        5 Q/A
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="{{ route('start') }}" class="mt-5 btn btn-lg btn-outline-primary">
                Click here to get started.
            </a>
        </div>
    </div>
    
</div>
@endsection
