@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>{{ $type->id }} - {{ $type->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection