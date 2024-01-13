@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header"><h4 class="fw-bold">Employee Details</h4></div>
        <div class="card-body">
            <a href="{{ route('employees.index') }}" class="btn btn-outline-light border-0 ms-3" title="Add New Store">
                <i class="bi bi-arrow-left me-1 text-dark" aria-hidden="true"></i> <span class="text-dark fw-bold">Back to Employees</span>
            </a>
            <x-alert />
            <div class="card-body my-3">
                <h5 class="card-title">Employee Name : <span class="fw-bold">{{ $employee->name }}</span></h5>
                <p class="card-text">Address : {{ $employee->address }}</p>
                <p class="card-text">Store Name : {{ $employee->store->name }}</p>
                <p class="card-text">Position : {{ $employee->position->name}}</p>
                <p class="card-text">Email : {{ $employee->email }}</p>
                <p class="card-text">Contact Number : {{ $employee->contact }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection