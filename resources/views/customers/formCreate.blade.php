@extends('customers.formInformation')
@section('info')
    <form action="{{route('customer.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter full name">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" name="age" class="form-control" placeholder="Enter age">
        </div>
        <div class="form-group">
            <label>Province</label>
            <input type="text" name="province" class="form-control" placeholder="Enter province">
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
@endsection
