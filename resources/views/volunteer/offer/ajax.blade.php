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
            <td style="vertical-align: top">{{$data->resource_category ? "Resource" : "Tutorial"}}
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
<hr>
<a href="{{route('offer.index',['request_data' => $data->id])}}" class="btn btn-primary d-block">Make
    an Offer</a>
