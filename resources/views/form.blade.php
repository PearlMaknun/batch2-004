@extends("template")
@section("content")
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Label</label>
    <input type="email" class="form-control" id="" aria-describedby="" placeholder="Enter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Label</label>
    <input type="email" class="form-control" id="" aria-describedby="" placeholder="Enter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Label</label>
    <input type="email" class="form-control" id="" aria-describedby="" placeholder="Enter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Label</label>
    <input type="email" class="form-control" id="" aria-describedby="" placeholder="Enter">
  </div>
</form>
<div class="text-right">
	<a href="{{ url('form') }}" class="btn btn-primary">Simpan Data </a>
</div>
@endsection