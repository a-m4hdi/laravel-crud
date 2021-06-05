@extends('layout.crud')

@section('title', 'laravel-crud')

@section('content')

    <div class="container">
    @if(Session::get('Create'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('Create')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="form-body">
    @include('add')
    </div>
    <div class="list-body">
        @include('show')
    </div>
    </div>


@endsection
