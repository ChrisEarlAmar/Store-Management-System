@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header"><h4 class="fw-bold">Edit Employee Details</h4></div>
        <div class="card-body">
            <form action="{{ route('employees.update', $employee->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PUT')
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="my-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $employee->name) }}" placeholder="Employee Name Here">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $employee->address) }}" placeholder="Employee Address Here">
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="store_id" class="form-label">Store</label>
                            <select name="store_id" id="store_id" class="form-select" value="{{$employee->store_id}}">
                                @foreach($stores as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                            @error('store_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="my-3">
                            <label for="position_id" class="form-label">Position</label>
                            <select name="position_id" id="position_id" class="form-select" value="{{$employee->position}}">
                                @foreach($positions as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                            @error('position')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('name', $employee->email) }}" placeholder="Employee Email Here">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="contact" class="form-label">Contact Number</label>
                            <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{ old('name', $employee->contact) }}" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Employee Contact Number Here">
                            @error('contact')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success my-2"><i class="bi bi-floppy-fill me-2"></i> Save</button>
            </form>
        </div>
    </div>
</div>

@endsection