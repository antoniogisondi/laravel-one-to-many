@extends('layouts.admin')

@section('content')
<div class="container-fluid d-flex flex-row p-0">
    @include('admin.partials.sidebar')
    <div class="container mx-3">
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
</div>
@endsection