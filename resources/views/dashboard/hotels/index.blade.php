@extends('dashboard.layout.app')

@section('title', 'Hotels')

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
                    <th>City name</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($hotels as $hotelo)
                    <tr>
                        <td>
                            {{ $hotelo->Name }}
                        </td>
                        <td>
                            {{ $hotelo->city->NameE }}
                        </td>
                        <td>
                            {{ $hotelo->Address }}
                        </td>
                        <td>
                            {{ $hotelo->Created_At }}
                        </td>
                        <td class="d-flex ">
                            <a href="{{route('dashboard.hotels.edit',$hotelo->id)}}" class="btn btn-sm btn-info mx-1">Edit</a>
                            <form action="{{ route('dashboard.hotels.destroy',$hotelo->id) }}" method="post">
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
                        <td colspan="5" class="text-center">No Hotel Found</td>

                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
