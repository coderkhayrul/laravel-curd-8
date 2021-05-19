@extends('layouts.app')
@section('contain')
<div class="card">
    <div class="card-header bg-primary text-white d-flex justify-content-between">
        <h2>Student Details</h2>
        <a class="btn btn-success" href="{{ url()->previous() }}"><i class="fas fa-chevron-left"></i> Back</a>
    </div>
    <div class="card-body">
        <form class="row g-3">
            <div class="col-md-2">
                <label for="inputEmail4" class="form-label">Id</label>
                <input type="text" class="form-control" disabled value="{{ $student->id }}">
            </div>
            <div class="col-md-10">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="{{ $student->name }}" class="form-control" disabled>
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Roll</label>
                <input type="text" value="{{ $student->roll }}" class="form-control" disabled>
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Mobile</label>
                <input type="text" value="{{ $student->mobile }}" class="form-control" disabled>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address</label>
                <textarea class="form-control"  id="" cols="30" rows="10" disabled>{{ $student->address }}</textarea>
            </div>
        </form>
    </div>
</div>
@endsection
