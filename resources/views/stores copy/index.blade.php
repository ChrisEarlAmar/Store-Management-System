@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4 class="fw-bold">Stores</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('stores.create') }}" class="btn btn-success btn-sm" title="Add New Store">
                <i class="bi bi-plus-square me-1" aria-hidden="true"></i> Add New
            </a>
            <br/>
            <x-alert />
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Store Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($stores->isEmpty())
                            <tr>
                                <td class="text-center" colspan="6">
                                    <div class="alert alert-warning" role="alert">
                                        <i class="bi bi-exclamation-triangle-fill me-2"></i> No Stores Available. Add new stores.
                                    </div>
                                </td>
                            </tr>
                        @else
                            @foreach($stores as $store)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $store->name }}</td>
                                    <td>{{ $store->address }}</td>
                                    <td>{{ $store->email }}</td>
                                    <td>{{ $store->contact }}</td>

                                    <td>
                                        <a href="{{ route('stores.show', $store) }}" title="View Store Details"><button class="btn btn-info btn-sm mb-2"><i class="bi bi-eye-fill me-1" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ route('stores.edit', $store) }}" title="Edit Store Details"><button class="btn btn-primary btn-sm mb-2"><i class="bi bi-pencil-square me-1" aria-hidden="true"></i> Edit</button></a>

                                        <form action="{{ route('stores.destroy', ['id' => $store->id]) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mb-2" title="Delete Store" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill me-1" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection