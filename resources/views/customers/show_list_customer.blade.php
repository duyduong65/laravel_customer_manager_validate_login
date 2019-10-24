@extends('layouts.app')

@section('content')
    <a href="{{route('customer.create')}}" class="btn btn-outline-primary">ADD</a>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Full Name</th>
            <th scope="col">Age</th>
            <th scope="col">Province</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $customer)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->age}}</td>
                <td>{{$customer->province}}</td>
                <td>
                    <a href="{{route('customer.delete',$customer->id)}}" class="btn btn-outline-success">Delete</a>
                    <a href="" class="btn btn-outline-success">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
