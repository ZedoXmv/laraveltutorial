@extends('layout')

@section('content')
    

<a href="{{route('employee.create')}}" class="btn btn-primary">Add new employee</a>
<table class="table">

    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Number</th>
        <th>Date of birth</th>
        <th>Actions</th>
    </tr>

    @foreach ($employees as $employee)
    <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->designation}}</td>
        <td>{{$employee->number}}</td>
        <td>{{$employee->dob}}</td>
        <td>
            <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-outline-primary" >Edit</a>
            <form action="{{route('employee.destroy',$employee->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </td>
    </tr> 
    @endforeach


</table>



@endsection