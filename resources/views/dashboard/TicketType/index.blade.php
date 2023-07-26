@extends('dashboard.layout.app')

@section('title', 'Ticket Type')

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
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($tickets as $ticket)
                    <tr>
                        <td>
                            {{ $ticket->Name }}
                        </td>
                        <td class="d-flex">
                            <a href="{{route('dashboard.TicketType.edit',$ticket->id)}}" class="btn btn-sm btn-info mx-1">Edit</a>
                            <form action="{{ route('dashboard.TicketType.destroy',$ticket->id) }}" method="post">
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
