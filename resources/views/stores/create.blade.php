@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header"><h4 class="fw-bold">Create Store</h4></div>
        <div class="card-body">
            <form action="{{ route('stores.store') }}" method="post">
                {!! csrf_field() !!}

                <div class="my-3">
                    <label for="name" class="form-label">Store Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Store Name Here">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Store Address Here">
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Store Email Here">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="contact" class="form-label">Contact Number</label>
                    <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{ old('contact') }}" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Store Contact Number Here">
                    @error('contact')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success my-2"><i class="bi bi-floppy-fill me-2"></i> Save</button>
            </form>
        </div>
    </div>
</div>

@endsection