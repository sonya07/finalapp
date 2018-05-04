@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">COSMOS Guests</div>

                <div class="card-body">
                    <div class = "container">
                    <form  action="{{ route('export_guests') }}" method="post">
                    @foreach($guests as $guest)
                    <div class = "row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="{{ $guest->year }}">
                                <label class ="form-check-label">
                                    {{ $guest->year }}-
                                </label>
                                <label class ="form-check-label">
                                    {{ $guest->total }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Export COSMOS</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
