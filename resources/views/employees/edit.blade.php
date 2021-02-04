@extends('layout')

@section('content')
    
<form action="{{route('employee.update',$employee->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Employee Name</label>
      <input value="{{$employee->name}}" type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Designation</label>
      <input value="{{$employee->designation}}" type="text" name='designation' class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Number</label>
      <input value="{{$employee->number}}" type="text" name='number' class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Date of birth</label>
      <input value="{{$employee->dob}}" type="date" name='dob' class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection