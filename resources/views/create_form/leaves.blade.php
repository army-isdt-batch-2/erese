@php $active = 'leaves' @endphp
@extends('layouts.main')
@section('title', 'Create Leave')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Apply Leave
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-4">
                        <form action="/leaves/create/save" method="post">
                        @csrf
                            <label for="inputEmail4" class="form-label">Designation</label>
                            <input type="email" class="form-control" name="designation" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Full Name</label>
                            <input type="email" class="form-control" name="full_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Employee ID</label>
                            <input type="email" class="form-control" name="employee_id" required>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Leave Type</label>
                                 <select id="inputState" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Maternity Leave</option>
                                <option>Sick</option>
                                <option>Paternity</option>
                                <option>Vication Leave</option>
                                <option>R&R</option>
                            </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Start</label>
                                <input type="date" class="form-control" name="start" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">End</label>
                                <input type="date" class="form-control" name="end" required>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Notes</label>
                                <textarea rows="7" class="form-control"></textarea>
                            </div>
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