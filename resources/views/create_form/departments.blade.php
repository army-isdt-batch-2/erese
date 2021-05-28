@php $active = 'departments' @endphp
@extends('layouts.main')
@section('title', 'Create Departments')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Department
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">

                    <form class="row g-3" action="{{ URL::route('departments.create.save') }}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Departments</label>
                            <input type="text" class="form-control" name="departments" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection