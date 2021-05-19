@extends('layouts.app')

@section('contain')
<div class="card">
    <div class="card-header bg-primary text-white d-flex justify-content-between">
        <h3>Student List</h3>
        <a class="btn btn-success" href="{{ route('student.create') }}">Add Student</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->roll }}</td>
                    <td>{{ $student->mobile }}</td>
                    <td>{{ $student->address }}</td>
                    <td class="d-flex justify-content-between">
                        <a class="btn btn-success btn-sm" href="{{ route('student.show',$student) }}"><i class="far fa-eye"></i></a>
                        <a class="btn btn-primary btn-sm"  href="{{ route('student.edit',$student) }}"><i class="far fa-edit"></i></a>
                        <form action="{{ route('student.destroy',$student) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                        {{-- <a class="btn btn-danger btn-sm" href="#"><i class="far fa-trash-alt"></i></a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
