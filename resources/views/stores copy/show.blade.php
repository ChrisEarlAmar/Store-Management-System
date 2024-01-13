@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header"><h4 class="fw-bold">Store Details</h4></div>
        <div class="card-body">
            <a href="{{ route('stores.index') }}" class="btn btn-outline-light border-0 ms-3" title="Add New Store">
                <i class="bi bi-arrow-left me-1 text-dark" aria-hidden="true"></i> <span class="text-dark fw-bold">Back to Stores</span>
            </a>
            <x-alert />
            <div class="card-body my-3">
                <h5 class="card-title">Store Name : <span class="fw-bold">{{ $store->name }}</span></h5>
                <p class="card-text">Address : {{ $store->address }}</p>
                <p class="card-text">Email : {{ $store->email }}</p>
                <p class="card-text">Contact Number : {{ $store->contact }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection