@extends('dashboard.layout.app')

@section('title', 'Hotels/ Update')
@push('styles')
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css') }}">
@endpush
@section('content')
    <div class="card">
        <!-- Body -->
        <div class="card-body">
            <form action="{{ route('dashboard.hotels.update',$hotel->id ) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="firstNameLabel" class="form-label">Name</label>
                            <input type="text" required value="{{ $hotel->Name }}" class="form-control" name="Name"
                                id="firstNameLabel" aria-label="Clarice">
                        </div>
                        <!-- End Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="namear" class="form-label">Address</label>
                            <input type="text" required value="{{ $hotel->Address }}" class="form-control" name="Address"
                                id="namear" aria-label="Clarice">
                        </div>
                        <!-- End Form -->
                    </div>
                    <!-- End Col -->
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="tom-select-custom mb-3">
                            <label for="countrySelect" class="form-label">Cities</label>

                            <select class="js-select form-select" id="countrySelect" name="City_id" autocomplete="off"
                                data-hs-tom-select-options='{
                            "placeholder": "Select country"
                          }'>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id}}"
                                        data-option-template='<div>{{ $city->NameE }}</div>'>
                                        {{ $city->NameE }}
                                    </option>
                                @endforeach
                            </select>
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
    <script src="{{ asset('dashboard/assets/vendor/tom-select/dist/js/tom-select.complete.min.js') }}"></script>
    <script>
        (function() {
            window.onload = function() {


                // INITIALIZATION OF NAVBAR VERTICAL ASIDE
                // =======================================================
                new HSSideNav('.js-navbar-vertical-aside').init()


                // INITIALIZATION OF FORM SEARCH
                // =======================================================
                new HSFormSearch('.js-form-search')


                // INITIALIZATION OF BOOTSTRAP DROPDOWN
                // =======================================================
                HSBsDropdown.init()


                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')


                // INITIALIZATION OF ADD FIELD
                // =======================================================
                new HSAddField('.js-add-field', {
                    addedField: field => {
                        HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
                        HSCore.components.HSMask.init(field.querySelector('.js-input-mask'))
                    }
                })


                // INITIALIZATION OF INPUT MASK
                // =======================================================
                HSCore.components.HSMask.init('.js-input-mask')
            }
        })()
    </script>
@endpush
