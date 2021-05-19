@extends('layouts.app')
@section('contain')
<div class="card">
    <div class="card-header bg-primary text-white d-flex justify-content-between">
        <h2>Create Student</h2>
        <a class="btn btn-success" href="{{ url()->previous() }}"><i class="fas fa-chevron-left"></i> Back</a>
    </div>
    <div class="card-body">
        <form class="row g-3" action="{{ route('student.store') }}" method="POST">
            @csrf
            <div class="col-md-10">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name">
            </div>
            <div class="col-6">
                <label for="roll" class="form-label">Roll</label>
                <input type="number" value="{{ old('roll') }}" class="form-control" name="roll">
            </div>
            <div class="col-6">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="number" value="{{ old('mobile') }}" class="form-control" name="mobile">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address</label>
                <textarea name="address" class="form-control"  id="" cols="30" rows="10"></textarea>
            </div>
            <div class="col-2 form-group mt-3">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
