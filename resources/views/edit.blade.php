@extends('layout.crud')

@section('title', 'Edit Page')

@section('content')
<div class="form-body">
<form action="{{ url('/update') }}/{{ $data->id }}" method="POST">
@csrf
<div class="mb-3">
  <label for="Name" class="form-label">Name</label>
  <input type="text" class="form-control" id="Name" name="Name" value="{{$data->Name}}">
  <span class="error-handling crud-err">@error('Name'){{$message}}@enderror</span>
</div>
<div class="mb-3">
  <label for="Lastname" class="form-label">Lastname</label>
  <input type="text" class="form-control" id="Lastname" name="Lastname" value="{{$data->Lastname}}">
  <span class="error-handling crud-err">@error('Lastname'){{$message}}@enderror</span>
</div>
<div class="mb-3">
  <label for="Email" class="form-label">Email</label>
  <input type="email" class="form-control" id="Email" name="Email" value="{{$data->Email}}">
  <span class="error-handling crud-err">@error('Email'){{$message}}@enderror</span>
</div>
<div class="mb-3">
  <label for="Phonenumber" class="form-label">Phone Number</label>
  <input type="text" class="form-control" id="Phonenumber" name="Phonenumber" value="{{$data->Phonenumber}}">
  <span class="error-handling crud-err">@error('Phonenumber'){{$message}}@enderror</span>
</div>
<div class="mb-3">
<label for="Description" class="form-label">Description</label>
  <textarea class="form-control" id="Description" name="Description" rows="4">{{$data->Description}}</textarea>
  <span class="error-handling crud-err">@error('Description'){{$message}}@enderror</span>
</div>
<button type="submit" class="btn btn-success">Update</button>
</form>
</div>
@endsection
