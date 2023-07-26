@extends('dashboard.layout.app')

@section('title', 'Trip')

@section('content')
    <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
            data-hs-datatables-options='{
             "columnDefs": [{
                "targets": [0, 4, 9],
                "width": "5%",
                "orderable": false
              }],
             "order": [],
             "info": {
               "totalQty": "#datatableWithPaginationInfoTotalQty"
             },
             "search": "#datatableSearch",
             "entries": "#datatableEntries",
             "pageLength": 12,
             "isResponsive": false,
             "isShowPaging": false,
             "pagination": "datatablePagination"
           }'>
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>City Id</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($trips as $trip)
                    <tr>
                        <td> {{ $trip->Name }}</td>
                        <td>{{ $trip->Date }}</td>
                        <td>{{ $trip->City_id }}</td>
                        <td>{{ $trip->details }}</td>
                        <td> {{ $trip->Price }}</td>

                        <td class="d-flex">
                            <a href="{{route('dashboard.Trip.edit',$trip->id)}}" class="btn btn-sm btn-info mx-1">Edit</a>
                            <form action="{{ route('dashboard.Trip.destroy',$trip->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">
                                    delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Countries Found</td>

                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
