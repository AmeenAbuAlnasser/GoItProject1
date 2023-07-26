@extends('dashboard.layout.app')

@section('title', 'Ticket Type/ Update')

@section('content')
    <div class="card">
        <!-- Body -->
        <div class="card-body">
            <form action="{{ route('dashboard.TicketType.update',$ticket->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="firstNameLabel" class="form-label">Name</label>
                            <input type="text" required value="{{ $ticket->Name  }}" class="form-control" name="Name" id="firstNameLabel"
                                aria-label="Clarice">
                        </div>
                        <!-- End Form -->
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
