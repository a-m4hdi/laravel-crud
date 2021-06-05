@extends('layout.crud')

@section('title', 'laravel-crud')

@section('content')

    
    @if(Session::get('Create'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('Create')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Session::get('Update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('Update')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Session::get('Delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{Session::get('Delete')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="form-body mb-5">
    @include('add')
    </div>
    <div class="list-body">
        @include('show')
    </div>



@endsection
