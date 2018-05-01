@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">COSMOS Guests</div>
    
                <div class="card-body">
                    <div class = "container">
                    <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_guest') }}">ADD NEW GUEST</a></div>

                    @foreach($guests as $guest)
                    <div class = "row">
                        <div class = "col-md-2">
                            {{ $guest->first_name }}
                        </div>
                        <div class = "col-md-2">
                             {{ $guest->last_name }}
                        </div>
                        <div class = "col-md-2">
                             {{ $guest->address_1 }}
                             {{ $guest->address_2 }}
                        </div>
                        <div class = "col-md-2">
                             {{ $guest->city }}
                        </div>
                        <div class = "col-md-1">
                             {{ $guest->state }}
                        </div>
                        <div class = "col-md-2">
                             {{ $guest->zip }}
                        </div>
                        <div class = "col-md-1">
                            <a class="hollow button" href="{{ route('show_guest',['id'=>$guest->id]) }}">EDIT</a>
                        </div>
                    </div>
                    @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
