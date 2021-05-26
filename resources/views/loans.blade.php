@php $active = 'loans' @endphp
@extends('layouts.main')
@section('title', 'Loans')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        All Loans
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="/loans/create" class="btn btn-dark pull-right">Create</a>
                </div>
                <div class="col-12">
                    <form action="/create/save" method="post">
                        @csrf
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
                                <th class="text-muted" scope="col">Employee ID</th>
                                <th class="text-muted" scope="col">Loan Type</th>
                                <th class="text-muted" scope="col">Amount</th>
                                <th class="text-muted" scope="col">Months Payable</th>
                                <th class="text-muted" scope="col">Total</th>
                                <th class="text-muted" scope="col">Balance</th>
                                <th class="text-muted" scope="col">Status</th>
                                <th class="text-muted" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection