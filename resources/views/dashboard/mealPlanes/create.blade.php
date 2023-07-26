@extends('dashboard.layout.app')

@section('title', 'Meal Planes/ Create')

@section('content')
    <div class="card">
        <!-- Body -->
        <div class="card-body">
            <form action="{{ route('dashboard.mealPlanes.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="firstNameLabel" class="form-label">Name</label>
                            <input type="text" required value="{{ old('Name') }}" class="form-control" name="Name" id="firstNameLabel"
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
