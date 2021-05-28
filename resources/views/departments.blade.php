@php $active = 'departments' @endphp
@extends('layouts.main')
@section('title', 'Department Test')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        All Departments
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="/departments/create" class="btn btn-dark">Create</a>
                </div>
                <div class="col-12">
                    
                        <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                    <input type="text" class="form-control" placeholder="Search">
                </div>

                <div class="col-12">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="text-muted" scope="col">Departments</th>
                                <th class="text-muted" scope="col">Created</th>
                                <th class="text-muted" scope="col">Updated</th>
                                <th class="text-muted" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                    <!-- $loop for the data from the table -->
                        @foreach($data as $x)
                        <tr>
                            <th scope="row">{{ $x->id }}</th>
                            <th scope="row">{{ $x->departments }}</th>
                            <th scope="row">{{ $x->created }}</th>
                            <th scope="row">{{ $x->updated_at }}</th>
                            <th scope="row">{{ $x->action_at }}</th>
                            
                        </tr>
                        @endforeach
                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection