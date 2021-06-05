<form action="{{route('add')}}" method="POST">
@csrf
<div class="mb-3">
  <label for="Name" class="form-label">Name</label>
  <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter your name.">
  <span class="error-handling crud-err">@error('Name'){{$message}}@enderror</span>
</div>
<div class="mb-3">
  <label for="Lastname" class="form-label">Lastname</label>
  <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Enter your lastname.">
  <span class="error-handling crud-err">@error('Lastname'){{$message}}@enderror</span>
</div>
<div class="mb-3">
  <label for="Email" class="form-label">Email</label>
  <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter your Email.">
  <span class="error-handling crud-err">@error('Email'){{$message}}@enderror</span>
</div>
<div class="mb-3">
  <label for="Phonenumber" class="form-label">Phone Number</label>
  <input type="text" class="form-control" id="Phonenumber" name="Phonenumber" placeholder="Enter your Phone Number.">
  <span class="error-handling crud-err">@error('Phonenumber'){{$message}}@enderror</span>
</div>
<div class="mb-3">
<label for="Description" class="form-label">Description</label>
  <textarea class="form-control" id="Description" name="Description" rows="4" placeholder="Description ..."></textarea>
  <span class="error-handling crud-err">@error('Description'){{$message}}@enderror</span>
</div>
<button type="submit" class="btn btn-success">Add</button>
</form>
