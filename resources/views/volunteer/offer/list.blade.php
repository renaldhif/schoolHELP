@extends('layouts.volunteer')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Welcome, {{ Auth::user()->name }}!</h1>

<!-- Data Table of Request -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Offers List</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>School</th>
                            <th>Remarks</th>
                            <th>Offer Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <th>#</th>
                        <th>School</th>
                        <th>Remarks</th>
                        <th>Offer Date</th>
                        <th>Status</th>
                    </tfoot>
                    <tbody>
                        @foreach($offers as $data)
                        <tr class="item{{ $data['id'] }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data['school'] }}</td>
                            <td>{{ $data['remarks'] }}</td>
                            <td>{{ $data['offer_proposed'] }}</td>
                            <td>{{ $data['offer_status'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
