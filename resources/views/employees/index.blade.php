@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4 class="fw-bold">Employees</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('employees.create') }}" class="btn btn-success btn-sm mb-2" title="Add New Employee">
                <i class="bi bi-plus-square me-1" aria-hidden="true"></i> Add New
            </a>
            <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" title="Add New Position" data-bs-target="#positions_modal" data-bs-target="#staticBackdrop">
                <i class="bi bi-person-gear me-1" aria-hidden="true"></i> Create New Position
            </button>
            <br/>
            <x-alert />
            <br/>
            @if($employees->isEmpty())
                <div class="alert alert-primary" role="alert">
                    <i class="bi bi-info-circle-fill me-2"></i> No Employee entries Available. Add new employees.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Employee Name</th>
                                <th>Store</th>
                                <th>Position</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th style="width: 13%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->store->name }}</td>
                                    <td>{{ $employee->position->name}}</td>
                                    <td title="{{ $employee->address }}">{{ $employee->address }}</td>
                                    <td title="{{ $employee->email }}">{{ $employee->email }}</td>
                                    <td>{{ $employee->contact }}</td>

                                    <td style="display: flex; flex-direction: row; align-items: center;">
                                        <div class="mb-1 mx-1">
                                            <a href="{{ route('employees.show', $employee) }}" title="View Employee Details" class="btn btn-info btn-sm text-start"><i class="bi bi-eye-fill" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="mb-1 mx-1">
                                            <a href="{{ route('employees.edit', $employee) }}" title="Edit Employee Details" class="btn btn-primary btn-sm text-start"><i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="mb-1 mx-1">
                                            <form action="{{ route('employees.destroy', ['id' => $employee->id]) }}" method="POST" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm text-start" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill" aria-hidden="true"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    <x-positions :positions="$positions" />

@endsection