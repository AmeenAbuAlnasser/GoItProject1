@extends('dashboard.layout.app')

@section('title', 'Transportation')

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
                    <th>From Place</th>
                    <th>To Place</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Contact Number</th>
                    <th>Note</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($transportation as $transport)
                    <tr>
                        <td>
                            {{ $transport->From_place }}
                        </td>
                        <td> {{ $transport->To_place }}</td>
                        <td>{{ $transport->type }}</td>
                        <td>{{ $transport->price }}</td>
                        <td>{{ $transport->Contact_Number }}</td>
                        <td> {{ $transport->Note }}</td>

                        <td class="d-flex">
                            <a href="{{route('dashboard.Transportation.edit',$transport->id)}}" class="btn btn-sm btn-info mx-1">Edit</a>
                            <form action="{{ route('dashboard.Transportation.destroy',$transport->id) }}" method="post">
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
