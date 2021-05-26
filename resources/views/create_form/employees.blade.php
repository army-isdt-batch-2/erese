@php $active = 'employees' @endphp
@extends('layouts.main')
@section('title', 'Create Employees')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Employee
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="inputEmail4" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Contact</label>
                            <input type="tel" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Birthday</label>
                            <input type="date" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Gender</label>
                            <select id="inputState" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Department</label>
                            <select id="inputState" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Department 1</option>
                                <option>Department 2</option>
                                <option>Department 3</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Designation</label>
                            <input type="text" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Basic Rate</label>
                            <input type="number" class="form-control" id="inputPassword4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Philhealth Contribution table</label>
                            <select id="inputState" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Department 1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">SSS Contribution table</label>
                            <select id="inputState" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Department 1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">PAGIBIG Contribution table</label>
                            <select id="inputState" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Department 1</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip" required>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck" required>
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection