@extends('dashboard.layout.app')

@section('title', 'Countries')

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
                    <th>Name Ar</th>
                    <th>Name En</th>
                    <th>Code</th>
                    <th>Num Of Cities</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($countries as $country)
                    <tr>
                        <td>
                            {{ $country->NameA }}
                        </td>
                        <td>
                            {{ $country->NameE }}
                        </td>
                        <td>
                            {{ $country->Code }}
                        </td>
                        <td>
                            {{ $country->cities_count }}
                        </td>
                        <td>
                            {{ $country->Created_At }}
                        </td>
                        <td class="d-flex">
                            <a href="{{route('dashboard.countries.edit',$country->id)}}" class="btn btn-sm btn-info mx-1">Edit</a>
                            <form action="{{ route('dashboard.countries.destroy',$country->id) }}" method="post">
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
