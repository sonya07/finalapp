@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users <a class="hollow button" href="{{ route('print_user') }}">PRINT</a></div>

                <div class="card-body">
                    <div class = "container">
                    
                    @foreach($users as $user)
                    <div class = "row">
                        <div class = "col-md-2">
                             {{ $user->id }}
                        </div>
                        <div class = "col-md-2">
                            {{ $user->name }}
                        </div>
                        <div class = "col-md-5">
                             {{ $user->email }}
                        </div>
                        <div class = "col-md-2">
                            <a class="hollow button" href="{{ route('show_user',['id'=>$user->id]) }}">EDIT</a>
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
