@extends('layouts.volunteer')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Welcome, {{ Auth::user()->name }}!</h1>

<!-- Data Table of Request -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Request Lists</h6>
    </div>
    <div class="card-body">
        <h4 class="mb-4">Filter</h4>
        <div class="row">
            <!-- Select School Filter -->
            <div class="col-md-4">
                <label>
                    <strong> School </strong>
                </label>
                <select class="form-control mb-4" id="selectschool" name="school_id">
                    <option value=""></option>
                    @foreach (collect($schools)->unique('school_name') as $school)
                    <option value="{{ $school->school_name }}">{{ $school->school_name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- End of Select School Filter -->

            <!-- Select City Filter -->
            <div class="col-md-4">
                <label>
                    <strong> City </strong>
                </label>
                <select class="form-control mb-4" id="selectcity" name="school_city">
                    <option value=""></option>
                    @foreach (collect($schools)->unique('school_city') as $school)
                    <option value="{{ $school->school_city }}">{{ $school->school_city }}</option>
                    @endforeach
                </select>
            </div>
            <!-- End of Select City Filter -->

            <!-- Select Request Date Filter -->
            {{-- <!-- Pickdate -->
                <div class="col-md-4">
                    <label>
                        <strong> Request Date </strong>
                    </label>
                    <input type="date" class="form-control mb-4" id="selectdate" name="request_date">
                </div> --}}

            <!-- By Available Request Date -->
            <!-- *UPDATE: Multiple date, dont use this method -->
            <div class="col-md-4">
                <label>
                    <strong> Request Date </strong>
                </label>
                <select class="form-control mb-4" id="selectdate" name="request_date">
                    <option value=""></option>
                    @foreach (collect($requests)->unique('request_date') as $request)
                    <option value="{{ $request->request_date }}">{{ $request->request_date }}
                    </option>
                    @endforeach
                </select>
                <!-- End of Select Request Date Filter -->
            </div>

            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Request Date</th>
                            <th>Description</th>
                            <th>School Name</th>
                            <th>School City</th>
                            <th>View More</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Request Date</th>
                        <th>Description</th>
                        <th>School Name</th>
                        <th>School City</th>
                        <th>View More</th>
                    </tfoot>
                    <tbody>
                        @foreach($requests as $data)
                        <tr class="item{{ $data->id }}">
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->request_status }}</td>
                            <td>{{ $data->request_date }}</td>
                            <td>{{ $data->description }}</td>
                            <td>{{ $data->school->school_name}}</td>
                            <td>{{ $data->school->school_city }}</td>
                            <td>
                                <button class="btn btn-primary btn-block btn-sm" data-toggle="modal"
                                    data-target="#modalViewDetailRquest{{ $data->id }}"><i
                                        class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>Detail</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>

@foreach($requests as $data)
<div class="modal fade" id="modalViewDetailRquest{{ $data->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalViewDetailRquest{{ $data->id }}Label" aria-hidden="true">
    <div class="modal-dialog col-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalViewDetailRquest{{ $data->id }}Label">Request Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <table>
                    <tbody>
                        <tr>
                            <td style="vertical-align: top">Request ID</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->id }}</td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top">Request Date</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->request_date }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Request Status</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->request_status }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">School Name</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->school->school_name }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">School City</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->school->school_city }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Request Description</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->description }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Request Type</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{$request->resource_category ? "Resource" : "Tutorial"}}
                            </td>
                        </tr>
                        @if($data->student_level != null)
                        <tr>
                            <td style="vertical-align: top">Proposed Date</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->proposed_date }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Student Level</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->studentLevel->category_name ?? 'No data' }}</td>
                            </td>
                        <tr>
                            <td style="vertical-align: top">Student Number</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->student_number }}</td>
                        </tr>
                        @else
                        <tr>
                            <td style="vertical-align: top">Resource Category</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->resourceCategory->category_name ?? 'No data' }}
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top">Resource Quantity</td>
                            <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td style="vertical-align: top">{{ $data->resource_quantity }}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a href="{{route('offer.index',['request_data' => $data->id])}}" class="btn btn-primary btn-block">Make
                    an Offer</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

