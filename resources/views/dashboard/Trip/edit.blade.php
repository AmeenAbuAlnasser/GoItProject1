@extends('dashboard.layout.app')

@section('title', 'Trip / Create')

@section('content')
    <div class="card">
        <!-- Body -->
        <div class="card-body">
            <form action="{{ route('dashboard.Trip.update',$trip->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" required value="{{ $trip->Name}}" class="form-control" name="Name" id="Name"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="Date" class="form-label">Date</label>
                            <input type="text" required value="{{ $trip->Date }}" class="form-control" name="Date" id="Date"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="CityId" class="form-label">City Id</label>
                            <input type="number" required value="{{ $trip->City_id }}" class="form-control" name="CityId" id="CityId"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="details" class="form-label">Details</label>
                            <input type="number" required value="{{ $trip->details }}" class="form-control" name="details" id="details"
                                aria-label="Clarice">
                        </div>
                        <div class="mb-4">
                            <label for="Price" class="form-label">Price</label>
                            <input type="text" required value="{{ $trip->Price }}" class="form-control" name="Price" id="Price"
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
