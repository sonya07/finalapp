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
                        <button type="submit" class="btn btn-primary">EXPORT</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
