@extends('dashboard.layout.app')

@section('title', 'Transportation/ Create')

@section('content')
    <div class="card">
        <!-- Body -->
        <div class="card-body">
            <form action="{{ route('dashboard.Transportation.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="FromPlace" class="form-label">From Place</label>
                            <input type="text" required value="{{ old('FromPlace') }}" class="form-control" name="FromPlace" id="FromPlace"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="ToPlace" class="form-label">To Place</label>
                            <input type="text" required value="{{ old('ToPlace') }}" class="form-control" name="ToPlace" id="ToPlace"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="Type" class="form-label">Type</label>
                            <input type="number" required value="{{ old('Type') }}" class="form-control" name="Type" id="Type"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="Price" class="form-label">Price</label>
                            <input type="number" required value="{{ old('Price') }}" class="form-control" name="Price" id="Price"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="ContactNumber" class="form-label">Contact Number</label>
                            <input type="text" required value="{{ old('ContactNumber') }}" class="form-control" name="ContactNumber" id="ContactNumber"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="Note" class="form-label">Note</label>
                            <input type="text" required value="{{ old('Note') }}" class="form-control" name="Note" id="Note"
                                aria-label="Clarice">
                        </div>




                    </div>
                    <!-- End Col -->
                    </div>
                </div>
                <!-- End Row -->

                <div class="d-flex justify-content-end gap-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
        <!-- Body -->
    </div>
@endsection

@push('scripts')
@endpush
