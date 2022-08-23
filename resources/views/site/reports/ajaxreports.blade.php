<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
    <thead>
        <tr>
            <th>Action</th>
            <th>Stage</th>
            <th>Lead_Status</th>
            <th>Customer_Name</th>
            <th>Contact_Number</th>
            <th>POC_Name</th>
            <th>Industry</th>
            <th>Lead_Source</th>
            <th>Email</th>
            <th>First_Contact_Date</th>

            {{-- <th>Created By</th> --}}


            <th>Reason For Lost</th>
            <th>Reason For Dormant</th>
            <th>Reason</th>
        </tr>
    </thead>
    <tbody class="tablebody">
        @foreach ($leads as $item)
            <tr>
                <td>
                    <a href="view_lead/{{ $item->id }}"><span class="ti-eye lg\:absolute "
                            style="font-size:19px;color:#17a2b8;display:flex;justify-content:center"></span></a>

                </td>
                <td style="color: rgb(87, 209, 87)">{{ $item->stage }}</td>
                <td>{{ $item->Lead_Status }}</td>
                <td>{{ $item->Customer_Name }}</td>
                <td>{{ $item->Contact_Number }}</td>
                <td>{{ $item->POC_Name }}</td>
                <td>{{ $item->Industry }}</td>
                <td>{{ $item->Lead_Source }}</td>
                <td>{{ $item->Email }}</td>
                <td>{{ $item->First_Contact_Date }}</td>



                {{-- <td>{{ $item->created_by_user->name }}</td> --}}


                <td>{{ $item->lost_reason }}</td>
                <td>{{ $item->dormant_reason }}</td>
                <td>{{ $item->Reason }}</td>
            </tr>
        @endforeach
    </tbody>

</table>
