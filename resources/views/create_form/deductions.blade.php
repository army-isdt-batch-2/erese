@php $active = 'deductions' @endphp
@extends('layouts.main')
@section('title', 'Create Mandatory Deduction')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Mandatory Deduction
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-6">
                        <form action="/deductions/create/save" method="post">
                        @csrf
                            <label for="inputEmail4" class="form-label">Contribution Type</label>
                            <input type="number" class="form-control" name="Contribution Type" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Base Range</label>
                            <input type="number" class="form-control" name="base range" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Monthly Contribution</label>
                            <input type="number" class="form-control" name="monthly contribution" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Employee Share</label>
                            <input type="number" class="form-control" name="employee share" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Employer Share</label>
                            <input type="number" class="form-control" name="employer share" required>
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