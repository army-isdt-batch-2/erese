@php $active = 'payslips' @endphp
@extends('layouts.main')
@section('title', 'Payroll Management')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Process Payroll 
                        </h4>
                    </div>
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cutt-off start</label>
                            <input type="date" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cutt-off end</label>
                            <input type="date" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Process</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection