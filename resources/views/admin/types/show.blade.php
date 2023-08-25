@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>{{ $type->id }} - {{ $type->name }}</h3>
                    </div>
                    <div class="button">
                        <a href="{{ route('admin.types.index') }}" class="btn btn-primary">Ritorna ai tipi di progetti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection