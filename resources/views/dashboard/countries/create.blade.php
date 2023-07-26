@extends('dashboard.layout.app')

@section('title', 'Countries/ Create')

@section('content')
    <div class="card">
        <!-- Body -->
        <div class="card-body">
            <form action="{{ route('dashboard.countries.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="firstNameLabel" class="form-label">Name En</label>
                            <input type="text" required value="{{ old('NameE') }}" class="form-control" name="NameE" id="firstNameLabel"
                                aria-label="Clarice">
                        </div>
                        <!-- End Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="namear" class="form-label">Name Ar</label>
                            <input type="text" required value="{{ old('NameA') }}" class="form-control" name="NameA" id="namear" aria-label="Clarice">
                        </div>
                        <!-- End Form -->
                    </div>
                    <!-- End Col -->
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="namear" class="form-label">Code</label>
                            <input type="text" required value="{{ old('Code') }}" class="form-control" name="Code" id="namear" aria-label="Clarice">
                        </div>
                        <!-- End Form -->
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
